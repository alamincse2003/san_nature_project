<?php

use App\Http\Controllers\backend\CoeController;
use App\Http\Controllers\backend\ListCompanyController;
use App\Http\Controllers\backend\OverviewController;
use App\Http\Controllers\backend\ServiceManagerController;
use App\Http\Controllers\backend\TabController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get( '/', [FrontendController::class, 'index'] )->name( 'home.all' );
Route::get( '/pages/{menu}/{slug}', [FrontendController::class, 'pageDetails'] )->name( 'pageDetails' );
Route::get( 'about-us', [FrontendController::class, 'about'] )->name( 'about.all' );
Route::get( 'services', [FrontendController::class, 'services'] )->name( 'services.all' );
//Route::get('products','\App\Http\Controllers\Frontend\FrontendController@productsPage')->name('products.all');
//Route::get('products/{id}/{slug?}','\App\Http\Controllers\Frontend\FrontendController@products')->name('products');
Route::get( 'projects', [FrontendController::class, 'projectAll'] )->name( 'projects.all' );
Route::get( 'teams', [FrontendController::class, 'team'] )->name( 'team' );
Route::get( 'carriers', [FrontendController::class, 'carrier'] )->name( 'carrier' );
Route::get( 'carriers/carrier-details', [FrontendController::class, 'carrier_details'] )->name( 'carrier-details' );
Route::get( 'coe', [FrontendController::class, 'coe'] )->name( 'coe' );

Route::get( 'projects/{id}/{slug?}', '\App\Http\Controllers\Frontend\FrontendController@singleProject' )->name( 'single.projects' );
Route::get( 'project/project-type/{projectType}', '\App\Http\Controllers\Frontend\FrontendController@projectType' )->name( 'projectType' );
Route::get( 'photo-gallery', '\App\Http\Controllers\Frontend\FrontendController@galleries' )->name( 'photo-gallery.all' );
Route::get( 'blogs', '\App\Http\Controllers\Frontend\FrontendController@blogs' )->name( 'blogs.all' );
Route::get( 'blog/{id}/{slug?}', '\App\Http\Controllers\Frontend\FrontendController@blogDetails' )->name( 'blogDetails' );
Route::get( 'blog-category/{id}/{slug?}', '\App\Http\Controllers\Frontend\FrontendController@blogCategoryDetails' )->name( 'blogCategoryDetails' );
Route::get( 'contact-us', '\App\Http\Controllers\Frontend\FrontendController@contact' )->name( 'user_contact' );
Route::post( 'contact-us', '\App\Http\Controllers\Frontend\FrontendController@contactStore' )->name( 'user_contact.store' );
Route::get( 'user-subscribe', '\App\Http\Controllers\Frontend\FrontendController@contact' )->name( 'user_contact_subscribe' );
Route::post( 'user-subscribe', '\App\Http\Controllers\Frontend\FrontendController@subscribe' )->name( 'user_subscribe.store' );

Route::middleware( ['auth:sanctum', 'verified'] )->group( function () {

    Route::get( '/dashboard', \App\Http\Controllers\Backend\DashboardController::class )->name( 'dashboard' );

    Route::resource( 'home_page', \App\Http\Controllers\Backend\HomeController::class );
    Route::resource( 'category', \App\Http\Controllers\Backend\CategoryController::class );
    Route::resource( 'product', \App\Http\Controllers\Backend\ProductController::class );
    Route::resource( 'project', \App\Http\Controllers\Backend\ProjectController::class );
    Route::resource( 'slider', \App\Http\Controllers\Backend\SliderController::class );
    Route::resource( 'service', \App\Http\Controllers\Backend\ServiceController::class );
    Route::resource( 'testimonial', \App\Http\Controllers\Backend\TestimonialController::class );
    Route::resource( 'crm', \App\Http\Controllers\Backend\CRMController::class );
    Route::resource( 'post-category', \App\Http\Controllers\Backend\PostCategoryController::class );
    Route::resource( 'post', \App\Http\Controllers\Backend\PostController::class );
    Route::resource( 'page', \App\Http\Controllers\Backend\PageController::class );
    Route::resource( 'media', \App\Http\Controllers\Backend\MediaController::class );
    Route::delete( 'media-delete/{id}', [MediaController::class, 'mediaDelete'] )->name( 'mediaDelete' );

    Route::resource( 'gallery', \App\Http\Controllers\Backend\GalleryController::class );
    Route::resource( 'contact', \App\Http\Controllers\Backend\ContactController::class );
    Route::resource( 'settings', \App\Http\Controllers\Backend\SettingsController::class );
    Route::resource( 'user', \App\Http\Controllers\Backend\UserController::class );
    Route::get( 'user/edit/{uid}', \App\Http\Controllers\Backend\UserController::class, 'edit' )->name( 'userEdit' );
    Route::resource( 'role', \App\Http\Controllers\Backend\RolesController::class );

    Route::match( ['get', 'post'], 'overview/{id?}', [OverviewController::class, 'index'] )->name( 'overview.index' );
    Route::match( ['get', 'post'], 'list-company/{id?}', [ListCompanyController::class, 'index'] )->name( 'list-company.index' );
    Route::match( ['get', 'post'], 'service-manager/{id?}', [ServiceManagerController::class, 'index'] )->name( 'service-manager.index' );
    Route::post( 'service-manager-upload', [ServiceManagerController::class, 'serviceManagerUpload'] )->name( 'service_manager.upload' );
    Route::match( ['get', 'post'], 'team/{id?}', [TeamController::class, 'index'] )->name( 'team.index' );
    Route::match( ['get', 'post'], 'coes/{id?}', [CoeController::class, 'index'] )->name( 'coe.index' );
    Route::match( ['get', 'post'], 'tab/{id?}', [TabController::class, 'index'] )->name( 'tab.index' );
} );

Route::get( 'logout', function () {
    return redirect( 'login' );
} );
Route::get( 'cpanel', function () {
    return redirect( 'login' );
} );
