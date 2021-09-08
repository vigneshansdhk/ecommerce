<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',HomeComponent::class);
Route::get('/shop',ShopComponent::class);
Route::get('/cart',CartComponent::class);
Route::get('/checkout',CheckoutComponent::class);
Route::get('/products/{slug}',DetailsComponent::class);
Route::get('/product-category/{category_slug}',CategoryComponent::class);
Route::get('/search',SearchComponent::class);


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user-dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin-dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin-categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin-categories-add',AdminAddCategoryComponent::class)->name('admin.categories.add');
    Route::get('/admin-categories-edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.categories.edit');
    Route::get('/admin-products',AdminProductComponent::class)->name('admin.product');
    Route::get('/admin-products-add',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin-products-edit/{product_slug}',AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('/admin-home-slider',AdminHomeSliderComponent::class)->name('admin.home.slider');
    Route::get('/admin-home-slider-add',AdminAddHomeSliderComponent::class)->name('admin.home.slider.add');
    Route::get('/admin-home-slider-edit/{slider_id}',AdminEditHomeSliderComponent::class)->name('admin.home.slider.edit');
    Route::get('/admin-home-category',AdminHomeCategoryComponent::class)->name('admin.home.category');
});