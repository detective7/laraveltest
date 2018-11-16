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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user/{id?}', function ($id=null) {
// 	if(!is_null($id)){
// 		return redirect()->route('profile');
// 	}else{
// 		return "Cant't get user information.";
// 	}
// });

Route::get('/student/profile',function(){
	return 'Find out user information.';
})->name('profile');

//Route::get('/new','NewController@index');
Route::resource('news','NewController');
Route::get('/hello','NewController@hello');
Route::get('/new/{id}','NewController@show_id');
Route::get('/title','NewController@title');

//只處理單個行為的話，就可以使用__invoke的方法,必須使用__invoke，否則出現Invalid route action
Route::get('user/{id}','ShowProfile');
Route::get('profile', 'UserController@show')->middleware('auth');


Route::get('/insert',function(){
	DB::insert('insert into news(title,description) values(?,?)',['最新消息','這是一則新消息']);
});

// use App\News;
// Route::get('/read',function(){
// 	// $result = DB::select('select * from news where id = ?',[1]);
// 	// foreach ($result as $new) {
// 	// 	return $new->title."-".$new->description;
// 	// }
// 	$posts = News::all();

// 	foreach ($posts as $post) {
// 		return $post->title;
// 	}
// });
// Route::get('/find',function(){
//     $post = News::find(1);
//     return $post;
// });
// Route::get('/findwhere',function(){
// 	//take == limit
// 	//$post = News::where('id',1)->orderBy('title','desc')->take(1)->get();
// 	$post = News::where('id','>',3)->orderBy('title','desc')->get();
// 	return $post;
// });
// Route::get('/insertM',function(){
// 	$post = new News();
// 	$post->title='goodjob';
// 	$post->description='description';
// 	$post->save();
// });
// Route::get('/create',function(){
// 	News::create(['title'=>'create record title','description'=>'create record description']);
// });

// Route::get('/update',function(){
//     $updated = DB::update('update news set title = "更新最新消息" where id = ?',[1]);
//     return $updated;
// });