<?php 
namespace App\Http\Controllers\Admin;
//use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;
use App\Valueproduct;
use App\Images;
use Input, File;
use Validator;
use Auth;
use App\Product_Image;
use App\Catespecification;
use App\Tag;
use App\Tag_Product;
use DB;
class ProductController extends Controller
{
    public function getList()
    {   
        if($_GET['type']=='san-pham') $trang='sản phẩm';
        else $trang = 'dịch vụ';
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $data = Products::select('id','name','photo','cate_id','alias','noibat','status','hot','stt')->where('com',$com)->orderBy('id','DESC')->paginate(10);
        return view('backend.product.list', compact('data', 'trang'));
    }
     public function search()
    {
        $keyword='';  
         if(!empty($_GET['name'])) {
            $keyword=$_GET['name'];
     	 }
        $data = Products::select()->where('name', 'LIKE', '%' . $keyword . '%')->where('display',1)->orderBy('id','DESC')->get();
        return view('backend.product.search', compact('data'));
    }
    public function getAdd()
    {
        if($_GET['type']=='san-pham') $trang='sản phẩm';
        else $trang = 'dịch vụ';
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $data = Products::select()->where('com' , $com)->get();
        return view('backend.product.add', compact('data','trang'));
    }
    public function modal()
    {
        return view('backend.product.modal');
    }
    public function postAdd(ProductRequest $request)
    {
        $com= $request->txtCom;
        $img = $request->file('fImages');
        $img1 = $request->file('fImages1');
        $img2 = $request->file('fImages2');
        $img3 = $request->file('fImages3');
        $img4 = $request->file('fImages4');

        $path_img='upload/product';
        $img_name='';
        if(!empty($img)){
            $img_name=time().'_'.$img->getClientOriginalName();
            $img->move($path_img,$img_name);
        }
        $img_name1='';
        if(!empty($img1)){
            $img_name1=time().'_'.$img1->getClientOriginalName();
            $img1->move($path_img,$img_name1);
        }
        $img_name2='';
        if(!empty($img2)){
            $img_name2=time().'_'.$img2->getClientOriginalName();
            $img2->move($path_img,$img_name2);
        }
        $img_name3='';
        if(!empty($img3)){
            $img_name3=time().'_'.$img3->getClientOriginalName();
            $img3->move($path_img,$img_name3);
        }
        $img_name4='';
        if(!empty($img4)){
            $img_name4=time().'_'.$img4->getClientOriginalName();
            $img4->move($path_img,$img_name4);
        }
        $product = new Products;
        $product->name = $request->txtName;
        if(!empty($request->txtAlias)){
            $product->alias = $request->txtAlias;
        }else{
            $product->alias = changeTitle($request->txtName);
        }
        $product->mota = $request->txtDesc;
        $product->photo = $img_name;
        $product->photo1 = $img_name1;
        $product->photo2 = $img_name2;
        $product->photo3 = $img_name3;
        $product->photo4 = $img_name4;
        $product->com = $com;
        $product->cate_id = $com == 'san-pham' ? 0 : 1;
        // $product->text1 =  $request->text1;
        // $product->text2 =  $request->text2;
        // $product->text3 =  $request->text3;
        $product->title = $request->txtTitle;
        $product->content = $request->txtContent;
        $product->keyword = $request->txtKeyword;
        $product->description = $request->txtDescription;
        $product->stt = intval($request->stt);
        
         if($request->status=='on'){
            $product->status = 1;
        }else{
            $product->status = 0;
        }
             $product->save();
            $product_id = $product->id;
            $detail = new Product_Image;
    		$detail->imgdetail($request, $product->id);
            return redirect('backend/product?type='.$com)->with([
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
        //$data = Products::findOrFail($id);
        $data = Products::find($id);
        $product_img = Products::find($id)->pimg;
        if(!empty($data)){
            if($request->get('hienthi')>0){
                if($data->status == 1){
                    $data->status = 0;
                }else{
                    $data->status = 1;
                }
                $data->update();
                return redirect('backend/product?type='.$com)->with([
                 'toastr_lvl' => 'success',
                 'toastr_msg' => 'Cập nhật thành công!'
                ]);
            }
            if($request->get('noibat')>0){
                if($data->noibat == 1){
                    $data->noibat = 0;
                }else{
                    $data->noibat = 1;
                }
                $data->update();
                return redirect('backend/product?type='.$com)->with([
                 'toastr_lvl' => 'success',
                 'toastr_msg' => 'Cập nhật thành công!'
                ]);
            }
            if($request->get('hot')>0){
                if($data->hot == 1){
                    $data->hot = 0;
                }else{
                    $data->hot = 1;
                }
                $data->update();
                return redirect('backend/product?type='.$com)->with([
                 'toastr_lvl' => 'success',
                 'toastr_msg' => 'Cập nhật thành công!'
                ]);
            }
            $product = Products::select('stt')->orderBy('id','asc')->get()->toArray();
            //$product_img = Products::find($id)->pimg;
            // Gọi view edit.blade.php hiển thị bải viết
            return view('backend.product.edit',compact('data','product_img','product','id'));
        }else{
            return redirect('backend/product?type='.$com)->with('status','Dữ liệu không có thực !');
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
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $id= $request->get('id');
        $detail = new Product_Image;
		$detail->imgdetail($request, $id);        
        if($id){
            $product = Products::findOrFail($id);
            $img = $request->file('fImages');
            $img_current = 'upload/product/'.$request->img_current;
            if(!empty($img)){
                $path_img='upload/product';
                $img_name=time().'_'.$img->getClientOriginalName();
                $img->move($path_img,$img_name);
                $product->photo = $img_name;
            }
            $img1 = $request->file('fImages1');
            $img_current1 = 'upload/product/'.$request->img_current;
            if(!empty($img1)){
                $path_img='upload/product';
                $img_name1=time().'_'.$img1->getClientOriginalName();
                $img1->move($path_img,$img_name1);
                $product->photo1 = $img_name1;
                if (File::exists($img_current1)) {
                    File::delete($img_current1);
                }
            }
            $img2 = $request->file('fImages2');
            $img_current2 = 'upload/product/'.$request->img_current;
            if(!empty($img2)){
                $path_img='upload/product';
                $img_name2=time().'_'.$img2->getClientOriginalName();
                $img2->move($path_img,$img_name2);
                $product->photo2 = $img_name2;
                if (File::exists($img_current2)) {
                    File::delete($img_current2);
                }
            }
            $img3 = $request->file('fImages3');
            $img_current3 = 'upload/product/'.$request->img_current;
            if(!empty($img3)){
                $path_img='upload/product';
                $img_name3=time().'_'.$img3->getClientOriginalName();
                $img3->move($path_img,$img_name3);
                $product->photo3 = $img_name3;
                if (File::exists($img_current3)) {
                    File::delete($img_current3);
                }
            }
            $img4 = $request->file('fImages4');
            $img_current4 = 'upload/product/'.$request->img_current;
            if(!empty($img4)){
                $path_img='upload/product';
                $img_name4=time().'_'.$img4->getClientOriginalName();
                $img4->move($path_img,$img_name4);
                $product->photo4 = $img_name4;
                if (File::exists($img_current4)) {
                    File::delete($img_current4);
                }
            }
            $product->name = $request->txtName;
            if($request->txtAlias){
                $product->alias = $request->txtAlias;
            }else{
                $product->alias = changeTitle($request->txtName);
            }
            $product->title = $request->txtTitle;
            $product->mota = $request->txtDesc;
            // $product->text1 =  $request->text1;
            // $product->text2 =  $request->text2;
            // $product->text3 =  $request->text3;
            // $product->link =  $request->link;
        $product->stt = intval($request->stt);
            $product->cate_id = $com == 'san-pham' ? 0 : 1;
            $product->content = $request->txtContent;
            $product->keyword = $request->txtKeyword;
            $product->description = $request->txtDescription;
            /***********************/
            if($request->status=='on'){
                $product->status = 1;
            }else{
                $product->status = 0;
            }
             $product->save();
            return redirect('backend/product/edit?id='.$id.'&type='.$com)->with([
             'toastr_lvl' => 'success',
             'toastr_msg' => 'Cập nhật thành công!'
            ]);
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
      function changepos() {
        $vitri = $_REQUEST['order'];
        $ids =  $_REQUEST['idsy'];
        foreach ($vitri as $k=>$v) {
           $product =Products::findOrFail($ids[$k])->update(['stt' => $v]);
         }
      return redirect()->route('backend.product.index')->with('status','Cập nhật vị trí thành công !');
    }
    public function getDelete($id)
    {
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $product_img = Products::find($id)->pimg->toArray();
        foreach ($product_img as $value) {
           File::delete('upload/hasp/'.$value['photo']);
        }
        $product = Products::findOrFail($id);
        $product->delete();
        File::delete('upload/product/'.$product->photo);
        return redirect('backend/product?type='.$com)->with('status','Xóa thành công');

    }
    public function getDeleteList($id){
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $listid = explode(",",$id);
        foreach($listid as $listid_item){
            $product_img = Products::find($listid_item)->pimg->toArray();
            foreach ($product_img as $value) {
               File::delete('upload/hasp/'.$value['photo']);
            }
            $product = Products::findOrFail($listid_item);
            $product->delete();
            File::delete('upload/product/'.$product->photo);
        }
        return redirect('backend/product?type='.$com)->with('status','Xóa thành công');
    }
    public function getDelImg(Request $request,$id){         // use Request;
        if ($request->ajax()) {      
            $idImg = (int)$request->get('idImg');
            $image_detail = Images::find($idImg);
            if (!empty($image_detail)) {
                $img = 'upload/hasp/'.$image_detail->photo;
                if (File::exists($img)) {
                    File::delete($img);
                }
                $image_detail->delete();
            }
            $idImg = (int)$request->idImg;
			$image_detail = Product_Image::find($idImg);
			if (!empty($image_detail)) {
				$img = 'uploads/images/img_detail/'.$image_detail->image;
				if (File::exists($img)) {
					File::delete($img);
				}
				$image_detail->delete();
			}
            return 'OK';
        }
    }

}
