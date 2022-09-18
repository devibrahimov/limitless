<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\Frontend\AboutBlockController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BrandController;
use App\Http\Controllers\Frontend\GoalController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CampaignController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CompareController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EmailController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\PartnerController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/about_us', [AboutBlockController::class, 'index'])->name('about_us');
Route::get('/goals', [GoalController::class, 'index'])->name('goals');
Route::get('/teams', [TeamController::class, 'index'])->name('teams');
Route::get('/teams/{id}', [TeamController::class, 'show'])->name('teams.show');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/partners', [PartnerController::class, 'index'])->name('partners');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/email',[EmailController::class,'sendmail'])->name('sendmail');
Route::resource('/course', CourseController::class);


Route::get('/register',[RegisterController::class,'index'])->name('signup');
Route::post('/register',[RegisterController::class,'register']) ;





Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::get('/{lang}/', [IndexController::class, 'index'])->name('home_lang');

    Route::controller(CategoryController::class)
        ->prefix('category')
        ->name('category.')
        ->group(function () {
            Route::get('/', 'all')->name('all');
            //            Route::get('/{id}', 'show')->name('show');
            //            Route::get('/{slug1}/{slug2}', 'brand')->name('brand');
        });

    Route::get('lang/{lang}', LanguageController::class)->name('lang.switch');
    Route::get('/search', SearchController::class)->name('search');

    Route::controller(ProductController::class)
        ->prefix('products')
        ->as('product.')
        ->group(function () {
            Route::get('/{id}', 'show')->name('show');
        });

    Route::controller(CartController::class)
        ->prefix('cart')
        ->as('cart.')
        ->group(function () {
            Route::get('/', 'index')->name('all');
            // Route::post('add-to-cart', 'addToCart')->name('addToCart');
            // Route::patch('update-cart', 'update')->name('updateCart');
            // Route::delete('remove-from-cart','remove')->name('removeFromCart');
        });

    Route::controller(CheckoutController::class)
        ->prefix('checkout')
        ->as('checkout.')
        ->group(function () {
            Route::get('/', 'all')->name('all');
            Route::post('/in-cart/', 'inCart')->name('inCart');
            Route::match(['post', 'get'], '/approved', 'approved')->name('approved');
            Route::match(['post', 'get'], '/canceled', 'canceled')->name('canceled');
            Route::match(['post', 'get'], '/declined', 'declined')->name('declined');
        });




    // Route::controller(CheckoutController::class)
    //     ->prefix('/checkout')
    //     ->as('checkout.')
    //     ->group(function(){
    //         Route::get('/', 'all')->middleware('RedirectIfCartEmpty')->name('all');
    //         Route::post('/in-cart/', 'inCart')->name('inCart');
    //         Route::get('/{product:slug}/{color_slug}', 'one')->name('one');
    //         Route::post('/one-click', 'oneClick')->name('oneClick');
    //     });

    Route::get('/compare', CompareController::class)->name('compare');

    Route::controller(CampaignController::class)
        ->prefix('campaigns')
        ->as('campaigns.')
        ->group(function () {
            Route::get('/', 'all')->name('all');
            Route::get('/{campaign}', 'show')->name('show');
        });


    // Route::controller(BlogController::class)
    //     ->prefix('blogs')
    //     ->as('blogs.')
    //     ->group(function () {
    //         Route::get('/', 'all')->name('all');
    //         Route::get('/{slug}', 'show')->name('show');
    //     });

    // Route::controller(BrandController::class)
    //     ->prefix('brands')
    //     ->as('brands.')
    //     ->group(function () {
    //         Route::get('/{brand:slug}', 'show')->name('show');
    //     });




    // Route::get('vacancies',fn()=>view('frontend.pages.vacancies.all'));


    // shark sushi ROUTES




    // Route::get('/checkout', function () {
    //     return view('frontend.pages.checkout');
    // })->name('checkout');
