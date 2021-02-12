<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuGroup;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getListMenu()
    {
       $data = MenuGroup::all();
       return view('backend.menu.list-group', compact('data'));
    }

    public function getEditMenu($id)
    {
       
    }

    public function postAddItem(Request $request, $id)
    {
        
    }

    public function postUpdateMenu(Request $request)
    {
        
    }

    public function saveMenu($jsonMenu, $parent_id = null)
    {
       
    }

    public function getDelete($id)
    {
        
    }

    public function postEditItem(Request $request)
    {
        
    }

    public function getEditItem($id)
    {
        
    }
}
