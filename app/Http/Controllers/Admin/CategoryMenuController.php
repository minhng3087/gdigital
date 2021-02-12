<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryMenu;
use App\Models\Menu;

class CategoryMenuController extends Controller
{
    public function getList(Request $request)
    {
    	$parent_id = $request->parent_id;
        $type = $request->type;
        $data = CategoryMenu::where('parent_id', $parent_id)->whereType($type)->orderBy('position', 'asc')->get();
    	return view('backend.menu-category.create-edit', compact('data'));
    }


    public function postAddItem(Request $request)
    {
        
    }

    public function postUpdateMenu(Request $request)
    {
        
    }
    public function saveMenu($jsonMenu)
    {
        
    }


    public function getDelete($id)
    {
        
    }


    public function getEditItem($id)
    {
        
    }


    public function postEditItem(Request $request)
    {
    }

    public function getMoveMenu()
    {
    }


    public function postMoveMenu(Request $request)
    {

    }



}
