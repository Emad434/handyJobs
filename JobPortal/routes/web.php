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
Route::get('AboutUs','GuestController@about');
Route::get('Contact','GuestController@contact');
Route::get('Faqs','GuestController@faqs');
Route::post('contact_us','GuestController@contact_us');
Route::get('Profile-Edit','GuestController@profile_edit');
 Route::post('update_profile','GuestController@update_profile');
 Route::post('bank_detail_save','GuestController@bank_detail_save');

 
 
Route::get('map/{id}','HomeController@map');
Route::get('search_region','HomeController@search_region');
Route::post('pin_map/{id}','HomeController@pin_map');
Route::get('show_map/{id}','HomeController@show_map');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/atisan', function() {
    Artisan::call('vendor:publish --tag=laravel-notifications');
    return "Cache is cleared";
});

 Route::get('/redirect/{provider}', 'SocialController@redirect');
  Route::get('/callback/{provider}', 'SocialController@callback');
 
 Route::get('cronjob_update_contract_status', 'HomeController@cronjob_update_contract_status')->name('cronjob_update_contract_status');

   Route::get('/redirectToGoogle/{google}', 'SocialController@redirectToGoogle');
   Route::get('/handleGoogleCallback/{google}', 'SocialController@handleGoogleCallback');
 

 
 Route::get('/changeLanguage/{lang}', 'HomeController@changeLanguage')->name('changeLang');
 
 Route::get('Number-Confirmation','HomeController@phone_number')->name('Number-Confirmation');
 Route::post('Number-Confirm','HomeController@number_confirm')->name('Number-Confirm'); 
Route::get('Account-Setup', function () {
    
    return view('Account_setup.account_setup_step1');
  
});

Route::get('Number-Confirmation','HomeController@index');

Route::prefix('Save_details')->group(function (){

  Route::post('submit_provider_details', 'ProviderController@submit_provider_details')->name('submit_provider_details');
 
});


// Guest route
Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::post('/loginpost', 'Auth\LoginController@loginpost')->name('loginpost');
 
 Route::post('/register/{key}', 'Auth\RegisterController@register')->name('register/{key}');


//Userrs route
 Route::prefix('User')->group(function (){

 Route::get('/', 'HomeController@index')->name('/');
 



});

Route::post('/client_details_save', 'HomeController@client_details_save')->name('/client_details_save');
Route::get('Searching-Services', 'GuestController@search_service')->name('Searching-Services');
//Route::get('Active','HomeController@Active');
 

// Providers route
 Route::group(["middleware" => ['auth', 'Providers']], function () {
 Route::get('Providers', function () {

   return redirect('Providers/Home');

  
});
 Route::prefix('Providers')->group(function (){

   Route::get('search_region', 'ProviderController@search_region')->name('search_region');

Route::post('post_request_images','ProviderController@post_request_images');

Route::get('Home', 'ProviderController@index')->name('Home');
 
 Route::post('contract_approval/{id}', 'ProviderController@contract_approval')->name('contract_approval/{id}');
 
 Route::get('My-Profile', 'ProviderController@my_profile')->name('My-Profile');
  
 Route::post('provider_reply/{id}', 'ProviderController@provider_reply')->name('provider_reply/{id}');
 
  Route::get('My-Wallet', 'ProviderController@my_wallet')->name('My-Wallet');
  
 Route::post('recharge_wallet', 'ProviderController@recharge_wallet')->name('recharge_wallet');
 
 
  Route::get('Client-Request', 'ProviderController@client_requests')->name('Client-Request');
 
  Route::post('send_proposal/{id}', 'ProviderController@send_proposal')->name('send_proposal/{id}');

 Route::get('Request-details/{id}', 'ProviderController@request_details')->name('Request-details/{id}');

 Route::get('Bank-Details', 'ProviderController@bank_details')->name('Bank-Details');
 Route::get('update_profile','ProviderController@update_profile');
 
  Route::get('Resume-edit', 'ProviderController@resume_edit')->name('Resume-edit');
 

 Route::post('send_message/{id}', 'ProviderController@send_message')->name('send_message/{id}');
 
Route::get('contract_decline/{id}', 'ProviderController@contract_decline')->name('contract_decline/{id}');
 

Route::get('cancel_disput/{id}', 'ProviderController@cancel_disput')->name('cancel_disput/{id}');
 


 Route::post('bank_detail_save', 'ProviderController@bank_detail_save')->name('bank_detail_save');
 



Route::get('Support/Inbox', 'ProviderController@support_inbox')->name('Support/Inbox');
 
Route::get('earning_filter/{month}', 'ProviderController@earning_filter')->name('earning_filter/{month}');

Route::get('decline_dispute/{id}','ProviderController@decline_dispute');
 
 Route::get('Resume', 'ProviderController@Resume')->name('Providers/Resume');
 
  Route::get('My-Services', 'ProviderController@my_gigs')->name('My-Services');
Route::get('Contracts', 'ProviderController@Contracts')->name('Contracts');


Route::get('Contract-details/{order_name}/{order_no}', 'ProviderController@contract_details')->name('Contract-details/{order_name}/{order_no}');
  
Route::get('Resolution/{order_name}/{order_no}', 'ProviderController@Resolution')->name('Resolution/{order_name}/{order_no}');
 
 Route::post('request_cancel/{order_no}/{buyer_id}', 'ProviderController@request_cancel')->name('request_cancel/{order_no}/{buyer_id}');
  
 Route::get('Add-Service', 'ProviderController@add_servce')->name('Add-Service');
   
 Route::post('make_service/', 'ProviderController@make_service')->name('make_service');
   
 Route::get('Gig-Details/{id}/{slug}', 'ProviderController@gig_details')->name('Gig-Details/{id}/{slug}');

 Route::get('delete_gigs/{id}', 'ProviderController@delete_gigs')->name('delete_gigs');

Route::get('Edit-Gig/{id}', 'ProviderController@edit_gig')->name('Edit-Gig/{id}');


Route::get('cancel_contract_approval/{order_no}', 'ClientController@cancel_contract_approval')->name('cancel_contract_approval/{order_no}');


Route::post('edit_save/{id}', 'ProviderController@edit_save')->name('edit_save/{id}');


 Route::get('Inbox', 'ProviderController@inbox')->name('Inbox');
 
Route::get('Earnings', 'ProviderController@earnings')->name('Earnings');
 

Route::get('Conversation/{id}/{name_slug}', 'ProviderController@conversation')->name('Conversation/{id}/{name_slug}');
 

Route::post('invitation', 'ProviderController@invitation')->name('invitation');
 

  Route::get('Invite', 'ProviderController@Invite')->name('Invite');
 
  
   Route::get('Work-Diary', 'ProviderController@work_diary')->name('Work-Diary');
    Route::get('update_profilee','ProviderController@update_profilee');
   Route::post('update_profile/{id}','ProviderController@update_profile');
  
   Route::post('vehicle_details/{id}','ProviderController@vehicle_details');
    Route::post('send_support_message','ProviderController@send_support_message')->name('send_support_message');
    
    Route::get('addvechicle','ProviderController@addvechicle');
    
    Route::get('Edit-Vehicle/{id}','ProviderController@vehicle_edit_view');
    Route::post('vechicle_update/{id}','ProviderController@vechicle_update');
    Route::get('delete_vehicle/{id}','ProviderController@delete_vehicle');
    Route::get('My-Bids','ProviderController@my_bids');
});
 
});
//Admin routes

Route::prefix('Admin')->group(function (){

Route::post('send_notification/{id}', 'AdminController@send_notification')->name('send_notification/{id}');

Route::get('/Prodiver-Payout/{id}', 'AdminController@provider_payout_details')->name('/Prodiver-Payout/{id}');

Route::get('Gig-Details/{id}','AdminController@gig_details');

Route::get('All-Services','AdminController@all_services');

Route::get('delete_service/{id}','AdminController@delete_service');

Route::get('Service-Edit/{id}','AdminController@service_edit');

Route::post('edit_service/{id}','AdminController@edit_service');

Route::get('/featured_seller/{id}', 'AdminController@featured_seller')->name('/featured_seller/{id}');

Route::get('All-Gigs','AdminController@all_gigs');

Route::get('gig_suspend/{id}','AdminController@gig_suspend')->name('/gig_suspend/{id}');

Route::get('/All-buyer-request', 'AdminController@all_request')->name('/All-buyer-request');

Route::get('/Create-Tag', 'AdminController@make_tag_form')->name('/make_tag_form');
Route::post('save_tag', 'AdminController@save_tag')->name('/save_tag');



Route::get('/accepts_req/{id}', 'AdminController@accepts_req')->name('/accepts_req/{id}');



Route::get('/', 'AdminController@index')->name('/');
Route::get('User-Manage', 'AdminController@user_manage')->name('User-Manage');
Route::get('User-Details/{id}', 'AdminController@user_details')->name('User-Details/{id}');
Route::get('user_suspend/{id}', 'AdminController@user_suspend')->name('user_suspend/{id}');
Route::get('active_user/{id}', 'AdminController@active_user')->name('active_user/{id}');

Route::get('Invoice-List', 'AdminController@invoice_list')->name('Invoice-List');
Route::get('Invoice-details/{id}', 'AdminController@invoice_details')->name('Invoice-details/{id}');

Route::get('Support', 'AdminController@customor_support_front')->name('Support');

Route::get('Support/Conversation/{id}', 'AdminController@customor_support_front')->name('Support/Conversation/{id}');


Route::post('send_support_message/{id}', 'AdminController@send_support_message')->name('send_support_message/{id}');

Route::get('search_for_notification', 'AdminController@search_for_notification')->name('search_for_notification');

Route::get('Pending-payment-list', 'AdminController@pending_payment')->name('Pending-payment-list');
Route::get('pay_clear/{id}', 'AdminController@pay_clear')->name('pay_clear/{id}');

Route::get('Add-Admin', 'AdminController@add_admin')->name('Add-Admin');

Route::post('save_admin', 'AdminController@save_admin')->name('save_admin');

Route::get('suspend/{id}', 'AdminController@suspend')->name('suspend/{id}');

Route::get('active_admin/{id}', 'AdminController@active_admin')->name('active_admin/{id}');


Route::get('All-Admin', 'AdminController@all_admins')->name('All-Admin');

Route::get('Notification', 'AdminController@Notification')->name('Notification');


Route::get('Set-Referal-Bonus', 'AdminController@referal_bonus')->name('Set-Referal-Bonus');

Route::post('app_setting', 'AdminController@app_setting')->name('app_setting');
 
Route::post('filter_user', 'AdminController@filter_user')->name('filter_user');

Route::get('Gig-Approval','AdminController@gig_aproval');

Route::get('gig_active_by_admin/{id}','AdminController@gig_active_by_admin');

Route::get('cancel_contract/{id}', 'AdminController@cancel_contract')->name('cancel_contract/{id}');

Route::get('Payout', 'AdminController@payout')->name('Payout');

Route::get('Payout-Details/{id}', 'AdminController@payout_details')->name('Payout-Details/{id}');

Route::get('pay_cmplt/{id}/{buyer_id}/{invoice_id}', 'AdminController@pay_cmplt')->name('pay_cmplt/{id}/{buyer_id}/{invoice_id}');
 
});

// Blog routes
Route::prefix('Blog')->group(function (){

Route::get('All-Blogs', 'AdminController@all_blogs')->name('All-Blogs');
Route::get('Blog-Edit/{id}', 'AdminController@blog_edit')->name('Blog-Edit/{id}');

Route::post('edit_save/{id}', 'AdminController@edit_save')->name('edit_save/{id}');
Route::get('Create/New', 'AdminController@create_blog')->name('Create/New');
Route::post('Create', 'AdminController@save_create_blog')->name('Create');

Route::get('blog_active/{id}', 'AdminController@blog_active')->name('blog_active/{id}');
Route::get('blog_deactive/{id}', 'AdminController@blog_deactive')->name('Bblog_deactive/{id}');


// Blog front display
Route::get('Blogs', 'HomeController@blogss');

Route::get('Blogs-Details/{id}/{slug}', 'HomeController@blog_detail');

});


// Clients route

 Route::group(["middleware" => ['auth', 'Client']], function () {
Route::get('Client', function () {

   return redirect('Client/Home');

  
});

Route::prefix('Client')->group(function (){
    
Route::get('Bookmark-Delete/{id}','ClientController@delete_favorite_gig');
    
Route::get('Favorite-Gigs','ClientController@favorite_gig');

Route::post('post_request_images','ClientController@post_request_images');

 Route::get('search_region', 'ClientController@search_region')->name('search_region');

Route::get('Home', 'ClientController@index')->name('Home');

 Route::get('Inbox', 'ClientController@inbox')->name('Inbox');
 
 Route::get('Post-Request', 'ClientController@request_post')->name('Post-Request');
 
 Route::post('request_publish', 'ClientController@request_publish')->name('request_publish');

 Route::get('All-Request', 'ClientController@all_requests')->name('All-Request');

 Route::get('Request-details/{id}', 'ClientController@request_details')->name('Request-details/{id}');

 Route::get('edit_profile','ClientController@edit_profile');
 
 Route::post('update_profile/{id}','ClientController@update_profile');
 
 Route::get('Blog', 'ClientController@blogs')->name('Blog');
 
 Route::get('Blog-Details/{id}/{slug}', 'ClientController@blog_details')->name('Blog-Details/{id}/{slug}');
 
 Route::post('post_comment/{id}', 'ClientController@post_comment')->name('post_comment/{id}');
 
 
  Route::get('accept_proposal/{id}/{user_id}', 'ClientController@accept_proposal')->name('accept_proposal/{id}/{user_id}');
 
 Route::get('My-Profile','ClientController@my_profile');
 
 Route::post('reply/{slug}', 'ClientController@reply')->name('reply/{slug}');
 
 
 Route::get('decline_dispute/{id}','ClientController@decline_dispute');

  Route::get('Conversation/{id}/{name_slug}', 'ClientController@conversation')->name('Conversation/{id}/{name_slug}');
 
  Route::post('send_message/{id}', 'ClientController@send_message')->name('send_message/{id}');
 
 Route::post('bank_detail_save', 'ProviderController@bank_detail_save')->name('bank_detail_save');
 
Route::get('All-Jobs', 'ClientController@all_jobs')->name('All-Jobs');
 

Route::post('send_contract_in_conversation/{id}', 'ClientController@send_contract_in_conversation')->name('send_contract_in_conversation/{id}');
 
Route::get('booksmarks/{id}', 'ClientController@booksmarks')->name('booksmarks/{id}');

Route::get('booksmarks_unsave/{id}', 'ClientController@booksmarks_unsave')->name('booksmarks_unsave/{id}');



Route::get('Contract-Payment/{user_id}/{contract_id}', 'ClientController@contract_payment')->name('Contract-Payment/{user_id}/{contract_id}');
 


Route::get('Notification', 'ClientController@notification')->name('Notification');

Route::get('Bank-Details', 'ClientController@bank_details')->name('Bank-Details');
 


Route::post('contract_payment_save/{user_id}/{contract_id}', 'ClientController@contract_payment_save')->name('contract_payment_save/{user_id}/{contract_id}');
 


 Route::get('Home', 'ClientController@index')->name('Home');


Route::post('send_support_message', 'ClientController@send_support_message')->name('send_support_message');
 


 Route::get('Searching-Services', 'ClientController@search_service')->name('Searching-Services');

  //Route::get('file_download/{id}', 'ClientController@file_download')->name('file_download/{id}');

 Route::get('Gig-Details/{id}/{gig_slug}', 'ClientController@gig_details')->name('Gig-Details/{id}/{gig_slug}');

Route::get('Contracts', 'ClientController@Contracts')->name('Contracts');

Route::get('Make-Contact', 'ClientController@make_contract')->name('Make-Contact');

Route::post('contract_save', 'ClientController@contract_save')->name('contract_save');

Route::get('Contract-details/{slug}/{order_no}', 'ClientController@contract_details')->name('Contract-details/{slug}/{order_no}');




Route::post('send_contract_in_conversation/{id}', 'ClientController@send_contract_in_conversation')->name('send_contract_in_conversation/{id}');




  
Route::get('Resolution/{order_name}/{order_no}', 'ClientController@Resolution')->name('Resolution/{order_name}/{order_no}');
 
 Route::post('request_cancel/{order_no}/{buyer_id}', 'ClientController@request_cancel')->name('request_cancel/{order_no}/{buyer_id}');
  

Route::get('cancel_contract_approval/{order_no}', 'ClientController@cancel_contract_approval')->name('cancel_contract_approval/{order_no}');

Route::post('complete_contract_req/{order_no}', 'ClientController@complete_contract_req')->name('complete_contract_req/{order_no}');

Route::get('Provider-profile/{id}/{name}', 'ClientController@provider_profile')->name('Provider-profile/{id}/{name}');

Route::post('post_review/{order_no}/{seller_id}', 'ClientController@post_review')->name('post_review/{order_no}/{seller_id}');

Route::get('gig_reference/{id}','ClientController@gig_reference');


 
});
});