<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Products;
use App\Models\Posts;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;


class CommentsController extends Controller
{

	protected function module(){
        return [
            'name' => 'Bình luận',
            'module' => 'comments',
            'table' =>[
                'name_product' => [
                    'title' => 'Tên',
                    'with' => ''
                ],
                'name_customers' => [
                    'title' => 'Tên khách hàng', 
                    'with' => '',
                ],
                'phone_customers' => [
                    'title' => 'Số điện thoại', 
                    'with' => '',
                ],
                'email_customers' => [
                    'title' => 'Email', 
                    'with' => '',
                ],
                'content' => [
                    'title' => 'Nội dung', 
                    'with' => '',
                ],
                'status' => [
                    'title' => 'Trạng thái', 
                    'with' => '100px',
                ],
                'created_at' => [
                    'title' => 'Ngày đăng', 
                    'with' => '',
                ],
                'view' => [
                    'title' => 'Chi tiết', 
                    'with' => '',
                ],
            ]
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['module'] = $this->module();
        if( $request->cate == 'product') $data['module'] = array_merge($this->module(),[
            'name' => 'Bình luận sản phẩm'
        ]);
        else $data['module'] = array_merge($this->module(),[
            'name' => 'Bình luận bài viết'
        ]);
        return view("backend.{$this->module()['module']}.list", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function anyData(Request $request) {
        $comments = Comments::orderBy('created_at', 'DESC')->where('id_customers', '!=', 77)->where('cate', $request->cate)->get();
        return Datatables::of($comments)
            ->addColumn('checkbox', function ($data) {
                return '<input type="checkbox" name="chkItem[]" value="' . $data->id . '">';
            })->addColumn('name_product', function ($data) {
                if($data->cate=='product' && !empty($data->Product->slug)){
                    return '<a href="'.route('home.single.product', $data->Product->slug).'" target="_blank">'.$data->Product->name.'</a>';
                }else 
                    return '<a href="'.route('home.post.single', $data->Post->slug).'" target="_blank">'.$data->Post->name.'</a>';

               return '--Sảm phẩm đã xóa--';
            })->addColumn('name_customers', function ($data) {
                if($data->type == 1){
                    return 'Administrator';
                }
                return $data->Customers->name;
            })->addColumn('phone_customers', function ($data) {
                if($data->type == 1){
                    return 'Administrator';
                }
                return $data->Customers->phone;
            })->addColumn('email_customers', function ($data) {
                if($data->type == 1){
                    return 'Administrator';
                }
                return $data->Customers->email;
            })->addColumn('created_at', function ($data) {
                    return $data->created_at->format('d/m/yy H:i:s');
            })->addColumn('content', function ($data) {
                    return html_entity_decode(text_limit(strip_tags($data->content), 10).'...');
            })->addColumn('view', function ($data) {
                    if($data->cate == 'product')
                    return '<a href="'.route('comments.show', ['id'=>$data->id_product, 'cate' => $data->cate]).'" class="btn btn-success btn-sm">Chi tiết</a>';
                    else
                    return '<a href="'.route('comments.show', ['id'=>$data->id_post, 'cate' => $data->cate]).'" class="btn btn-success btn-sm">Chi tiết</a>';
            })->addColumn('status', function ($data) {
                if ($data->status == 1) {
                    $status = ' <a href="javascript:;" class="activeq" data-id="'.$data->id.'"><span class="label label-success">Đã duyệt</span></a>';
                }else {
                    $status = ' <a href="javascript:;" class="activeq" data-id="'.$data->id.'"><span class="label label-danger">Chưa duyệt</span></a>';
                }
                return $status;
            })->addColumn('action', function ($data) {
                return '<a href="' . route('comments.edit', ['id' => $data->id, 'cate' => $data->cate]) . '" title="Sửa">
                        <i class="fa fa-pencil fa-fw"></i> Sửa
                    </a> &nbsp; &nbsp; &nbsp;';
            })->rawColumns(['checkbox', 'name_product', 'status', 'action', 'name', 'view'])
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'content' => 'required',
        ],[
            'content.required' => 'Bạn chưa nhập nội dung bình luận.'
        ]);
        $comment = new Comments;
        $comment->content = $request->content;
        $comment->parent_id = $request->parent_id;
        $comment->id_customers = auth()->user()->id;
        $comment->type = 1;
        $comment->status = 1;
        if (isset($request->id_product)) {
            $comment->id_product = $request->id_product;
            $comment->cate = 'product';
        }else {
            $comment->id_post = $request->id_post;
            $comment->cate = 'blog';
        } 
        $comment->save();
        toastr()->success('Bình luận thành công.');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $cate)
    {
        if ($cate == 'product') $data['data'] = Products::findOrFail($id);
        else $data['data'] = Posts::findOrFail($id);
        $data['module'] = $this->module();
        return view("backend.{$this->module()['module']}.view", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $data['data'] = Comments::findOrFail($id);
        if( $request->cate == 'product') $data['module'] = array_merge($this->module(),[
            'name' => 'Bình luận sản phẩm',
            'action' => 'update'
        ]);
        else $data['module'] = array_merge($this->module(),[
            'name' => 'Bình luận bài viết',
            'action' => 'update'
        ]);
        return view("backend.{$this->module()['module']}.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       	$data = Comments::findOrFail($id);
       	$data->content = $request->content;
       	$data->status  = $request->status ?? 0;
       	$data->save();
        toastr()->success('Cập nhật thành công.');
       	return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Comments::findOrFail($id);
        $dataChild = get_list_ids_comments($data);
        if(!empty($dataChild)){
            foreach ($dataChild as $value) {
                Comments::destroy($value);
            }
        }
        Comments::destroy($id);
        toastr()->success('Xóa thành công.');
        return back();
    }


    public function deleteMuti(Request $request)
    {
        if(!empty($request->chkItem)){
            foreach ($request->chkItem as $id) {
                Comments::destroy($id);
            }
            toastr()->success('Xóa thành công.');
            return back();
        }
        toastr()->error('Bạn chưa chọn dữ liệu cần xóa.');
        return back();
    }


    public function getQuickActive(Request $request)
    {
        $data = Comments::findOrFail($request->id);
        if($data->status == 1){
            $data->status = 0;
            $data->save();
            return '<span class="label label-danger">Chưa duyệt</span>';
        }else{
            $data->status = 1;
            $data->save();
            return '<span class="label label-success">Đã duyệt</span>';
        }
    }
}
