<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

    Route::get('/', function () {
         if (Auth::check()) {
              return redirect('admin/home');
         } else {
              return view('auth.login');
         }
    });
    Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

    /*********************************/
    /**** Start Client Route Area ****/
    /*********************************/

    // Client List
    Route::get('/client_list',[App\Http\Controllers\AdminController::class, 'client_list'])->name('client_list');
    Route::get('/client_delete/{id}',[App\Http\Controllers\AdminController::class, 'client_delete'])->name('client_delete');
    Route::get('/clients_add',[App\Http\Controllers\AdminController::class, 'clients_add'])->name('clients_add');
    Route::post('/client_add_insert',[App\Http\Controllers\AdminController::class, 'client_add_insert'])->name('client_add_insert');
    Route::get('/clients_edit/{id}',[App\Http\Controllers\AdminController::class, 'clients_edit'])->name('clients_edit');
    Route::post('/Clients_Update',[App\Http\Controllers\AdminController::class, 'Clients_Update'])->name('Clients_Update');
    Route::post('/clients_all_delete',[App\Http\Controllers\AdminController::class, 'clients_all_delete'])->name('clients_all_delete');


    /**********************************/
    /** Start Reservation Route Area **/
    /**********************************/

    // Reservation Route
    Route::get('/reservation_list',[App\Http\Controllers\AdminController::class, 'reservation_list'])->name('reservation_list');
    Route::get('/reservation_list_add',[App\Http\Controllers\AdminController::class, 'reservation_list_add'])->name('reservation_list_add');
    

    // Reservation Status Route
    Route::get('/reservation_status',[App\Http\Controllers\AdminController::class, 'reservation_status'])->name('reservation_status');
    Route::get('/reservation_delete/{id}',[App\Http\Controllers\AdminController::class, 'reservation_delete'])->name('reservation_delete');
    Route::get('/reservation_add_status',[App\Http\Controllers\AdminController::class, 'reservation_add_status'])->name('reservation_add_status');
    Route::post('/reservation_status_insert',[App\Http\Controllers\AdminController::class, 'reservation_status_insert'])->name('reservation_status_insert');
    Route::get('/reservation_status_edit/{id}',[App\Http\Controllers\AdminController::class, 'reservation_status_edit'])->name('reservation_status_edit');
    Route::post('/reservation_status_update',[App\Http\Controllers\AdminController::class, 'reservation_status_update'])->name('reservation_status_update');
    Route::post('/reservation_status_all_delete',[App\Http\Controllers\AdminController::class, 'reservation_status_all_delete'])->name('reservation_status_all_delete');

    // Reservation Lock Date Route
    Route::get('/lock_date',[App\Http\Controllers\AdminController::class, 'lock_date'])->name('lock_date');
    Route::get('/reservation_lockdate_delete/{id}',[App\Http\Controllers\AdminController::class, 'reservation_lockdate_delete'])->name('reservation_lockdate_delete');
    Route::get('/reservation_add_lock_date',[App\Http\Controllers\AdminController::class, 'reservation_add_lock_date'])->name('reservation_add_lock_date');
    Route::post('/reservation_lock_date_insert',[App\Http\Controllers\AdminController::class, 'reservation_lock_date_insert'])->name('reservation_lock_date_insert');
    Route::post('/reservation_lock_date_all_delete',[App\Http\Controllers\AdminController::class, 'reservation_lock_date_all_delete'])->name('reservation_lock_date_all_delete');


    /**********************************/
    /***** Start Price Route Area *****/
    /**********************************/

    // Price Zones Route
    Route::get('/zones',[App\Http\Controllers\AdminController::class, 'zones'])->name('zones');
    Route::get('/price_zone_delete/{id}',[App\Http\Controllers\AdminController::class, 'price_zone_delete'])->name('price_zone_delete');
    Route::get('/price_zone_add',[App\Http\Controllers\AdminController::class, 'price_zone_add'])->name('price_zone_add');
    Route::post('/price_zone_insert',[App\Http\Controllers\AdminController::class, 'price_zone_insert'])->name('price_zone_insert');
    Route::get('/price_zone_edit/{id}',[App\Http\Controllers\AdminController::class, 'price_zone_edit'])->name('price_zone_edit');
    Route::post('/price_zone_update',[App\Http\Controllers\AdminController::class, 'price_zone_update'])->name('price_zone_update');
    Route::post('/price_zone_all_delete',[App\Http\Controllers\AdminController::class, 'price_zone_all_delete'])->name('price_zone_all_delete');

    // Price Location Route
    Route::get('/price_locations',[App\Http\Controllers\AdminController::class, 'price_locations'])->name('price_locations');
    Route::get('/price_locations_delete/{id}',[App\Http\Controllers\AdminController::class, 'price_locations_delete'])->name('price_locations_delete');
    Route::get('/price_location_add',[App\Http\Controllers\AdminController::class, 'price_location_add'])->name('price_location_add');
    Route::post('/price_location_insert',[App\Http\Controllers\AdminController::class, 'price_location_insert'])->name('price_location_insert');
    Route::get('/price_location_edit/{id}',[App\Http\Controllers\AdminController::class, 'price_location_edit'])->name('price_location_edit');
    Route::post('/price_location_update',[App\Http\Controllers\AdminController::class, 'price_location_update'])->name('price_location_update');
    Route::post('/price_location_all_delete',[App\Http\Controllers\AdminController::class, 'price_location_all_delete'])->name('price_location_all_delete');

    // Price Pricing Route
    Route::get('/price_pricing',[App\Http\Controllers\AdminController::class, 'price_pricing'])->name('price_pricing');
    Route::get('/price_pricing_delete/{id}',[App\Http\Controllers\AdminController::class, 'price_pricing_delete'])->name('price_pricing_delete');
    Route::get('/price_pricing_add',[App\Http\Controllers\AdminController::class, 'price_pricing_add'])->name('price_pricing_add');
    Route::post('/price_pricing_insert',[App\Http\Controllers\AdminController::class, 'price_pricing_insert'])->name('price_pricing_insert');
    Route::get('/price_pricing_edit/{id}',[App\Http\Controllers\AdminController::class, 'price_pricing_edit'])->name('price_pricing_edit');
    Route::post('/price_pricing_update',[App\Http\Controllers\AdminController::class, 'price_pricing_update'])->name('price_pricing_update');
    Route::post('/price_pricing_all_delete',[App\Http\Controllers\AdminController::class, 'price_pricing_all_delete'])->name('price_pricing_all_delete');


    /*********************************/
    /*** Start Content Route Area ****/
    /*********************************/

    // Admin Content Add Edit Route
    Route::get('/content_addedit',[App\Http\Controllers\AdminController::class, 'content_addedit'])->name('content_addedit');
    Route::get('/content_addedit_delete/{id}',[App\Http\Controllers\AdminController::class, 'content_addedit_delete'])->name('content_addedit_delete');
    Route::get('/content_addedit_add',[App\Http\Controllers\AdminController::class, 'content_addedit_add'])->name('content_addedit_add');
    Route::post('/content_addedit_insert',[App\Http\Controllers\AdminController::class, 'content_addedit_insert'])->name('content_addedit_insert');
    Route::get('/content_addedit_edit/{id}',[App\Http\Controllers\AdminController::class, 'content_addedit_edit'])->name('content_addedit_edit');
    Route::post('/content_addedit_update',[App\Http\Controllers\AdminController::class, 'content_addedit_update'])->name('content_addedit_update');
    Route::post('/content_addedit_all_delete',[App\Http\Controllers\AdminController::class, 'content_addedit_all_delete'])->name('content_addedit_all_delete');

    // Admin Content Vehicle Maneger Route
    Route::get('/content_vehicle_maneger',[App\Http\Controllers\AdminController::class, 'content_vehicle_maneger'])->name('content_vehicle_maneger');
    Route::get('/content_vehicle_delete/{id}',[App\Http\Controllers\AdminController::class, 'content_vehicle_delete'])->name('content_vehicle_delete');
    Route::get('/content_vehicle_add',[App\Http\Controllers\AdminController::class, 'content_vehicle_add'])->name('content_vehicle_add');
    Route::post('/content_vehicle_insert',[App\Http\Controllers\AdminController::class, 'content_vehicle_insert'])->name('content_vehicle_insert');
    Route::get('/content_vehicle_edit/{id}',[App\Http\Controllers\AdminController::class, 'content_vehicle_edit'])->name('content_vehicle_edit');
    Route::post('/content_vehicle_update',[App\Http\Controllers\AdminController::class, 'content_vehicle_update'])->name('content_vehicle_update');
    Route::post('/content_vehicle_all_delete',[App\Http\Controllers\AdminController::class, 'content_vehicle_all_delete'])->name('content_vehicle_all_delete');
    
    // Admin Content testimnial Route
    Route::get('/content_testimonial',[App\Http\Controllers\AdminController::class, 'content_testimonial'])->name('content_testimonial');
    Route::get('/content_testimonial_delete/{id}',[App\Http\Controllers\AdminController::class, 'content_testimonial_delete'])->name('content_testimonial_delete');
    Route::get('/content_testimonial_add',[App\Http\Controllers\AdminController::class, 'content_testimonial_add'])->name('content_testimonial_add');
    Route::post('/content_testimonial_insert',[App\Http\Controllers\AdminController::class, 'content_testimonial_insert'])->name('content_testimonial_insert');
    Route::get('/content_testimonial_edit/{id}',[App\Http\Controllers\AdminController::class, 'content_testimonial_edit'])->name('content_testimonial_edit');
    Route::post('/content_testimonial_update',[App\Http\Controllers\AdminController::class, 'content_testimonial_update'])->name('content_testimonial_update');
    Route::post('/content_testimonial_all_delete',[App\Http\Controllers\AdminController::class, 'content_testimonial_all_delete'])->name('content_testimonial_all_delete');
    
    // Admin Content Faq Route
    Route::get('/content_faq',[App\Http\Controllers\AdminController::class, 'content_faq'])->name('content_faq');
    Route::get('/content_faq_add',[App\Http\Controllers\AdminController::class, 'content_faq_add'])->name('content_faq_add');
    Route::post('/content_faq_insert',[App\Http\Controllers\AdminController::class, 'content_faq_insert'])->name('content_faq_insert');

    // Admin Content Email Templates Route
    Route::get('/content_email',[App\Http\Controllers\AdminController::class, 'content_email'])->name('content_email');
    Route::get('/content_email_delete/{id}',[App\Http\Controllers\AdminController::class, 'content_email_delete'])->name('content_email_delete');
    Route::get('/content_email_add',[App\Http\Controllers\AdminController::class, 'content_email_add'])->name('content_email_add');
    Route::post('/content_email_insert',[App\Http\Controllers\AdminController::class, 'content_email_insert'])->name('content_email_insert');
    Route::get('/content_email_edit/{id}',[App\Http\Controllers\AdminController::class, 'content_email_edit'])->name('content_email_edit');
    Route::post('/content_email_update',[App\Http\Controllers\AdminController::class, 'content_email_update'])->name('content_email_update');    
    Route::post('/content_email_all_delete',[App\Http\Controllers\AdminController::class, 'content_email_all_delete'])->name('content_email_all_delete');



    /*********************************/
    /***** Start User Route Area *****/
    /*********************************/

    // Admin User Driver Route
    Route::get('/user_add_driver',[App\Http\Controllers\AdminController::class, 'user_add_driver'])->name('user_add_driver');
    Route::post('/user_add_driver_insert',[App\Http\Controllers\AdminController::class, 'user_add_driver_insert'])->name('user_add_driver_insert');


    // Admin User Driver List Route
    Route::get('/user_driver_list',[App\Http\Controllers\AdminController::class, 'user_driver_list'])->name('user_driver_list');
    Route::get('/user_driver_list_delete/{id}',[App\Http\Controllers\AdminController::class, 'user_driver_list_delete'])->name('user_driver_list_delete');
    Route::get('/user_driver_list_add',[App\Http\Controllers\AdminController::class, 'user_driver_list_add'])->name('user_driver_list_add');
    Route::post('/user_driver_list_insert',[App\Http\Controllers\AdminController::class, 'user_driver_list_insert'])->name('user_driver_list_insert');
    Route::get('/user_driver_list_edit/{id}',[App\Http\Controllers\AdminController::class, 'user_driver_list_edit'])->name('user_driver_list_edit');
    Route::post('/user_driver_list_update',[App\Http\Controllers\AdminController::class, 'user_driver_list_update'])->name('user_driver_list_update');
    Route::post('/user_driver_list_all_delete',[App\Http\Controllers\AdminController::class, 'user_driver_list_all_delete'])->name('user_driver_list_all_delete');

    // Admin User Trip Sheet Route
    Route::get('/user_tripsheet',[App\Http\Controllers\AdminController::class, 'user_tripsheet'])->name('user_tripsheet');


    // Admin User Email Route
    Route::get('/user_emaildriver',[App\Http\Controllers\AdminController::class, 'user_emaildriver'])->name('user_emaildriver');
    Route::get('/user_emaildriver_delete/{id}',[App\Http\Controllers\AdminController::class, 'user_emaildriver_delete'])->name('user_emaildriver_delete');
    Route::get('/user_emaildriver_add',[App\Http\Controllers\AdminController::class, 'user_emaildriver_add'])->name('user_emaildriver_add');
    Route::post('/user_emaildriver_insert',[App\Http\Controllers\AdminController::class, 'user_emaildriver_insert'])->name('user_emaildriver_insert');
    Route::get('/user_emaildriver_edit/{id}',[App\Http\Controllers\AdminController::class, 'user_emaildriver_edit'])->name('user_emaildriver_edit');
    Route::post('/user_emaildriver_update',[App\Http\Controllers\AdminController::class, 'user_emaildriver_update'])->name('user_emaildriver_update');
    Route::post('/user_emaildriver_all_delete',[App\Http\Controllers\AdminController::class, 'user_emaildriver_all_delete'])->name('user_emaildriver_all_delete');

    // Admin User Driver Shedule Route
    Route::get('/user_drivershedule',[App\Http\Controllers\AdminController::class, 'user_drivershedule'])->name('user_drivershedule');



    /*************************************/
    /** Start User User List Route Area **/
    /*************************************/

    // Admin User User List  Route
    Route::get('/userlist',[App\Http\Controllers\AdminController::class, 'userlist'])->name('userlist');
    Route::get('/userlist_delete/{id}',[App\Http\Controllers\AdminController::class, 'userlist_delete'])->name('userlist_delete');
    Route::get('/userlist_add',[App\Http\Controllers\AdminController::class, 'userlist_add'])->name('userlist_add');
    Route::post('/userlist_insert',[App\Http\Controllers\AdminController::class, 'userlist_insert'])->name('userlist_insert');
    Route::post('/userlist_all_delete',[App\Http\Controllers\AdminController::class, 'userlist_all_delete'])->name('userlist_all_delete');


    /************************************/
    /***** Start Setting Route Area *****/
    /************************************/
    
    // Admin User Driver Shedule Route
    Route::get('/setting',[App\Http\Controllers\AdminController::class, 'setting'])->name('setting');
    Route::get('/setting_update',[App\Http\Controllers\AdminController::class, 'setting_update'])->name('setting_update');


    /************************************/
    /***** Start Setting Route Area *****/
    /************************************/

    // Admin Reports Reservation Revenue Report Route
    Route::get('/reports_revenue',[App\Http\Controllers\AdminController::class, 'reports_revenue'])->name('reports_revenue');
    // Admin Report Expence Route
    Route::get('/reports_expence',[App\Http\Controllers\AdminController::class, 'reports_expence'])->name('reports_expence');
    // Admin Report accountng Ledger Route
    Route::get('/reports_accounting',[App\Http\Controllers\AdminController::class, 'reports_accounting'])->name('reports_accounting');
    // Admin Report Salary Report Route
    Route::get('/reports_salary',[App\Http\Controllers\AdminController::class, 'reports_salary'])->name('reports_salary');
    // Admin Report Transfer Report Route
    Route::get('/reports_transfer',[App\Http\Controllers\AdminController::class, 'reports_transfer'])->name('reports_transfer');



});



//****************************//
// Website Route ( FrontLook) //
//****************************//

/*** This Is Home Route ***/
Route::get('/', [App\Http\Controllers\WebController::class, 'WebHome'])->name('home');
/*** This Is Rates Route ***/
Route::get('/rates', [App\Http\Controllers\WebController::class, 'WebRates'])->name('rates');
/*** This Is Fleet Route ***/
Route::get('/fleet',[App\Http\Controllers\WebController::class, 'WebFleet'])->name('fleet');
/*** This Is Faq Route  ***/
Route::get('/faq',[App\Http\Controllers\WebController::class, 'WebFaq'])->name('faq');
/*** This Is Testimonial Route  ***/
Route::get('/testimonial',[App\Http\Controllers\WebController::class, 'WebTestimonial']);
/*** This Is Reserve Online Route ***/
Route::get('/reserve_online',[App\Http\Controllers\WebController::class, 'reserveOnline']);
/*** This Is Contact Route  ***/
Route::get('/contact', [App\Http\Controllers\WebController::class, 'WebContact'])->name('contact');

