<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Setting;
Route::get('backend/login',['as'=>'backend.auth.getLogin', 'uses'=>'AdminAuth\AuthController@getLogin']);
Route::post('backend/postlogin',['as'=>'backend.auth.postLogin', 'uses'=>'AdminAuth\AuthController@postLogin']);
Route::group(['middleware' =>'authen', 'prefix' => 'backend'], function(){
	Route::get('/',['as'=>'backend.index', 'uses'=>'Admin\IndexController@getIndex']);
	Route::get('register',['as'=>'getRegister', 'uses'=>'AdminAuth\AuthController@getRegister']);
	Route::post('postregister',['as'=>'postRegister', 'uses'=>'AdminAuth\AuthController@postRegister']);
	Route::get('logout', ['as' => 'backend.auth.logout', 'uses' => 'AdminAuth\AuthController@logout']);
	Route::get('setting',['as'=>'backend.setting.index','uses'=>'Admin\SettingController@index']);
	Route::post('setting/update',['as'=>'backend.setting.update','uses'=>'Admin\SettingController@update']);
	Route::group(['prefix' => 'users'], function(){
		Route::get('info',['as'=>'backend.users.getAdmin','uses'=>'Admin\UsersController@getAdmin']);
        /* phan quyen */
        Route::get('listuse',['as'=>'backend.users.listuse','uses'=>'Admin\UsersController@listuse']);
        Route::get('adduse',['as'=>'backend.users.adduse','uses'=>'Admin\UsersController@adduse']);
        Route::post('posuse',['as'=>'backend.users.posuse','uses'=>'Admin\UsersController@posuse']);
        Route::get('edituse',['as'=>'backend.users.edituse','uses'=>'Admin\UsersController@edituse']);
     	Route::post('postedituse',['as'=>'backend.users.postedituse','uses'=>'Admin\UsersController@postedituse']);
        Route::get('{id}/deleteuse',['as'=>'backend.users.deleteuse','uses'=>'Admin\UsersController@deleteuse']);
        Route::get('khong-co-quyen',['as'=>'backend.users.khongquyen','uses'=>'Admin\UsersController@khongquyen']);
        /* end phan quyen */
		Route::post('updateinfo',['as'=>'backend.users.updateinfo','uses'=>'Admin\UsersController@updateinfo']);
	});
    
	Route::group(['prefix' => 'product'], function(){
		Route::get('/',['as'=>'backend.product.index','uses'=>'Admin\ProductController@getList']);
		Route::get('add',['as'=>'backend.product.getAdd','uses'=>'Admin\ProductController@getAdd']);
		Route::post('postAdd',['as'=>'backend.product.postAdd','uses'=>'Admin\ProductController@postAdd']);
		Route::get('delimg/{id}',['as'=>'backend.product.getDelImg','uses'=>'Admin\ProductController@getDelImg']);
        Route::get('search',['as'=>'backend.product.search','uses'=>'Admin\ProductController@search']);
		Route::get('edit',['as'=>'backend.product.getEdit','uses'=>'Admin\ProductController@getEdit']);
		Route::post('edit',['as'=>'backend.product.update','uses'=>'Admin\ProductController@update']);
        Route::post('changepos',['as'=>'backend.product.changepos','uses'=>'Admin\ProductController@changepos']);
		Route::get('{id}/delete',['as'=>'backend.product.getDelete','uses'=>'Admin\ProductController@getDelete']);		
    	Route::get('{id}/deleteList',['as'=>'backend.product.getDeleteList','uses'=>'Admin\ProductController@getDeleteList']);
		Route::get('{id}/addAlbum',['as'=>'backend.product.addAlbum','uses'=>'Admin\ProductController@addAlbum']);
		Route::get('dropzoneStore',['as'=>'backend.product.dropzoneStore','uses'=>'Admin\ProductController@dropzoneStore']);
		Route::get('upload',['as'=>'backend.product.upload','uses'=>'Admin\ProductController@post_upload']);
        Route::get('modal',['as'=>'backend.product.modal','uses'=>'Admin\ProductController@modal']);
	});
      Route::group(['prefix'=>'contact'], function(){
		Route::get('/',['as'=>'backend.contact.list', 'uses'=>'Admin\ContactController@getList']);
		Route::get('show/{id}',['as'=>'backend.contact.show', 'uses'=>'Admin\ContactController@show']);
        Route::post('show/{id}',['as'=>'backend.contact.update','uses'=>'Admin\ContactController@update']);
		Route::get('{id}/delete',['as'=>'backend.contact.getDelete','uses'=>'Admin\ContactController@getDelete']);		
    	Route::get('{id}/deleteList',['as'=>'backend.contact.getDeleteList','uses'=>'Admin\ContactController@getDeleteList']);
	});
    
	Route::group(['prefix' => 'lienket'], function(){
		Route::get('/',['as'=>'backend.lienket.index','uses'=>'Admin\LienKetController@getList']);
		Route::get('add',['as'=>'backend.lienket.getAdd','uses'=>'Admin\LienKetController@getAdd']);
		Route::post('postAdd',['as'=>'backend.lienket.postAdd','uses'=>'Admin\LienKetController@postAdd']);
		Route::get('edit',['as'=>'backend.lienket.getEdit','uses'=>'Admin\LienKetController@getEdit']);
		Route::post('edit',['as'=>'backend.lienket.update','uses'=>'Admin\LienKetController@update']);
		Route::get('{id}/delete',['as'=>'backend.lienket.getDelete','uses'=>'Admin\LienKetController@getDelete']);
		Route::get('{id}/deleteList',['as'=>'backend.lienket.getDeleteList','uses'=>'Admin\LienKetController@getDeleteList']);
	});
	Route::group(['prefix' => 'slider'], function(){
		Route::get('/',['as'=>'backend.slider.index','uses'=>'Admin\SliderController@getList']);
		Route::get('add',['as'=>'backend.slider.getAdd','uses'=>'Admin\SliderController@getAdd']);
		Route::post('postAdd',['as'=>'backend.slider.postAdd','uses'=>'Admin\SliderController@postAdd']);
		Route::get('edit',['as'=>'backend.slider.getEdit','uses'=>'Admin\SliderController@getEdit']);
		Route::post('edit',['as'=>'backend.slider.update','uses'=>'Admin\SliderController@update']);
		Route::get('{id}/delete',['as'=>'backend.slider.getDelete','uses'=>'Admin\SliderController@getDelete']);
		Route::get('{id}/deleteList',['as'=>'backend.slider.getDeleteList','uses'=>'Admin\SliderController@getDeleteList']);
	});

	Route::group(['prefix' => 'news'], function(){
		Route::get('/',['as'=>'backend.news.index','uses'=>'Admin\NewsController@getDanhSach']);
		Route::get('add',['as'=>'backend.news.getAdd','uses'=>'Admin\NewsController@getAdd']);
		Route::post('postAdd',['as'=>'backend.news.postAdd','uses'=>'Admin\NewsController@postAdd']);
		Route::get('edit',['as'=>'backend.news.getEdit','uses'=>'Admin\NewsController@getEdit']);
		Route::post('edit',['as'=>'backend.news.update','uses'=>'Admin\NewsController@update']);
		Route::get('{id}/delete',['as'=>'backend.news.getDelete','uses'=>'Admin\NewsController@getDelete']);
		Route::get('{id}/delete_list',['as'=>'backend.news.getDeleteList','uses'=>'Admin\NewsController@getDeleteList']);
		Route::get('modal',['as'=>'backend.news.modal','uses'=>'Admin\NewsController@modal']);
	});
	
	Route::post('uploadImg', ['as'=>'backend.uploadImg' ,'uses'=>'Admin/UploadController@uploadImg']);
	Route::post('dropzone/store', ['as'=>'dropzone.store','uses'=>'Admin/ProductController@dropzoneStore']);
});

// Frontend

Route::get('/', ['as'=>'index', 'uses'=>'IndexController@index']);
Route::get('/tin-tuc',['as'=>'getNews', 'uses'=>'IndexController@getNews']);
Route::get('/tin-tuc/{alias}',['as'=>'getNewsDetail', 'uses'=>'IndexController@getNewsDetail']);
Route::get('/gioi-thieu', ['as'=>'getAbout', 'uses'=>'IndexController@getAbout']);
Route::get('/san-pham',['as'=>'getProducts', 'uses'=>'IndexController@getProducts']);
Route::get('/san-pham/{alias}',['as'=>'getProductDetail', 'uses'=>'IndexController@getProductDetail']);
Route::get('/dich-vu',['as'=>'getServices', 'uses'=>'IndexController@getServices']);
Route::get('/dich-vu/{alias}',['as'=>'getServiceDetail', 'uses'=>'IndexController@getServiceDetail']);
Route::get('/lien-he',['as'=>'getContact', 'uses'=>'IndexController@getContact']);
Route::post('/lien-he',['as'=>'postContact', 'uses'=>'IndexController@postContact']);


// View composer

View::composer(['*'], function($view) {
	
	$setting = Setting::select()->where('id',1)->first();
	$view->with('setting', $setting);
});




