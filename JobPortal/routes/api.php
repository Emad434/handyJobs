<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();


});
Route::get('save_gigs/{id}/{user_id}','ApiController@save_gigs');
Route::get('booksmarks_unsave/{id}/{user_id}','ApiController@booksmarks_unsave');
Route::get('gig_list/{user_id}','ApiController@gig_list');

 Route::get('decline_dispute/{id}','ApiController@decline_dispute');
 
 Route::get('accept_dispute/{id}','ApiController@accept_dispute');

Route::post('topup_wallet/{id}', 'ApiController@topup_wallet');

Route::post('send_app_token', 'ApiController@send_app_token');

Route::post('send_message_api/{id}/{receiver}', 'ApiController@send_message_api')->name('send_message_api/{id}/{receiver}');

Route::get('earning_api/{id}','ApiController@earning_api');


Route::get('earning_filer/{id}','ApiController@earning_filer');

Route::get('calender_api/{id}','ApiController@calender_api');


Route::get('completed_contracts/{id}','ApiController@completed_contracts');


Route::post('payment_test', 'HomeController@payment_test')->name('payment_test');
Route::post('login_api', 'ApiController@login_api');
Route::post('signup_api','ApiController@signup_api');
Route::post('SocialLoginClient', 'ApiController@SocialLoginClient');
Route::post('search_service_api','ApiController@search_service_api');
Route::get('home_detail_api','ApiController@home_detail_api');
Route::get('category/{id}','ApiController@category');
Route::post('bankdetails_api/{id}','ApiController@bankdetails_api');
Route::get('contracts_detail_api/{user_id}','ApiController@contracts_detail_api');
Route::post('make_contract_api/{id}','ApiController@make_contract_api');
Route::get('my_gigs/{id}','ApiController@my_gigs');
Route::get('contract_description/{id}','ApiController@contract_description');
Route::get('bank_details_get_api/{id}','ApiController@bank_details_get_api');
Route::post('make_service/{id}','ApiController@make_service');
Route::post('refer_friend_api/{id}','ApiController@refer_friend_api');
Route::get('earnings/{id}','ApiController@earnings');
Route::get('conversation_get_api/{sender_id}','ApiController@conversation_get_api');
Route::get('region','ApiController@region');
Route::post('forgot_password','ApiController@forgot_password');
Route::post('reset_password_api/{id}', 'ApiController@reset_password_api');
Route::post('reset_code_compare', 'ApiController@reset_code_compare')->name('reset_code_compare');
Route::post('edit_gig/{id}','ApiController@edit_gig');
Route::get('gig_get_api/{id}','ApiController@gig_get_api');
Route::get('services','ApiController@services');


Route::get('service_details/{id}','ApiController@service_details');

Route::get('provider_profile/{user_id}','ApiController@provider_profile');

Route::post('edit_profile_client_api/{id}','ApiController@edit_profile_client_api');
Route::post('provider_edit_profile/{id}','ApiController@provider_edit_profile');
Route::post('vehical_details_api/{id}','ApiController@vehical_details_api');
Route::post('lience_details/{id}','ApiController@lience_details');

Route::get('view_lience_details/{user_id}','ApiController@view_lience_details');

Route::get('viewVehicles/{id}','ApiController@viewVehicles');

Route::get('provider_get_details_api/{id}','ApiController@provider_get_details_api');
Route::post('per_vehical_edit/{id}','ApiController@per_vehical_edit');
Route::get('delete_vehicle/{id}','ApiController@delete_vehicle');
Route::get('region_get','ApiController@region_get');
Route::post('request_publish_api/{user_id}','ApiController@request_publish_api');
Route::get('all_requests_api/{id}','ApiController@all_requests_api');
Route::get('request_details/{id}','ApiController@request_details');
Route::get('all_request_provider_api','ApiController@all_request_provider_api');
Route::get('purposal_detail_api/{id}','ApiController@purposal_detail_api');
Route::post('send_proposal/{id}/{user_id}','ApiController@send_proposal');

Route::get('request_detail_from_provider/{request_id}/{user_id}','ApiController@request_detail_from_provider');
Route::get('provider_propasal_details/{user_id}','ApiController@provider_propasal_details');
Route::get('provider_wallet/{user_id}','ApiController@provider_wallet');
Route::get('proposal_details_provider/{id}','ApiController@proposal_details_provider');
Route::get('accept_proposal/{id}/{user_id}/{client_id}','ApiController@accept_proposal');
Route::get('active_transportation/{user_id}','ApiController@active_transportation');
Route::get('gig_reference/{user_id}','ApiController@gig_reference');
Route::get('getrefferal/{user_id}','ApiController@getrefferal');
Route::post('phone_verfication/{id}','ApiController@phone_verfication');
Route::post('confrimation_code/{id}','ApiController@confrimation_code');
Route::post('check_atthentication','ApiController@check_atthentication');
Route::post('social_signin','ApiController@social_signin');
Route::post('contract_payment_save/{contract_id}','ApiController@contract_payment_save');
Route::post('contract_approval/{id}','ApiController@contract_approval');
Route::post('contract_decline/{id}','ApiController@contract_decline');

Route::post('dispute_request/{id}','ApiController@dispute_request');
 








 