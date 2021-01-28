<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use App\News;
use App\Product_Image;
use Input, File;
use Validator;
use Auth;
use DB;
class NewsController extends Controller {
	public function getDanhSach()
    {
      if($_GET['type'] == 'tin-tuc') $trang = 'tin tức';
      elseif($_GET['type'] == 'gioi-thieu') $trang = 'giới thiệu';
      if (!empty($_GET['type'])) {
          $com  = $_GET['type'];
      }else {
          $com ='';
      }

      $data = News::select()->where('com', $com)->get();
      return view('backend.news.list', compact('data','trang'));
    }
    public function getAdd()
    {
        return view('backend.news.add');
    }
     public function modal()
    {
     	return view('backend.catenew.modal', compact('parent'));
    }
    public function postAdd(NewsRequest $request)
    {
        // dd($request);
        $com= $request->txtCom;
        $img = $request->file('fImages');
        $path_img='upload/news';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
        $product = new News;
        $product->com = $com;
        $product->name = $request->txtName;
        // $product->name_eg = $request->name_eg;
        if(!empty($request->relationship)){
            $product->relationship = implode(',',$request->relationship);
        }
        $product->cate_id = $com == 'tin-tuc' ? 0 : 1;
        // $product->mota_eg = $request->mota_eg;
        // $product->content_eg = $request->content_eg;
        //  if(@!empty($_REQUEST['txtProductCate'])){
            // $product->cate_id = implode(',',$request->txtProductCate);
            // }
            if($request->txtAlias){
                $product->alias = $request->txtAlias;
            }else{
                $product->alias = changeTitle($request->txtName);
            }
            $product->mota = $request->txtDesc;
            $product->photo = $img_name;
            $product->title = $request->txtTitle;
            $product->content = $request->txtContent;
            $product->description = $request->txtDescription;
            // $product->title_eg = $request->title_eg;
            // $product->keyword_eg = $request->keyword_eg;
            // $product->description_eg = $request->description_eg;
            $product->stt = intval($request->stt);
            if($request->status=='on'){
                $product->status = 1;
            }else{
                $product->status = 0;
            }
            $product->user_id = Auth::user()->id;
            $product->types = $request->types; // 0-gioi-thieu 1-tam-nhin 2-su-menh 3-gia-tri
            $product->link = $request->link; // 0-gioi-thieu 1-tam-nhin 2-su-menh 3-gia-tri
            $product->save();
            $product_id = $product->id;
            $detail = new Product_Image;
		$detail->imgdetail($request, $product->id);
        return redirect('backend/news?type='.$com)->with([
         'toastr_lvl' => 'success',
         'toastr_msg' => 'Thêm mới thành công!'
        ]);  
    }
    public function getEdit(Request $request)
    {
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $id= $request->get('id');
        //Tìm article thông qua mã id tương ứng
        $data = News::find($id);
        if(!empty($data)){
            if($request->get('hienthi')>0){
                if($data->status == 1){
                    $data->status = 0; 
                }else{
                    $data->status = 1; 
                }
                $data->update();
               return redirect('backend/news?type='.$com)->with([
                 'toastr_lvl' => 'success',
                 'toastr_msg' => 'Cập nhật thành công!'
                ]); 
            }
            // $news = LienKet::select('stt')->orderBy('id','asc')->get()->toArray();
            // Gọi view edit.blade.php hiển thị bải viết
            return view('backend.news.edit',compact('data','id'));
        }else{
            return redirect('backend/news?type='.$com)->with('status','Dữ liệu không có thực !');
        }
    }
    public function update(Request $request)
    {
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
    $id= $request->get('id');
    $detail = new Product_Image;
    $detail->imgdetail($request, $id);        
    if($id){
        $product = News::findOrFail($id);
        $img = $request->file('fImages');
        $img_current = 'upload/news/'.$request->img_current;
        if(!empty($img)){
            $path_img='upload/news';
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
            $product->photo = $img_name;
        }
        $product->name = $request->txtName;
        if(!empty($request->relationship)){
            $product->relationship = implode(',',$request->relationship);
        }
        $product->cate_id = $com == 'tin-tuc' ? 0 : 1;
        if($request->txtAlias){
            $product->alias = $request->txtAlias;
        }else{
            $product->alias = changeTitle($request->txtName);
        }
        $product->title = $request->txtTitle;
        $product->mota = $request->txtDesc;
        $product->content = $request->txtContent;
        $product->description = $request->txtDescription;
        if($request->status=='on'){
            $product->status = 1;
        }else{
            $product->status = 0;
        }
        $product->stt = intval($request->stt);
        $product->user_id = Auth::user()->id;
        $product->save();
        return redirect('backend/news/edit?id='.$id.'&type='.$com)->with([
         'toastr_lvl' => 'success',
         'toastr_msg' => 'Cập nhật thành công!'
        ]);
    }else{
        return redirect()->back()->with('status','Dữ liệu không có thực');
    }
    }
    public function getDelete($id)
    {
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $news = News::findOrFail($id);
        $news->delete();
        File::delete('upload/news/'.$news->photo);
        return redirect('backend/news?type='.$com)->with('status','Xóa thành công');
        return redirect()->route('backend.news.type='.$com)->with([
            'toastr_lvl' => 'success',
            'toastr_msg' => 'Xóa mới thành công!'
        ]);
    }
    public function getDeleteList($id){
        if($_GET['type']=='tin-tuc') $trang='tin tức';
        else if($_GET['type']=='gioi-thieu') $trang='giới thiệu';
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $listid = explode(",",$id);
        foreach($listid as $listid_item){
            $news = news::findOrFail($listid_item);
            $news->delete();
            File::delete('upload/news/'.$news->photo);
        }
        return redirect('backend/news?type='.$com)->with('status','Xóa thành công');
    }

    function changepos() {
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        } 
        $vitri = $_REQUEST['order'];
        $ids =  $_REQUEST['idsy'];
        foreach ($vitri as $k=>$v) {
           $product =News::findOrFail($ids[$k])->update(['stt' => $v]);
         }
       return redirect('backend/news?type='.$com)->with([
         'toastr_lvl' => 'success',
         'toastr_msg' => 'Cập nhật vị trí thành công !'
        ]); 
    }
}
