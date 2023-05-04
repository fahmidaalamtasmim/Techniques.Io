<?php

use App\Models\Phone;
use App\Models\camera;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneScraper;
use App\Http\Controllers\cameraScraper;
use App\Http\Controllers\SearchProduct;
use App\Http\Controllers\topicController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\CreatorContorller;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\frontendController;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\ScrapeAdminController;
use App\Http\Controllers\PythonScriptController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ComparisonController;
use App\Http\Controllers\ProductCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $cat = ProductCategory::all();

    $cam = camera::where('cc',1)->latest()->get();
    $pho = Phone::where('pp',1)->latest()->get();
    
    $camera = new Collection($cam);
    $phone = new Collection($pho);
    $all = $camera->merge($phone)->shuffle()->take(6);

    // echo $all;
    // die();
    return view('welcome',[
        'cat'=>$cat,
        'all'=>$all,
    ]);
});

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admindashboard
Route::get('/admin',[AdminDashboardController::class,'admin'])->name('admin');
Route::get('/admin/users',[AdminDashboardController::class,'admin_Users'])->name('admin.users');

//Edit
Route::get('/admin/users/edit',[AdminDashboardController::class,'admin_users_edit'])->name('admin.users.edit');

//update
Route::post('/admin/update',[AdminDashboardController::class,'admin_edit'])->name('update.admin');

//password update
Route::post('/admin/password/update',[AdminDashboardController::class,'admin_password_update'])->name('admin.password.update');
//Photo
Route::post('/admin/photo',[AdminDashboardController::class,'admin_photo'])->name('admin.photo');
// delelete admin
Route::get('/admin/users/delete/{user_id}',[AdminDashboardController::class,'admin_users_delete'])->name('admin.delete');

//////////////USER LIST///////////////
Route::get('/admin/user/list',[AdminDashboardController::class,'user_list'])->name('user.list');
///user delete
Route::get('/admin/user/delete/{id}',[AdminDashboardController::class,'user_delete'])->name('user.delete');












/////   CATEGORY    STARTS/////////////////////////////////////
//view
Route::get('/category',[categoryController::class,'category'])->name('category');
//add category
Route::post('/category/add',[categoryController::class,'category_add'])->name('add.category');
//delete
Route::get('/category/delete/{category_id}',[categoryController::class,'category_delete'])->name('category.delete');
/////   CATEGORY    ENDS /////////////////////////////////////

//admindashboard




/////////////////////Creator Part STARTS////////////////////
//view dashboard master
Route::get('/creator/dashboard',[CreatorContorller::class,'dashboard'])->name('dashboard');
//view register
Route::get('/creator',[CreatorContorller::class,'creator_view'])->name('form');
//view login
Route::get('/login/creator',[CreatorContorller::class,'creator_login_view'])->name('loginview');

//register
Route::post('/creator/register',[CreatorContorller::class,'creator_register'])->name('creator.register');
//login
Route::post('/creator/login',[CreatorContorller::class,'creator_login'])->name('creator.login');
//logout
Route::get('/creator/logout',[CreatorContorller::class,'creator_logout'])->name('creator.logout');



///////////////////////////////////
//edit page view
Route::get('/creator/edit',[CreatorContorller::class,'edit'])->name('edit');
//update
Route::post('/update',[CreatorContorller::class,'update'])->name('update');
//update password
Route::post('/password',[CreatorContorller::class,'password'])->name('password');
//photo
Route::post('/photo',[CreatorContorller::class,'photo'])->name('photo');
//////////////////////////////////////////


Route::get('/topic',[topicController::class,'topic'])->name('topic');
Route::post('/topic/add',[topicController::class,'topic_add'])->name('topic.add');
Route::get('/topic/list',[topicController::class,'topic_list'])->name('topic.list');
Route::get('/topic/delete/{tid}',[topicController::class,'topic_delete'])->name('topic.delete');

//comment
Route::post('/comment}',[commentController::class,'comment'])->name('comment');
Route::get('/clist}',[commentController::class,'clist'])->name('clist');


///admin topic list
Route::get('/admin/topic/list}',[AdminDashboardController::class,'topic_admin'])->name('topic.admin');
Route::get('/del/{tid}',[AdminDashboardController::class,'del'])->name('del');
Route::get('/ap/{tid}',[AdminDashboardController::class,'ap'])->name('ap');
//Route::post('/ap/{tid}',[AdminDashboardController::class,'ap'])->name('ap');



//dashboard
Route::get('/dashboard',[CreatorContorller::class,'dashboard_c'])->name('dashboard');
/////////////////////Creator Part ENDS ////////////////////



/////////////////////////////////////////////////////////////////////////////////////
/////////////Frontend home view ////////////////////////////////////////
Route::get('/techniques',[frontendController::class,'techniques'])->name('techniques');
//home page 
Route::get('/techniques/blog',[frontendController::class,'blog'])->name('blog');
Route::get('/techniques/blogsingle/{tid}',[frontendController::class,'blogsingle'])->name('blogsingle');
//category single page view 
Route::get('/techniques/category/{cid}',[frontendController::class,'cat'])->name('cat');
//search
Route::post('/search',[frontendController::class,'search'])->name('search');
////
Route::get('/ttt',[frontendController::class,'ttt'])->name('ttt');

///SCRAPER
Route::get('/scraper',[ScraperController::class,'scraper'])->name('scraper');
//phone
Route::get('/phone/view',[PhoneScraper::class,'phoneview'])->name('phoneview');
Route::get('/phone',[PhoneScraper::class,'phone'])->name('phone');
//Route::get('/phone',[PhoneScraper::class,'phone'])->name('phone');
//camera
Route::get('/camera/view',[cameraScraper::class,'cameraview'])->name('cameraview');
//Route::get('/camera',[cameraScraper::class,'camera'])->name('camera');

Route::get('/allproduct/{id}',[frontendController::class,'allproduct'])->name('allproduct');

//python
//Route::get('/py',[PythonScriptController::class,'PythonScript'])->name('py');
//Route::get('/p',[PythonScriptController::class,'p'])->name('p');


//scrape admin
Route::get('/scrape',[ScrapeAdminController::class,'scrape'])->name('scrape');

//all scrape
Route::post('/all/scrape',[ScrapeAdminController::class,'s'])->name('s');
// single scrape admin
Route::get('/single/scrape/{sid}/{cid}{wid}',[ScrapeAdminController::class,'single_scrape'])->name('single');

//delete camera
Route::get('/camera/delete/{cam_id}',[ScrapeAdminController::class,'camera_delete'])->name('camera.delete');
//phone delete
Route::get('/phone/delete/{pho_id}',[ScrapeAdminController::class,'phone_delete'])->name('phone.delete');

//camera permission
Route::get('/cp/{cid}',[ScrapeAdminController::class,'cp'])->name('cp');


//phone permission
Route::get('/pp/{pid}',[ScrapeAdminController::class,'pp'])->name('pp');






//Product admin
Route::get('/product/category',[ProductCategoryController::class,'product_category'])->name('product.category');
//add website
Route::get('/w',[ScrapeAdminController::class,'w'])->name('w');
Route::post('/add/website',[ScrapeAdminController::class,'add_website'])->name('add.website');


Route::post('/add/product',[ProductCategoryController::class,'add'])->name('add.product');

Route::get('/add/product/{uid}',[ProductCategoryController::class,'delete'])->name('product.delete');


//search
Route::get('/search/product',[SearchProduct::class,'search_product'])->name('search.product');

//comparison
Route::get('/comparison',[ComparisonController::class,'comparison'])->name('comparison');

