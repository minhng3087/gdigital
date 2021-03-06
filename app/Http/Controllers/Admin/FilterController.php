<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Filter;

class FilterController extends Controller
{

    public function getListCategory()
    {
        $data = Categories::where('type', 'product_category')->orWhere('type', 'brand_category')->where('parent_id', 0)->orWhere('parent_id', null)->get();
        return view('backend.filter.list-category', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Filter::where('category_id', $request->category)->orderBy('position')->get();
        return view('backend.filter.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Filter::create($input);
        toastr()->success('Thêm mới thành công.');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Filter::findOrFail($id);
        return view('backend.filter.edit', compact('data'));
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
        $this->validate($request, [
            'content' => 'required',
        ],[
            'content.required' => 'Bạn chưa nhập giá trị cho bộ lọc',
        ]);
        $input = $request->all();
        $input['content'] = !empty($request->content) ? json_encode($request->content): null;
        Filter::findorFail($id)->update($input);
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
       Filter::destroy($id);
       toastr()->success('Xóa thành công.');
       return back();
    }


    public function getSort(Request $request)
    {
        $data = Filter::where('category_id', $request->category)->orderBy('position')->get();
        return view('backend.filter.sort', compact('data'));
    }

    public function postSort(Request $request)
    {
        $jsonMenu = json_encode($request->jsonMenu);
        $this->savePositionFilter($jsonMenu);
        if (!$request->ajax()) {
            toastr()->success('Cập nhật thành công. ');
            return back();
        }
    }
    
    public function savePositionFilter($jsonMenu, $parent_id = null)
    {
        $count = 0;
        foreach($jsonMenu as $item) {
            $filter = Filter::find($item->id);
            if($filter) {
                $filter->position = $count;
                $filter->save();
            }
            $count++;
        }
    }

}
