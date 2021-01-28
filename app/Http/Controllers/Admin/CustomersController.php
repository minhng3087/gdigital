<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use Input, File;
use Validator,Auth;
use App\History;
class CustomersController extends Controller
{
    public function getList()
    {  
        $trang = 'customers';
        $data = Customer::all();
        return view('backend.customers.list', compact('data','trang'));
    }
    public function getAdd()
    {
        $trang = 'customers';
        $data = Customer::all();
        // dd($data);
        return view('backend.customers.add', compact('data','trang'));
    }
    public function postAdd(Request $request)
    {
        // dd($request);
        $this->validate($request,
            ["txtName" => "required"],
            ["txtName.required" => "Bạn chưa nhập tên customers"]
        );
        $customer = new Customer;
        $customer->name = $request->txtName;
        $customer->email = $request->txtEmail;
        $customer->phone = $request->txtPhone;
        $customer->mskh = intval($request->mskh);
        if($request->status=='on'){
            $customer->status = 1;
        }else{
            $customer->status = 0;
        }
        $customer->save();
        return redirect('backend/customers')->with('status','Thêm mới thành công !');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getEdit(Request $request)
    {
        $trang = 'customers';
        $mskh= $request->get('mskh');
        //Tìm article thông qua mã id tương ứng
        $data = Customer::where('mskh',$mskh)->first();
        if(!empty($data)){
            if($request->get('hienthi')>0){
                if($data->status == 1){
                    $data->status = 0; 
                }else{
                    $data->status = 1; 
                }
                $data->update();
                return redirect('backend/customers')->with('status','Cập nhật thành công !');
            }
            // Gọi view edit.blade.php hiển thị bải viết
            return view('backend.customers.edit',compact('data','mskh','trang'));
        }else{
            return redirect('backend/customers')->with('status','Dữ liệu không có thực !');
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
        // dd($request);
        $this->validate($request,
            ["txtName" => "required"],
            ["txtName.required" => "Bạn chưa nhập tên danh mục"]
        );
        $mskh= $request->mskh;
        $customer = Customer::where('mskh',$mskh)->first();
        if(!empty($customer)){
            $customer->name = $request->txtName;
            $customer->email = $request->txtEmail;
            $customer->phone = $request->txtPhone;
            if($request->status=='on'){
                $customer->status = 1;
            }else{
                $customer->status = 0;
            }
            $customer->save();
            return redirect('backend/customers/edit?mskh='.$mskh)->with('status','Cập nhật thành công');
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
        $trang = 'customers';
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect('backend/customers')->with('status','Xóa thành công');
    }
    public function getDeleteList($id){
       $trang = 'customers';
        $listid = explode(",",$id);
        foreach($listid as $listid_item){
            $customer = Customer::findOrFail($listid_item);
            $customer->delete();
        }
        return redirect('backend/customers')->with('status','Xóa thành công');
    }

    public function show($mskh) {
        $trang = 'history';
        $customer = Customer::select('mskh','name')->where('mskh',$mskh)->first();
        $data = History::where('customer_id',$mskh)->get();
        return view('backend.history.list', compact('data','trang','customer'));
    }

    public function getAddHistory($mskh) {
        $trang = 'history';
        $customer = Customer::select('mskh','name')->where('mskh',$mskh)->first();
        $data = History::where('customer_id',$mskh)->get();
        return view('backend.history.add', compact('data','trang','customer'));
    }

    public function postAddHistory(Request $request, $mskh) {
        $this->validate($request,
            ["txtName" => "required"],
            ["txtName.required" => "Bạn chưa nhập tên customers"]
        );
        $history = new History;
        $history->name = $request->txtName;
        $history->position = $request->txtPosition;
        $history->amount = $request->txtAmount;
        $history->period = $request->txtPeriod;
        $history->day_action = $request->txtDate;
        $history->customer_id = $mskh;
        $history->save();
        return redirect('backend/customers/show/'.$mskh)->with('status','Thêm mới thành công !');
    }

    public function getEditHistory($mskh) {
        $trang = 'history';
        //Tìm article thông qua mã id tương ứng
        $customer = Customer::where('mskh',$mskh)->first();
        $history = History::where('customer_id', $mskh)->first();
        if(!empty($history)){
            // Gọi view edit.blade.php hiển thị bải viết
            return view('backend.history.edit',compact('customer','history','trang'));
        }else{
            return redirect('backend/customers')->with('status','Dữ liệu không có thực !');
        }
    }

    public function updateHistory($mskh,Request $request) {
        $id = $request->get('id');
        $this->validate($request,
            ["txtName" => "required"],
            ["txtName.required" => "Bạn chưa nhập tên danh mục"]
        );
        $history = History::findOrFail($id);
        if(!empty($history)){
            $history->name = $request->txtName;
            $history->position = $request->txtPosition;
            $history->amount = $request->txtAmount;
            $history->period = $request->txtPeriod;
            $history->day_action = $request->txtDate;
            $history->save();
            return redirect('backend/customers/show/'.$mskh)->with('status','Cập nhật thành công');
        }else{
            return redirect()->back()->with('status','Dữ liệu không có thực');
        }
    }
}
