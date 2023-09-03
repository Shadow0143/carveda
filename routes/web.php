<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();
Route::get('/', [App\Http\Controllers\welcomeController::class, 'welcome'])->name('welcome');
Route::get('/contact', [App\Http\Controllers\welcomeController::class, 'contact'])->name('contact');
Route::get('/services', [App\Http\Controllers\welcomeController::class, 'services'])->name('services');
Route::get('/service-details/{slug}', [App\Http\Controllers\welcomeController::class, 'servicesDetails'])->name('servicesDetails');
Route::get('/service-type/{slug}', [App\Http\Controllers\welcomeController::class, 'servicesType'])->name('servicesType');
Route::get('/blogs', [App\Http\Controllers\welcomeController::class, 'blogs'])->name('blogs');
Route::get('/blogs-details/{id}', [App\Http\Controllers\welcomeController::class, 'blogDetails'])->name('blogDetails');
Route::get('/blogs/{slug}', [App\Http\Controllers\welcomeController::class, 'blogwithCategory'])->name('blogwithCategory');
Route::get('/about-us', [App\Http\Controllers\welcomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/work', [App\Http\Controllers\welcomeController::class, 'work'])->name('work');
Route::get('/work-detail/{id}', [App\Http\Controllers\welcomeController::class, 'workDeails'])->name('workDeails');
Route::post('/submit-contact', [App\Http\Controllers\welcomeController::class, 'submitContact'])->name('submitContact');
Route::post('/submit-subscribe', [App\Http\Controllers\welcomeController::class, 'subscribe'])->name('subscribe');
Route::get('/find-car-filter/{id}', [App\Http\Controllers\welcomeController::class, 'findCarsFilter'])->name('findCarsFilter');
Route::post('/blogs', [App\Http\Controllers\welcomeController::class, 'searchBlogs'])->name('searchBlogs');
Route::post('/services', [App\Http\Controllers\welcomeController::class, 'searchservices'])->name('searchservices');





Route::prefix('admin')->middleware('adminCheck')->group(function () {

    // ======================== Admin =======================================
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    

    // =========================== Auth =====================================
        Route::get('/profile/{id}', [App\Http\Controllers\MainController::class, 'profile'])->name('profile');
        Route::post('/submit-profile', [App\Http\Controllers\MainController::class, 'submitProfile'])->name('submitProfile');
        Route::get('/change-password', [App\Http\Controllers\MainController::class, 'changePassword'])->name('changePassword');
        Route::post('/submit-password', [App\Http\Controllers\MainController::class, 'submitPassword'])->name('submitPassword');
    // ========================= / Auth ======================================


    //========================= About Me ==================================
        Route::get('/aboutme-list', [App\Http\Controllers\HomeController::class, 'aboutMeList'])->name('aboutMeList')->middleware('permission:About Me');
        Route::get('/aboutme-add', [App\Http\Controllers\HomeController::class, 'aboutMeAdd'])->name('aboutMeAdd')->middleware('permission:About Me');
        Route::get('/aboutme-edit/{id}', [App\Http\Controllers\HomeController::class, 'aboutMeEdit'])->name('aboutMeEdit')->middleware('permission:About Me');
        Route::post('/aboutme-save', [App\Http\Controllers\HomeController::class, 'aboutMeSave'])->name('aboutMeSave')->middleware('permission:About Me');
        Route::get('/aboutme-delete', [App\Http\Controllers\HomeController::class, 'aboutMeDelete'])->name('aboutMeDelete')->middleware('permission:About Me'); 

    //========================= / About Me ================================


    //========================= Testimonial ================================

        Route::get('/testimonial-list', [App\Http\Controllers\HomeController::class, 'testimonialList'])->name('testimonialList')->middleware('permission:Testimonials');
        Route::get('/testimonial-add', [App\Http\Controllers\HomeController::class, 'testimonialAdd'])->name('testimonialAdd')->middleware('permission:Testimonials');
        Route::get('/testimonial-edit/{id}', [App\Http\Controllers\HomeController::class, 'testimonialEdit'])->name('testimonialEdit')->middleware('permission:Testimonials');
        Route::post('/testimonial-save', [App\Http\Controllers\HomeController::class, 'testimonialSave'])->name('testimonialSave')->middleware('permission:Testimonials');
        Route::get('/testimonial-delete', [App\Http\Controllers\HomeController::class, 'testimonialDelete'])->name('testimonialDelete')->middleware('permission:Testimonials'); 

    //========================= / Testimonial ================================


    //========================= Service ================================

        Route::get('/service-list', [App\Http\Controllers\HomeController::class, 'servicesList'])->name('servicesList')->middleware('permission:Testimonials')->middleware('permission:Services');
        Route::get('/service-add', [App\Http\Controllers\HomeController::class, 'servicesAdd'])->name('servicesAdd')->middleware('permission:Services');
        Route::get('/service-edit/{id}', [App\Http\Controllers\HomeController::class, 'servicesEdit'])->name('servicesEdit')->middleware('permission:Services');
        Route::post('/service-save', [App\Http\Controllers\HomeController::class, 'servicesSave'])->name('servicesSave')->middleware('permission:Services');
        Route::get('/service-delete', [App\Http\Controllers\HomeController::class, 'servicesDelete'])->name('servicesDelete')->middleware('permission:Services'); 
        Route::get('/find-car/{id}', [App\Http\Controllers\HomeController::class, 'findCars'])->name('findCars')->middleware('permission:Services'); 


    //========================= / Service ================================


    //========================= Contact ================================

        Route::get('/contact-list', [App\Http\Controllers\HomeController::class, 'contactList'])->name('contactList')->middleware('permission:Contact Messages');
        Route::get('/subscriber-list', [App\Http\Controllers\HomeController::class, 'subscriberList'])->name('subscriberList')->middleware('permission:Subscribers');
   
    //========================= / Contact ================================


    //========================= Works ================================

        Route::get('/works-list', [App\Http\Controllers\HomeController::class, 'worksList'])->name('worksList')->middleware('permission:Works');
        Route::get('/works-add', [App\Http\Controllers\HomeController::class, 'worksAdd'])->name('worksAdd')->middleware('permission:Works');
        Route::get('/works-edit/{id}', [App\Http\Controllers\HomeController::class, 'worksEdit'])->name('worksEdit')->middleware('permission:Works');
        Route::post('/works-save', [App\Http\Controllers\HomeController::class, 'worksSave'])->name('worksSave')->middleware('permission:Works');
        Route::get('/works-delete', [App\Http\Controllers\HomeController::class, 'worksDelete'])->name('worksDelete')->middleware('permission:Works'); 

    //========================= / Works ================================


    //========================= Blogs ================================

        Route::get('/blogs-list', [App\Http\Controllers\HomeController::class, 'blogsList'])->name('blogsList')->middleware('permission:Blogs');
        Route::get('/blogs-add', [App\Http\Controllers\HomeController::class, 'blogsAdd'])->name('blogsAdd')->middleware('permission:Blogs');
        Route::get('/blogs-edit/{id}', [App\Http\Controllers\HomeController::class, 'blogsEdit'])->name('blogsEdit')->middleware('permission:Blogs');
        Route::post('/blogs-save', [App\Http\Controllers\HomeController::class, 'blogsSave'])->name('blogsSave')->middleware('permission:Blogs');
        Route::get('/blogs-delete', [App\Http\Controllers\HomeController::class, 'blogsDelete'])->name('blogsDelete')->middleware('permission:Blogs'); 

    //========================= / Blogs ================================



    //========================= Category ================================

        Route::get('/category-list', [App\Http\Controllers\HomeController::class, 'categoryList'])->name('categoryList')->middleware('permission:Master Category');
        Route::get('/category-add', [App\Http\Controllers\HomeController::class, 'categoryAdd'])->name('categoryAdd')->middleware('permission:Master Category');
        Route::get('/category-edit/{id}', [App\Http\Controllers\HomeController::class, 'categoryEdit'])->name('categoryEdit')->middleware('permission:Master Category');
        Route::post('/category-save', [App\Http\Controllers\HomeController::class, 'categorySave'])->name('categorySave')->middleware('permission:Master Category');
        Route::get('/category-delete', [App\Http\Controllers\HomeController::class, 'categoryDelete'])->name('categoryDelete')->middleware('permission:Master Category'); 

    //========================= / Category ================================


    //========================= Cars ================================

        Route::get('/car-list', [App\Http\Controllers\HomeController::class, 'carList'])->name('carList')->middleware('permission:Cars');
        Route::get('/car-add', [App\Http\Controllers\HomeController::class, 'carAdd'])->name('carAdd')->middleware('permission:Cars');
        Route::get('/car-edit/{id}', [App\Http\Controllers\HomeController::class, 'carEdit'])->name('carEdit')->middleware('permission:Cars');
        Route::post('/car-save', [App\Http\Controllers\HomeController::class, 'carSave'])->name('carSave')->middleware('permission:Cars');
        Route::get('/car-delete', [App\Http\Controllers\HomeController::class, 'carDelete'])->name('carDelete')->middleware('permission:Cars'); 

    //========================= / Cars ================================


    //========================= Permissions ================================

        Route::get('/permission-list', [App\Http\Controllers\RoleController::class, 'permissionList'])->name('permissionList')->middleware('permission:Permission');
        Route::get('/permission-add', [App\Http\Controllers\RoleController::class, 'permissionAdd'])->name('permissionAdd')->middleware('permission:Permission');
        Route::get('/permission-edit/{id}', [App\Http\Controllers\RoleController::class, 'permissionEdit'])->name('permissionEdit')->middleware('permission:Permission');
        Route::post('/permission-save', [App\Http\Controllers\RoleController::class, 'permissionSave'])->name('permissionSave')->middleware('permission:Permission');
        Route::get('/permission-delete', [App\Http\Controllers\RoleController::class, 'permissionDelete'])->name('permissionDelete')->middleware('permission:Permission'); 

    //========================= / Permissions ================================


    //========================= Role ================================

        Route::get('/role-list', [App\Http\Controllers\RoleController::class, 'roleList'])->name('roleList')->middleware('permission:Roles');
        Route::get('/role-add', [App\Http\Controllers\RoleController::class, 'roleAdd'])->name('roleAdd')->middleware('permission:Roles');
        Route::get('/role-edit/{id}', [App\Http\Controllers\RoleController::class, 'roleEdit'])->name('roleEdit')->middleware('permission:Roles');
        Route::post('/role-save', [App\Http\Controllers\RoleController::class, 'roleSave'])->name('roleSave')->middleware('permission:Roles');
        Route::get('/role-delete', [App\Http\Controllers\RoleController::class, 'roleDelete'])->name('roleDelete')->middleware('permission:Roles'); 

    //========================= / Role ================================


    //========================= Role In Permission ================================

        Route::get('/role-permission-list', [App\Http\Controllers\RoleController::class, 'rolePermissionList'])->name('rolePermissionList')->middleware('permission:Roles In Permission');
        Route::get('/role-permission-add', [App\Http\Controllers\RoleController::class, 'rolePermissionAdd'])->name('rolePermissionAdd')->middleware('permission:Roles In Permission');
        Route::get('/role-permission-edit/{id}', [App\Http\Controllers\RoleController::class, 'rolePermissionEdit'])->name('rolePermissionEdit')->middleware('permission:Roles In Permission');
        Route::post('/role-permission-save', [App\Http\Controllers\RoleController::class, 'rolePermissionSave'])->name('rolePermissionSave')->middleware('permission:Roles In Permission');
        Route::get('/role-permission-delete', [App\Http\Controllers\RoleController::class, 'rolePermissionDelete'])->name('rolePermissionDelete')->middleware('permission:Roles In Permission'); 

    //========================= / Role In Permission ================================


    //========================= Admin ================================

        Route::get('/admin-list', [App\Http\Controllers\AdminController::class, 'adminList'])->name('adminList')->middleware('permission:All Admin');
        Route::get('/admin-add', [App\Http\Controllers\AdminController::class, 'adminAdd'])->name('adminAdd')->middleware('permission:All Admin');
        Route::get('/admin-edit/{id}', [App\Http\Controllers\AdminController::class, 'adminEdit'])->name('adminEdit')->middleware('permission:All Admin');
        Route::post('/admin-save', [App\Http\Controllers\AdminController::class, 'adminSave'])->name('adminSave')->middleware('permission:All Admin');
        Route::get('/admin-delete', [App\Http\Controllers\AdminController::class, 'adminDelete'])->name('adminDelete')->middleware('permission:All Admin'); 

    //========================= / Admin ================================

    Route::get('/s/{token}', [HomeController::class, 'redirect'])->where('name', '[A-Za-z0-9]+');

});


Route::get('/{slug}', [App\Http\Controllers\welcomeController::class, 'notFound'])->name('notFound');
