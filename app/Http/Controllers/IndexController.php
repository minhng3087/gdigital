<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Products;
use App\Users;
use App\Slider;
use DB,Cache,Mail,Session,Cart,Hash;
use Auth,File;
use Illuminate\Contracts\Auth\Guard;
use App\Setting;
use App\LienKet;
use App\News;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Customer;
use App\History;
class IndexController extends Controller {
    public function index() {
        $slider = Slider::all()->where('status', 1);
        $products = Products::where([
            'status' => 1,
            'noibat' => 1,
            'com' => 'san-pham'
        ])->get();
        $lienket = LienKet::select()->where('status',1)->get();
        $services = Products::where([
            'status' => 1,
            'noibat' => 1,
            'cate_id' => 1
        ])->orderBy('stt', 'asc')->get();
        $about = News::where([
            'status' => 1,
            'types' => 0
        ])->first();
        $news = News::select()->where([
            'status' => 1,
            'cate_id' => 0
        ])->orderBy('stt', 'asc')->get();
        return view('home',compact('slider', 'products', 'services','lienket', 'about','news'));
    }

    public function getAbout() {
        $gioithieu = News::select()->where([
            'status' => 1,
            'cate_id' => 1,
            'types' => 0
        ])->first();
        $tamnhin = News::select()->where([
            'status' => 1,
            'cate_id' => 1,
            'types' => 1
        ])->first();
        $sumenh = News::select()->where([
            'status' => 1,
            'cate_id' => 1,
            'types' => 2
        ])->first();
        $giatri = News::select()->where([
            'status' => 1,
            'cate_id' => 1,
            'types' => 3
        ])->first();
        return view('gioi-thieu', compact('gioithieu','tamnhin','sumenh','giatri'));
    }

    public function getProducts() {
        $products = Products::select()->where([
            'status' => 1,
            'cate_id' => 0
        ])->orderBy('stt', 'asc')->paginate(1);
        return view('san-pham', compact('products'));
    }

    public function getProductDetail($alias) {
        @$product = Products::select()->where('status',1)->where('alias',$alias)->first()->toArray();
        // dd($product);
        $products_relation = Products::select()->where([
            'status' => 1,
            'cate_id' => $product['cate_id'],
        ])->where('alias', '!=', $alias)->orderBy('stt', 'asc')->get();
        return view('san-pham-chi-tiet', compact('product', 'products_relation'));
    }

    public function getServices() {
        $services = Products::select()->where([
            'status' => 1,
            'cate_id' => 1
        ])->orderBy('stt', 'asc')->paginate(1);
        return view('dich-vu',compact('services'));
    }

    public function getServiceDetail($alias) {
        @$service = Products::select()->where('status',1)->where('alias',$alias)->first()->toArray();
        // dd($service);
        $services_relation = Products::select()->where([
            'status' => 1,
            'cate_id' => $service['cate_id'],
        ])->where('alias', '!=', $alias)->orderBy('stt', 'asc')->get();
        return view('dich-vu-chi-tiet', compact('service', 'services_relation'));
    }

    public function getContact() {
        return view('lien-he');
    }
    public function getNewsDetail($alias) {
        @$news = News::select()->where('status',1)->where('alias',$alias)->first()->toArray();
        // dd($service);
        $news_relation = News::select()->where([
            'status' => 1,
            'cate_id' => $news['cate_id'],
        ])->where('alias', '!=', $alias)->orderBy('stt', 'asc')->get();
        return view('tin-tuc-chi-tiet', compact('news', 'news_relation'));
    }

    public function postContact(ContactRequest $request)
	{
        // dd($request);
        $contact = new Contact();
        $contact->name   = $request->name;
        $contact->email   = $request->email;
        $contact->phone   = $request->phone;
        $contact->content   = $request->content;
        $contact->type   = 1;     
        $contact->save();
		echo "<script type='text/javascript'>
			alert('Cảm ơn quý khách đã gửi thông tin, chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất !');
			window.location = '".url('/')."' </script>";
    }
    
    public function getCustomer(Request $request) {
        $customer = Customer::findOrFail($request->mskh);
        $data = History::where('customer_id',$request->mskh)->get();
            return view('templates.popups.modal',[
                'data' => $data,
                'customer' => $customer
            ]);
    }
	
}
