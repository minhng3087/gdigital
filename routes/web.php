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
Route::get('backend/login', 'AdminAuth\AuthController@getLogin')->name('backend.auth.getLogin');
Route::post('backend/postlogin', 'AdminAuth\AuthController@postLogin')->name('backend.auth.postLogin');
Route::group(['middleware' =>'authen', 'prefix' => 'backend'], function(){
	Route::get('register','AdminAuth\AuthController@getRegister')->name('getRegister');
	Route::post('postregister','AdminAuth\AuthController@postRegister')->name('postRegister');
	Route::get('logout','AdminAuth\AuthController@logout')->name('backend.auth.logout');
});
Route::group(['namespace' => 'Admin'], function () {
	Route::group(['middleware' =>'authen', 'prefix' => 'backend'], function(){
		Route::get('/','IndexController@getIndex')->name('backend.index');
		Route::group(['prefix' => 'users'], function(){
			Route::get('info','UsersController@getAdmin')->name('backend.users.getAdmin');
			/* phan quyen */
			Route::get('listuse','UsersController@listuse')->name('backend.users.listuse');
			Route::get('adduse','UsersController@adduse')->name('backend.users.adduse');
			Route::post('posuse','UsersController@posuse')->name('backend.users.posuse');
			Route::get('edituse','UsersController@edituse')->name('backend.users.edituse');
			Route::post('postedituse','UsersController@postedituse')->name('backend.users.postedituse');
			Route::get('{id}/deleteuse','UsersController@deleteuse')->name('backend.users.deleteuse');
			Route::get('khong-co-quyen','UsersController@khongquyen')->name('backend.users.khongquyen');
			/* end phan quyen */
			Route::post('updateinfo','UsersController@updateinfo')->name('backend.users.updateinfo');
			// Post
		});

		$routes = config('admin.route');
		
        foreach ($routes as $key => $route) {
            Route::resource($route['name'], ucfirst($key).'Controller', [
				'except' => ['show'], 
			]);
            if($route['multi_del'] == true){
                Route::post( $key.'/postMultiDel', ['as' => $key.'.postMultiDel', 'uses' => ucfirst($key).'Controller@deleteMuti']);
            }
        }

		Route::resource('posts', 'PostController', ['except' => ['show']]);
		Route::post('posts/postMultiDel', ['as' => 'posts.postMultiDel', 'uses' => 'PostController@deleteMuti']);
		Route::get('posts/get-slug', 'PostController@getAjaxSlug')->name('posts.get-slug');
		Route::get('posts/anyData', 'PostController@anyData')->name('posts.anyData');
		Route::resource('categories-post', 'CategoriesPostController', ['except' => [
			'show','create'
		]]);

        Route::resource('category', 'CategoryController', ['except' => ['show']]);
        Route::get('/get-layout', 'IndexController@getLayOut')->name('get.layout');
		
	});
});

