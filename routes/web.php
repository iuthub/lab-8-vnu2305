<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () { return view('/blog/index');});
Route::get('/post/{id}',function ($id){
    return view('blog.post',['id'=>$id]);
});
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/', ['as' => 'index', function(){ return view('admin/index');}])->name('admin.index');
    Route::get('create', ['as' => 'create',function(){ return view('admin/create');}] )->name('admin.create');
    Route::get('edit', ['as' => 'edit', function(){ return view('admin/edit');}])->name('admin.edit');
});
Route::get('/about',function (){
    return view('/other/about');
})->name('about');


