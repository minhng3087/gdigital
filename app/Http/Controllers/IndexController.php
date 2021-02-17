<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ProductCategory;
use App\Trails\MailTrait;
use App\Models\Options;
use App\Models\Menu;
use App\Models\CategoryMenu;
use App\Models\Pages;
use App\Models\Products;
use App\Models\Posts;


class IndexController extends Controller
{

    use MailTrait;


    public function __construct()
    {
        $site_info = Options::where('type', 'general')->first();
        $site_info = json_decode($site_info->content);

        $menuMain = Menu::where('id_group', 1)->orderBy('position')->get();

        $menuMainMobile = Menu::where('id_group', 2)->orderBy('position')->get();

        $menuCategory = CategoryMenu::where('parent_id', null)->orderBy('position')->get();

        view()->share(compact('menuMainMobile', 'menuMain', 'menuCategory', 'site_info'));
    }

    public function getHome()
    {
        $dataContent = Pages::where('type', 'home')->first();

        $products_new = Products::active()->where('is_price_shock', 1)->order()->take(150)->get();

        $products_hot = Products::active()->where('is_hot', 1)->order()->take(24)->get();

        $posts_hot = Posts::active()->published()->published()->where('type', 'blog')->order()->where('hot', 1)->take(3)->get();

        return view('frontend.pages.home', compact('dataContent', 'products_price_shock', 'posts_hot', 'products_sale_hot', 'products_hot'));
    }

    public function getSingleNews($slug)
    {
        
    }

    public function getProductsByAjax(Request $request)
    {
        $id_category = $request->id_category;
        $type        = $request->type;
        if ($type == 'home-mobile') {

            $category           = Categories::where('id', $id_category)->firstOrFail();
            $data = Products::where('brand_id',$category->id)->where('status', 1)->where('is_hot', 1)->get();
            $class              = 'col-md-2';
            return view('frontend.pages.products.loop-products', compact('data', 'class'));

        }
    }
}
