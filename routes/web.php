<?php



//User Routes


Route::group(['namespace'=>'User'],function(){


//Route::get('/','HomeController@index');

Route::get('/','HomeController@index');

Route::get('post/{post}','PostController@post')->name('post');

Route::get('post/tag{tag}','HomeController@tag')->name('tag');

Route::get('post/category{category}','HomeController@category')->name('category');

//For Downloads
//Route::get('/viewAllDownloadfile','DownloadController@downfunction');

Route::get( '/down', 'DownloadController@downfunction');

 Route::get( '/download/{filename}', 'DownloadController@download');


});

Route::get('show', function()
    {
        return View::make('user.download.show');
    });


//Admin Routes

Route::group(['namespace'=>'Admin'],function(){


Route::get('admin/home','HomeController@index')->name('admin.home');

// Users Routes
Route::resource('admin/user','UserController');
// Role Routes
Route::resource('admin/role','RoleController');
// Permission Routes
Route::resource('admin/permission','PermissionController');
// Post Routes
Route::resource('admin/post','postController');
// Documents Routes
Route::resource('admin/file','FileController');
//Tag Routes 
Route::resource('admin/tag','TagController');
//Category Routes 
Route::resource('admin/category','CategoryController'); 

//Admin Auth Routes
Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login','Auth\LoginController@login');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
