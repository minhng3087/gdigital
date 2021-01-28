<?php 
namespace App\Http\Controllers\Admin;
//use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;
use App\Images;
use Input, File;
use Validator;
use Auth;
class IndexController extends Controller
{
    public function getIndex()
    {
        return view('backend.index');
    }
}
