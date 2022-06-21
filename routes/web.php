<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GambarsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RegistrationController;
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
    return view ('landing');
});
Route::get('/admin-even', function () {
    return view ('contact.admineven');
});
Route::get('/galery',function(){
    return view('galery');
});
Route::get('/artikel',function(){
    return view('artikel');
});

Route::get('/login', [LoginController:: class, 'index1'])->middleware('guest');
Route::post('/login', [LoginController:: class, 'authenticate']);
Route::post('/logout', [LoginController:: class, 'logout']);


Route::get('/register',[RegistrationController::class, 'index2'])->middleware('guest');
Route::post('/register',[RegistrationController::class, 'store']);


Route::get('/home',[AllController::class, 'index3']);

Route::post('/home',[AllController::class, 'feedback']);

Route::resource('feedback', FeedbackController::class);

Route::get('/contact',[AllController::class, 'index4']);


Route::get('/menu',[AllController::class, 'index5']);


Route::get('/tentang',[AllController::class, 'index6']);

Route::get('/contact/',[AdminController::class, 'index'])->name('contact.admin');

Route::resource('/contact', AdminController::class);

Route::get("/create-gambar",[GambarsController::class, 'addgambar'])->name('contact.creategambar');


Route::post("/create-gambar",[GambarsController::class, 'prosesaddgambar'])->name('contact.insertgambar');
Route::get("/error-create-gambar",[GambarsController::class, 'validasi'])->name('contact.errorinsertgambar');

Route::get("/edit-gambar/{id}", [GambarsController::class, 'editgambar'])->name('contact.editgambar');

Route::post("/edit-gambar/{id}", [GambarsController::class, 'proseseditgambar'])->name('contact.ubahgambar');

//route drink
Route::get("/create-drink",[DrinkController::class, 'adddrink'])->name('contact.createdrink');

Route::post("/create-drink",[DrinkController::class, 'prosesadddrink'])->name('contact.insertdrink');

Route::get("/edit-drink/{id}", [DrinkController::class, 'editdrink'])->name('contact.editdrink');

Route::post("/edit-drink/{id}", [DrinkController::class, 'proseseditdrink'])->name('contact.ubahdrink');
Route::get("/delete-drink/{id}", [DrinkController::class, 'deletedrink'])->name('contact.deletedrink');
//end

//Route cake
Route::get("/create-cake",[CakeController::class, 'addcake'])->name('contact.createcake');

Route::post("/create-cake",[CakeController::class, 'prosesaddcake'])->name('contact.insertcake');

Route::get("/edit-cake/{id}", [CakeController::class, 'editcake'])->name('contact.editcake');

Route::post("/edit-cake/{id}", [CakeController::class, 'proseseditcake'])->name('contact.ubahcake');
Route::get("/delete-cake/{id}", [CakeController::class, 'deletecake'])->name('contact.deletecake');
//end
//route food
Route::get("/create-food",[FoodController::class, 'addfood'])->name('contact.createfood');

Route::post("/create-food",[FoodController::class, 'prosesaddfood'])->name('contact.insertfood');

Route::get("/edit-food/{id}", [FoodController::class, 'editfood'])->name('contact.editfood');

Route::post("/edit-food/{id}", [FoodController::class, 'proseseditfood'])->name('contact.ubahfood');
Route::get("/delete-food/{id}", [FoodController::class, 'deletefood'])->name('contact.deletefood');
//end
//route even
Route::get("/create-even",[EventsController::class, 'addeven'])->name('contact.createeven');

Route::post("/create-even",[EventsController::class, 'prosesaddeven'])->name('contact.inserteven');

Route::get("/edit-even/{id}", [EventsController::class, 'editeven'])->name('contact.editeven');

Route::post("/edit-even/{id}", [EventsController::class, 'prosesediteven'])->name('contact.ubaheven');
Route::get("/delete-even/{id}", [EventsController::class, 'deleteeven'])->name('contact.deleteeven');
//end

Route::get("/create-galery",[GaleryController::class, 'addgaleri'])->name('contact.creategalery');

Route::post("/create-galery",[GaleryController::class, 'prosesaddgaleri'])->name('contact.insertgalery');

Route::get("/edit-galeri/{id}", [GaleryController::class, 'editgaleri'])->name('contact.editgaleri');

Route::post("/edit-galeri/{id}", [GaleryController::class, 'proseseditgaleri'])->name('contact.ubahgaleri');

Route::get("/delete-galeri/{id}", [GaleryController::class, 'deletegalery'])->name('contact.deletegalery');
Route::get("/delete-gambar/{id}", [GambarsController::class, 'deletegambar'])->name('contact.deletegambar');
Route::get("/delete-feedback/{id}", [FeedbackController::class, 'deletefeedback'])->name('contact.deletefeedback');
Route::resource('home',HomeController::class);
Route::resource('galery',GaleriController::class);
Route::resource('/galery',GaleriController::class);
Route::resource('menu',MenuController::class);
Route::get('/get',[MenuController::class, 'getlatest']);

Route::get("/footer/{id}", [HomeController::class, 'feedback'])->name('layout.foother');
Route::resource('/artikel',ArtikelController::class);
Route::resource('/admin-even',BladeController::class);



