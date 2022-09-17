<?php

use App\Http\Controllers\Backend\AboutBlockController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminLangController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CampaignController;
use App\Http\Controllers\Backend\CampaignDetailController;
use App\Http\Controllers\Backend\CampaignTypeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DeliveryMethodController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\GoalController;
use App\Http\Controllers\Backend\HomeCompareController;
use App\Http\Controllers\Backend\InstallmentCardController;
use App\Http\Controllers\Backend\InstallmentCardMonthController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\PaymentMethodController;
use App\Http\Controllers\Backend\ProductDayController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\UploadsController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\DotEnvController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\LanguageController;
use App\Http\Controllers\Backend\LanguageTranslationController;
use App\Http\Controllers\Backend\LogController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\OptionController;
use App\Http\Controllers\Backend\OptionGroupController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\OrderStatusController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\ChefController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductStatusController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubscriberController;
use App\Http\Controllers\Backend\VacancyController;
use App\Http\Controllers\Backend\RandProductController;
use App\Http\Controllers\Backend\HomeCatProductController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Backend\CourseController;
use Illuminate\Support\Facades\Route;

Route::fallback(function ()
{
    return view('backend.errors.404');
});


Route::middleware('guest:admin')->group(function ()
{
    Route::controller(AuthController::class)->group(function ()
    {
        Route::get('/login',  'loginForm')->name('login.form');
        Route::post('/login', 'login')->name('login');
    });

});

Route::group(['middleware' => ['auth:admin', 'minify']], function ()
{
    Route::get('/',          DashboardController::class)->name('dashboard');
    Route::patch('/lang',    AdminLangController::class)->name('lang');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::controller(ProfileController::class)->group( function()
    {
        Route::get('/profile',   'profileForm')->name('profile.form');
        Route::patch('/profile', 'profile')->name('profile');
    });
    // Projects Route
    Route::resource('projects',ProjectController::class);
    // Partners Route
    Route::resource('partners',PartnerController::class);
    // Events Route
    Route::resource('events',EventController::class);
    // News Route
    Route::resource('news',NewsController::class);
    // Teams Route
    Route::resource('teams',TeamController::class);
    // Goal Route
    Route::resource('goals',GoalController::class);
    // AboutBlock Route
    Route::resource('about-block',AboutBlockController::class);
    // Chef Route
    Route::resource('chefs',ChefController::class);

    Route::resource('/admins',           AdminController::class)->except('show');
    Route::resource('/users',        UserController::class);
    Route::resource('/roles',            RoleController::class);
    Route::delete('/products/{id}/deleteimg', [ProductController::class,'deleteimg'])->name('products.deleteimg');
    Route::patch('/products/{id}/coverimg', [ProductController::class,'coverimg'])->name('products.coverimg');
    Route::resource('/products',         ProductController::class);
    Route::resource('/product-statuses', ProductStatusController::class);
    Route::delete('/categories/{id}/deleteimg', [CategoryController::class,'deleteimg'])->name('categories.deleteimg');
    Route::post('/categories/getOptions', [CategoryController::class,'getOptions'])->name('categories.getOptions');
    Route::post('/categories/getSubCategories', [CategoryController::class,'getSubCategories'])->name('categories.getSubCategories');
    Route::resource('/categories',       CategoryController::class);
    Route::get('/orders/{order}/changeStatus',           [OrderController::class,'changeStatus'])->name('orders.changeStatus');
    Route::resource('/orders',           OrderController::class);
    Route::resource('/order-statuses',   OrderStatusController::class);
    // Route::patch('/blogs/{id}/coverimg', [BlogController::class,'coverimg'])->name('blogs.coverimg');
    // Route::delete('/blogs/{id}/deleteimg', [BlogController::class,'deleteimg'])->name('blogs.deleteimg');
    // Route::resource('/blogs',             BlogController::class);
    // Route::patch('/vlogs/{id}/coverimg', [BlogController::class,'coverimg'])->name('blogs.coverimg');
    // Route::delete('/vlogs/{id}/deleteimg', [VlogController::class,'deleteimg'])->name('vlogs.deleteimg');
    // Route::resource('/vlogs',             VlogController::class);
    Route::resource('/option-groups',    OptionGroupController::class);
    Route::get('/options/getOptionGroups',[OptionController::class,'getOptionGroups'])->name('options.getOptionGroups');
    Route::resource('/options',          OptionController::class);
    Route::delete('/sliders/{id}/deleteimg', [SliderController::class,'deleteimg'])->name('sliders.deleteimg');
    Route::resource('/sliders',          SliderController::class);
    Route::delete('/videos/{id}/deleteimg', [VideoController::class,'deleteimg'])->name('videos.deleteimg');
    Route::resource('/videos',          VideoController::class);
    Route::resource('/courses',          CourseController::class);
    Route::delete('/menus/{id}/deleteimg', [MenuController::class,'deleteimg'])->name('menus.deleteimg');
    Route::post('/menus/refresh',        [MenuController::class, 'refresh'])->name('menus.refresh');
    Route::resource('/menus',            MenuController::class);
    Route::resource('/languages',        LanguageController::class)->except('show');
    Route::resource('/faqs',              FaqController::class);
    Route::resource('/settings',         SettingController::class);
    Route::delete('/campaigns/{id}/deleteimg', [CampaignController::class,'deleteimg'])->name('campaigns.deleteimg');
    Route::patch('/campaigns/{id}/coverimg', [CampaignController::class,'coverimg'])->name('campaigns.coverimg');
    Route::resource('campaigns',CampaignController::class);
    Route::resource('campaign_types', CampaignTypeController::class);
    Route::get('/campaign_details/getProducts',[CampaignDetailController::class,'getProducts'])->name('campaign_details.getProducts');
    Route::resource('campaign_details', CampaignDetailController::class);
    Route::resource('districts',DistrictController::class);
    Route::resource('pages',PageController::class);
    Route::resource('vacancies',VacancyController::class);
    Route::get('/product-days/getProducts',[ProductDayController::class,'getProducts'])->name('product-days.getProducts');
    Route::resource('product-days', ProductDayController::class);
    Route::resource('subscribers',         SubscriberController::class);
    Route::delete('/payment-methods/{id}/deleteimg', [PaymentMethodController::class,'deleteimg'])->name('payment-methods.deleteimg');
    Route::resource('payment-methods',         PaymentMethodController::class);
    Route::resource('delivery-methods',         DeliveryMethodController::class);
    Route::delete('/installment-cards/{id}/deleteimg', [InstallmentCardController::class,'deleteimg'])->name('installment-cards.deleteimg');
    Route::resource('installment-cards',         InstallmentCardController::class);
    Route::resource('installment-card-months',         InstallmentCardMonthController::class);
    Route::get('/home-compares/getProducts',[HomeCompareController::class,'getProducts'])->name('home-compares.getProducts');
    Route::resource('home-compares',         HomeCompareController::class);
    Route::get('/rand-products/getProducts',[RandProductController::class,'getProducts'])->name('rand-products.getProducts');
    Route::resource('rand-products',         RandProductController::class);

    Route::group(['middleware' => 'isDeveloper'], function ()
    {
        Route::resource('permissions',PermissionController::class);
        Route::resource('logs',LogController::class)->only(['index', 'destroy']);
        Route::get('/system', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('logs.system');
        Route::get('/env',[DotEnvController::class,'overview'])->name('env.overview');
        Route::resource('translations',LanguageTranslationController::class);
    });


    Route::resource('home-cat-products',         HomeCatProductController::class);


    Route::controller(UploadsController::class)
        ->prefix('upload')
        ->name('upload.')
        ->group(function () {
            Route::get('{folder}/image', 'image')->name('image');
            Route::get('/delete', 'delete')->name('delete');
        });

    Route::get('/videos',[VideoController::class, 'index'])->name('videos.index');

});


