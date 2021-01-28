<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductCate;
use App\Setting;
use App\Images;
use Input, File;
use Validator;
use Auth;
use DB;
class SettingController extends Controller
{
    public function index()
    {
        $data = DB::table('setting')->select()->first();
        return view('backend.setting.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $setting = DB::table('setting')->select()->first();
        $data = Setting::find($setting->id);
        if(!empty($data)){
            $img2 = $request->file('fImagesFavico');
            $banner = $request->file('banner');
            $path_img2='upload/hinhanh';
            if(!empty($img2)){
                $img_name2=time().'_'.$img2->getClientOriginalName();
                $img2->move($path_img2,$img_name2);
                $data->favico = $img_name2;
            }
            if(!empty($banner)) {
                $img_banner=time().'_'.$banner->getClientOriginalName();
                $banner->move($path_img2,$img_banner);
                $data->banner = $img_banner;
            }
            $data->name = $request->txtName;
            $data->maps = $request->maps;
            $data->links1 = $request->links1; //facebook
            $data->links2 = $request->links2; //youtube
            $data->links3 = $request->links3; //twitter
            $data->links4 = $request->links4; //google
            $data->links5 = $request->links5; //instagram
            $data->phone = $request->txtPhone;
            $data->hotline = $request->hotline;
            $data->copyright = $request->copyright;
            $data->email = $request->txtEmail;
            $data->address = $request->address;
            $data->analytics = $request->txtAnalytics;
            $data->content = $request->txtContent;
            $data->codechat = $request->txtCodeChat;
            $data->save();
            return redirect('backend/setting')->with('status','Cập nhật thành công');
        }else{
            return redirect('backend')->with('status','Cập nhật dữ liệu lỗi');
        }
    }
}



