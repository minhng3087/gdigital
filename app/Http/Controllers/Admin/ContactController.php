<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use DB;
use Auth;
class ContactController extends Controller
{
    public function getList()
	{
        $data = Contact::select()->orderBy('id','DESC')->where('type',1)->get();
		return view('backend.contact.list',compact('data'));
	}
    	public function show($id){
    		$data = Contact::findOrFail($id);
            $data->update();
    		return view('backend.contact.show',compact('data'));
    	}
           public function update(Request $request)
    {
        $id= $request->get('id');
    //die($id);
        if($id){
            $data = Contact::findOrFail($id);
            $data->display = $request->display;
        $data->save();
            return redirect('backend/contact')->with('status','Xử lý  thành công !');
        }else{
            return redirect('/')->with('status','Dữ liệu không có thực');
        }
    }
    public function getDelete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('backend/contact')->with('status','Xóa thành công');

    }
    public function getDeleteList($id){
        $listid = explode(",",$id);
        foreach($listid as $listid_item){
            $contact = Contact::findOrFail($listid_item);
            $contact->delete();
        }
        return redirect('backend/contact')->with('status','Xóa thành công');
    }
}
