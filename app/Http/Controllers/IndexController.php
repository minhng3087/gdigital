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
use App\Models\PostCategory;
use App\Models\Customers;
use App\Models\Comments;

use Carbon\Carbon;

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
        $categories = Categories::where('parent_id', 0)->where('type', 'product_category')->get();
        $date = Carbon::now();
        view()->share(compact('menuMainMobile', 'menuMain', 'menuCategory', 'site_info', 'date', 'categories'));
    }

    public function getHome()
    {
        $dataContent = Pages::where('type', 'home')->first();

        $products_new = Products::active()->where('is_price_shock', 1)->order()->take(150)->get();

        $products_hot = Products::active()->where('is_hot', 1)->order()->take(24)->get();

        $posts_hot = Posts::active()->published()->where('type', 'blog')->order()->where('hot', 1)->take(3)->get();

        return view('frontend.pages.home', compact('dataContent', 'products_price_shock', 'posts_hot', 'products_sale_hot', 'products_hot'));
    }

    public function getSingleNews($slug) {
        $data = Posts::active()->published()->where('type', 'blog')->where('slug', $slug)->firstOrFail();
        $data->increment('view_count');
        $id_category = PostCategory::where('id_post', $data->id)->firstOrFail();
        $list_id_product    = PostCategory::whereIn('id_category', $id_category)->where('id_post', '!=', $data->id)->get()->pluck('id_post')->toArray();
        $post_related       = Posts::active()->published()->whereIn('id', $list_id_product)->take(6)->get();
        $posts_hot = Posts::active()->published()->where('type', 'blog')->order()->where('hot', 1)->take(3)->get();
        
        return view('frontend.pages.blog-detail', compact('data', 'post_related','posts_hot'));
    }

    public function getArchiveNews() {
        $data = Posts::active()->published()->where('type', 'blog')->where('status', 1)->paginate(1);
        return view('frontend.pages.blog', compact('data'));
    }

    public function getSingleProduct($slug)
    {
        
    }

    public function getArchiveProduct($slug)
    {

    }

    public function postComment(Request $request, $idProduct)
    {
        $customers        = new Customers;
        $customers->name  = $request->name;
        $customers->email = $request->email;
        $customers->phone = $request->phone;
        $customers->save();
        $comment               = new Comments;
        if($request->cate == 'blog') //posts
        $comment->id_post   = $idProduct;
        else $comment->id_product = $idProduct;
        $comment->id_customers = $customers->id;
        $comment->content      = $request->content;
        $comment->cate = $request->cate;
        $comment->status       = 0;
        $comment->save();
        toastr()->success('Gửi thông tin thành công.');
        return back();
    }

    public function getAjaxProduct(Request $request) {
        $product = Products::where('id', $request->id)->where('status',1)->first();
        return view('frontend.components.modal-product', compact('product'));
    }

    public function getSearch(Request $request)
    {
        if ($request->ajax()) {
            $data = Products::active()->where(function ($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->q . '%');
            })->order()->take(5)->get();
            return view('frontend.components.loop-search', compact('data'));
        } else {
            $id_category = Categories::where('type', 'product_category')->where('slug', $request->m)->first();
            if($id_category != null) $list_id_product = ProductCategory::whereIn('id_category', $id_category)->get()->pluck('id_product')->toArray();
            else $list_id_product = [];
            $data = Products::active()->where(function ($query) use ($request, $list_id_product) {
                if(count($list_id_product) != 0)
                    return $query->where('name', 'like', '%' . $request->q . '%')->whereIn('id', $list_id_product);
                else return $query->where('name', 'like', '%' . $request->q . '%');
            })->order()->paginate(24);
            return view('frontend.pages.search', compact('data'));
        }
    }




}
