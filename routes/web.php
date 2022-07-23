<?php

use App\Http\Controllers\AffiliateController as ControllersAffiliateController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\Backend\AppsSectionController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\UserStreRequest;
use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\HeaderController;

use App\Http\Controllers\Backend\PostBlogController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Fontend\AffiliateController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RaffleCotroller;


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
Auth::routes(['register' => false]);
Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
    });
/* Route::get('/', function () {
    return view('frontend.homepage');
});
 */

// route for processing payment
Route::post('/paypal', [PaymentController::class,'payWithPaypal'])->name('paypal');
//ROUTE FOR CHECK STATUS OF THE PAYMENT
Route::get('/status', [PaymentController::class, 'getPaymentStatus'])->name('status');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/details/{id}', [ProductController::class, 'productDetails'])->name('product-details');


Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('admin');
//Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');
Route::resource('users', UserController::class);
Route::post('users/{user}/change-password',[ChangePasswordController::class, 'change_password'])->name('users.change.password');

Route::resource('categories', CategoryController::class);
//AJAX Route
Route::post('/updateSocialLink', [FooterController::class, 'updateSocialLink']);
Route::post('/copyrightUpdate', [FooterController::class, 'copyrightUpdate']);
Route::post('/insertUsefulLink', [FooterController::class, 'insertUsefulLink']);
Route::post('/updateServiceList', [FooterController::class, 'updateServiceList']);
Route::get('/updatePassword', [ProfileController::class, 'updatePassword']);
Route::post('/profile/updateImage', [ProfileController::class, 'updateImage']);
// BACKEND

Route::get('apps', [AppsController::class, 'index'])->name('apps');
//Route::resource('contact', ContactController::class);
//Header Section
Route::resource('/dashboard/header', HeaderController::class);
Route::resource('/dashboard/footer', FooterController::class);
Route::post('dashboard/footer/about/{id}', [FooterController::class, 'about'])->name('about');
// POST BLOG ROUTE
Route::resource('postblog', PostBlogController::class);
Route::get('/postblog/delete/{id}', [PostBlogController::class, 'destroy'])->name('postblog.destroy');
Route::get('/postblog/delete/{id}', [PostBlogController::class, 'destroy'])->name('postblog.single-blog');

Route::resource('dashboard/profile', ProfileController::class);
Route::get('/post-details/{id}', [AffiliateController::class, 'postdetails']);
Route::get('/products/details/{id}', [ProductController::class, 'productDetails'])->name('product-details');


Route::resource('dashboard/product', ProductAdminController::class);
Route::get('/product/delete/{id}', [ProductAdminController::class, 'destroy'])->name('product.destroy');

//Route::get('/dashboard/new-post', [PostBlogController::class, 'newpost'])->name('new-post');

Route::get('/signin/customer', [CustomerController::class, 'signin'])->name('signin');
Route::post('/signin/customer', [CustomerController::class, 'process_login'])->name('signin');
Route::get('/register/customer', [CustomerController::class, 'index'])->name('registerCustomer');
Route::post('/register/customer', [CustomerController::class, 'register'])->name('register');
Route::get('/customer/dashboard', [CustomerController::class, 'customDashboard'])->name('customer-dashboard')->middleware('auth');
Route::get('signout', [CustomerController::class, 'signout'])->name('signout');
Route::post('/add_to_cart', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::get('/cartList', [ProductController::class, 'cartList'])->name('cart');
Route::get('/removeCart/{id}', [ProductController::class, 'removeCart'])->name('removeCart');
Route::get('/ordernow', [ProductController::class, 'orderNow'])->name('ordernow');
Route::post('/orderplace', [ProductController::class, 'orderPlace'])->name('orderplace');


Route::get('/customer-order', [ProductController::class, 'customerOrder'])->name('customer-order');
Route::get('/dashboard/onlineOrder', [ProductAdminController::class, 'onlineOrder'])->name('onlineOrder');
Route::get('/dashboard/delivery/{id}', [ProductAdminController::class, 'delivery'])->name('delivery');


// Green Leaf Spain
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/service', [App\Http\Controllers\FrontendController::class, 'service'])->name('service');
Route::get('/ourteam', [App\Http\Controllers\FrontendController::class, 'ourteam'])->name('ourteam');
Route::get('/portfolio', [App\Http\Controllers\FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');

//Blog
Route::get('blog', [AffiliateController::class, 'index'])->name('blog');
Route::get('blog/show/{id}', [AffiliateController::class, 'show'])->name('blog.show');