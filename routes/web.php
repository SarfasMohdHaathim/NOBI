<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\GuestController;

 
// Route::get('/', [GuestController::class, 'index'])->name('guest.index'); 
// Route::get('/contact', [GuestController::class, 'contact_page'])->name('guest.contact');
// Route::get('/about', [GuestController::class, 'about_page'])->name('guest.about');
// Route::get('/product', [GuestController::class, 'product_page'])->name('guest.product');
// Route::get('/projects', [GuestController::class, 'treatment_page'])->name('guest.treatment');
// Route::get('/services', [GuestController::class, 'services_page'])->name('guest.services');
// Route::post('/contact', [GuestController::class, 'storecontact'])->name('store.contact');
// Route::get('/projects/{name}', [GuestController::class, 'treatment_detail'])->name('guest.treatmentdetails');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/admin/login/', [AuthController::class, 'login'])->name('login');
    Route::post('/admin/login/', [AuthController::class, 'loginPost'])->name('login');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/', [HomeController::class, 'index'])->name('admin.home');
    Route::get('admin/home/', [HomeController::class, 'index'])->name('home');
    Route::get('/admin/product/', [HomeController::class, 'product'])->name('adminproduct');
    Route::get('/admin/add-product/', [HomeController::class, 'addproduct'])->name('adminaddproduct');
    Route::post('/admin/add-product/', [HomeController::class, 'createproduct'])->name('products.create');
    Route::delete('/admin//product/{id}',[HomeController::class, 'productdestroy'])->name('products.destroy');
    Route::delete('/admin//contact/{id}',[GuestController::class, 'contactdelete'])->name('contact.destroy');
    Route::delete('/admin/logout', [AuthController::class, 'logout'])->name('logout');
});