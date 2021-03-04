<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Options;
use App\Mail\SendTestEmail;
use Mail;
use App\Trails\MailTrait;



class SettingController extends Controller
{
    use MailTrait;

    public function getDeveloperConfig()
    {
    	$content = Options::where('type', 'dev-config')->first();
    	$content = json_decode($content->content);
    	return view('backend.options.developer-config', compact('content'));
    }

    public function postDeveloperConfig(Request $request)
    {
    	$options = Options::where('type', 'dev-config')->first();
		$options->content = !empty($request->content) ? json_encode($request->content) : null;
    	$options->save();
        toastr()->success('Cập nhật thành công.');
    	return back();
    }

    public function getGeneralConfig()
    {
        $content = Options::where('type', 'general')->first();
        $content = json_decode($content->content);
        return view('backend.options.general', compact('content'));
    }

    public function postGeneralConfig(Request $request)
    {
        $options = Options::where('type', 'general')->first();
        $options->content = !empty($request->content) ? json_encode($request->content) : null;
        $options->save();
        toastr()->success('Cập nhật thành công.');
        return back();
    }

    public function getSmtpConfig()
    {
        $data = Options::where('type', 'smtp-config')->first();
        $content = json_decode($data->content);
        return view('backend.options.smtp-config', compact('content'));   
    }

    public function postSmtpConfig(Request $request)
    {
        $content = Options::where('type', 'smtp-config')->first();
        $content->content = !empty($request->content) ? json_encode($request->content) : null;
        $content->save();
        toastr()->success('Cập nhật thành công.');
        return back();
    }

    public function postSendTestEmail(Request $request)
    {
        $contact['email'] = $request->smtp_email;
        $contact['title'] = $request->smtp_title;
        $contact['smtp_message'] = $request->smtp_message;
        // Mail::to($contact['email'])->send(new SendTestEmail($contact));

        // $content_email = [
        //     'name' => $request->name,
        //     'phone' => $request->phone,
        //     'male' => $request->male,
        //     'nam_sinh' => $request->nam_sinh,
        //     'thongtin_congtrinh' => $request->thongtin_congtrinh,
        //     'goi_dich_vu' => $request->goi_dich_vu,
        //     'hang_muc' => $request->hang_muc,
        //     'phong_cach' => $request->phong_cach,
        //     'url' => route('contact.edit', $data->id),
        // ]; 


        Mail::send('mail.test-email', $contact, function ($msg)  {

            $msg->from('lethilieu2707@gmail.com', 'Website - Thọ Quang Phát');

            $msg->to('nguyengiaminh2k@gmail.com', 'Website - Thọ Quang Phát')->subject('aava');

        });
        toastr()->success('Gửi thành công.');
        return back();
    }

    public function getTagsConfig()
    {
        $data = Options::where('type', 'tags-config')->first();
        $content = json_decode($data->content);
        return view('backend.options.tags-config', compact('content'));
    }

    public function postTagsConfig(Request $request)
    {
        $content = Options::where('type', 'tags-config')->first();
        $content->content = !empty($request->content) ? json_encode($request->content) : null;
        $content->save();
        toastr()->success('Cập nhật thành công.');
        return back();
    }
}
