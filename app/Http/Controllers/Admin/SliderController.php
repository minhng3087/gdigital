<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use Input, File;
use Validator,Auth;
class SliderController extends Controller
{
    public function getList()
    {  
        $trang = 'slider';
        $data = Slider::all();
        return view('backend.slider.list', compact('data','trang'));
    }
    public function getAdd()
    {
        $trang = 'slider';
        $data = Slider::all();
        return view('backend.slider.add', compact('data','trang'));
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,
            ["txtName" => "required"],
            ["txtName.required" => "Bạn chưa nhập tên slider"]
        );
        $img = $request->file('fImages');
        $path_img='upload/hinhanh';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
        $img2 = $request->file('fImages2');
        $path_img2='upload/hinhanh';
        $img_name2='';
        if(!empty($img2)){
            $img_name2=time().'_'.$img2->getClientOriginalName();
            $img2->move($path_img2,$img_name2);
        }
        $news = new Slider;
        $news->name = $request->txtName;
        $news->mota = $request->txtDesc;
        $news->link = $request->txtLink;
        $news->content = $request->txtContent;
        $news->photo = $img_name;
        $news->icon = $img_name2;
        $news->stt = intval($request->stt);
        if($request->status=='on'){
            $news->status = 1;
        }else{
            $news->status = 0;
        }
        $news->user_id = Auth::user()->id;
        $news->save();
        return redirect('backend/slider')->with('status','Thêm mới thành công !');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getEdit(Request $request)
    {
        $trang = 'slider';
        $id= $request->get('id');
        //Tìm article thông qua mã id tương ứng
        $data = Slider::find($id);
        if(!empty($data)){
            if($request->get('hienthi')>0){
                if($data->status == 1){
                    $data->status = 0; 
                }else{
                    $data->status = 1; 
                }
                $data->update();
                return redirect('backend/slider')->with('status','Cập nhật thành công !');
            }
            if($request->get('noibat')>0){
                if($data->noibat == 1){
                    $data->noibat = 0; 
                }else{
                    $data->noibat = 1; 
                }
                $data->update();
                return redirect('backend/slider')->with('status','Cập nhật thành công !');
            }
            $news = slider::select('stt')->orderBy('id','asc')->get()->toArray();
            // Gọi view edit.blade.php hiển thị bải viết
            return view('backend.slider.edit',compact('data','news','id','trang'));
        }else{
            return redirect('backend/slider')->with('status','Dữ liệu không có thực !');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $this->validate($request,
            ["txtName" => "required"],
            ["txtName.required" => "Bạn chưa nhập tên danh mục"]
        );
        $id= $request->get('id');
        $news = Slider::findOrFail($id);
        //$news = slider::select()->where('id' , $id)->where('com' , $com)->get();
        if(!empty($news)){
            $img = $request->file('fImages');
            $img_current = 'upload/hinhanh/'.$request->img_current;
            if(!empty($img)){
                $path_img='upload/hinhanh';
                $img_name=time().'_'.$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $news->photo = $img_name;
                if (File::exists($img_current)) {
                    File::delete($img_current);
                }
            }
            $img2 = $request->file('fImages2');
            $img_current2 = 'upload/hinhanh/'.$request->img_current2;
            if(!empty($img2)){
                $path_img2='upload/hinhanh';
                $img_name2=time().'_'.$img2->getClientOriginalName();
                $img2->move($path_img2,$img_name2);
                $news->icon = $img_name2;
                if (File::exists($img_current2)) {
                    File::delete($img_current2);
                }
            }
            $news->name = $request->txtName;
            $news->link = $request->txtLink;
            $news->mota = $request->txtDesc;
            $news->content = $request->txtContent;
            if($request->status=='on'){
                $news->status = 1;
            }else{
                $news->status = 0;
            }
            $news->user_id = Auth::user()->id;
            $news->save();
            return redirect('backend/slider/edit?id='.$id)->with('status','Cập nhật thành công');
        }else{
            return redirect()->back()->with('status','Dữ liệu không có thực');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getDelete($id)
    {
        $trang = 'slider';
        $news = slider::findOrFail($id);
        $news->delete();
        File::delete('upload/hinhanh/'.$news->photo);
        return redirect('backend/slider')->with('status','Xóa thành công');
    }
    public function getDeleteList($id){
       $trang = 'slider';
        $listid = explode(",",$id);
        foreach($listid as $listid_item){
            $news = slider::findOrFail($listid_item);
            $news->delete();
            File::delete('upload/hinhanh/'.$news->photo);
        }
        return redirect('backend/slider')->with('status','Xóa thành công');
    }
}
