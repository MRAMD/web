<?php
use Illuminate\Support\Facades\Auth;
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
// main route
Route::get('/','HomeController@index1')-> name('index');

// route auth
auth::routes();
Route::get('home', 'HomeController@index')->name('home');



//route menu dashbord
Route::get('panel/setting', 'HomeController@setting')->name('setting');
Route::get('panel/article', 'HomeController@article')->name('article');
Route::get('panel/users', 'HomeController@users')->name('users');
Route::get('panel/comment', 'HomeController@comment')->name('comment');


//DElete and updata user
Route::get('panel/users/{id}', 'HomeController@delete')->name('delete',['id']);
Route::get('panel/updateusers/{id}', 'HomeController@showupdata')->name('showupdata',['id']);
Route::post('panel/users', 'HomeController@updata')->name('updata',['id']);

//DElete and updata article
Route::get('panel/article/{id}', 'HomeController@deletearticle')->name('deletearticle',['id']);
Route::get('panel/updatearticle/{id}', 'HomeController@ArticleShowUpdata')->name('ArticleShowUpdata',['id']);
Route::post('panel/users', 'HomeController@updataarticle')->name('updataarticle',['id']);

//add article
Route::get('panel/addarticle', 'HomeController@addarticle')->name('addarticle');
Route::post('panel/article', 'HomeController@savearticle')->name('savearticle');

//show single article 
Route::get('showarticle{id}', 'HomeController@showarticle')->name('show.article',['id']);


