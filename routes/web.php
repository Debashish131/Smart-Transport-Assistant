<?php

use App\vehicle_info;
use App\RegistrationForRC;
use App\Http\Controllers\SslCommerzPaymentController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/FAQ', 'GuideLineController@FAQ');
//Auth::routes();
// Authentication Routes...
Auth::routes(['verify' => true]);
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/404', 'GuideLineController@error');
Route::get('/profile', 'HomeController@profile');


//Admin
Route::namespace("Admin")->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::namespace('Auth')->group(function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('admin.logout');
    });
});


//User panel
//Route::get('/template', 'UserController@index');
Route::get('/dashboard', 'UserController@userDashboard');


//Complain Section strat
Route::get('/create_complain', 'ComplainController@addcomplain')->middleware('auth');
Route::post('/addcomplain', 'ComplainController@store')->middleware('auth');
Route::post('/updatecomplain{id}', 'ComplainController@update')->middleware('auth');
Route::get('/showcomplain', 'ComplainController@show')->middleware('auth');
Route::get('/editcomplain{id}', 'ComplainController@edit')->middleware('auth');
//Complain Section end


//Feedback section strart
Route::get('/feedback', 'FeedbackController@index')->middleware('auth');
Route::post('/storefeedback', 'FeedbackController@store')->middleware('auth');
//Feedback section end


//GuideLine
Route::get('/driving_guide', 'GuidelineController@drivingGuide')->middleware('auth');
//Guidline end


//Driving Licence
Route::get('/license', 'HomeController@license');


// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END


//penalty
Route::get('/penalty', 'PenaltyController@index');
Route::get('/checkout', 'PenaltyController@checkout');
Route::get('/invoice', 'PenaltyController@invoice');


//QR code
Route::get('qrcode', function () {

    \QrCode::size(500)
        ->format('png')
        ->generate('Smart transport Assistant.com', public_path('images/qrcode.png'));

    return view('qrCode');
});

//Route::get('qrcode/{username}', function ($username) {
//    return QrCode::size(300)->generate($username);
//});

Route::get('/qr', 'QrcodeController@qrcode')->middleware('auth');

Route::get('/emergency', 'EmergencyController@emHelp');
Route::post('/emergencyHelp', 'EmergencyController@storeEmergency');


//Registration Form
Route::get('/registration', 'RegistrationController@index')->middleware('auth');
Route::Post('/regRc', 'RegistrationController@store')->middleware('auth');
Route::get('/viewReg{id}', 'RegistrationController@viewForm')->middleware('auth');


//Vehicle Search
Route::get('/vehicle_search', 'VehicleSearchController@index')->middleware('auth');
Route::any('/search', function () {
    $vehicle_number_search = Request::get('vehicle_number_search');
    $vehicle = vehicle_info::where('Vehicle_number', 'LIKE', '%' . $vehicle_number_search . '%')
        ->orWhere('BRTAoffice', 'LIKE', '%' . $vehicle_number_search . '%')->get();

    if (count($vehicle) > 0)
        return view('User.VehicleDetails')->withDetails($vehicle)->withQuery($vehicle_number_search);
    else return view('User.VehicleDetails')->withMessage('No Details found. Try to search again !');
});
Route::get('/vehicleDetails', 'UservehicleController@showVehicle_details');


//admin section

Route::get('/userdetails', 'Admin\UserdetailsController@details');
Route::get('/deleteUser/{id}/delete', 'Admin\UserdetailsController@DeleteUserprofile');
Route::get('/uservehicledetails', 'Admin\UserdetailsController@uservehicledetails');
Route::get('/updateVehicle{id}', 'Admin\UserdetailsController@editVehicle');
Route::post('/updateVehicle/{id}update', 'Admin\UserdetailsController@updateVehicle');
Route::get('/allpayment', 'Admin\PaymentDetailsController@PaymentDetails');
Route::get('/deletepayment/{id}/delete', 'Admin\PaymentDetailsController@DeletePayment');
Route::get('/alluser', 'Admin\HomeController@alluser');
Route::get('/penaltyUser{id}', 'Admin\HomeController@givePenalty');
Route::post('/updatePenalty{id}', 'Admin\HomeController@updatePenalty');
Route::get('/feedbackUser', 'Admin\HomeController@feedbackUser');
Route::get('/DeleteUserprofile/{id}/delete', 'Admin\HomeController@DeleteUser');
Route::get('/penaltyuser', 'Admin\PenaltyController@penalty');
Route::get('/userEmergency', 'Admin\UserEmergencyController@userEmergency');
Route::get('/dltuserEmergency/{id}', 'Admin\UserEmergencyController@deleteEmergency');
Route::get('/appEm/{id}', 'Admin\UserEmergencyController@approvedEmergency');
Route::post('/emApprove/{id}', 'Admin\UserEmergencyController@approvedEmergency')->name('admin.em.approve');

//Admin Complain Section
Route::get('/allcomplain', 'Admin\ComplainController@viewComplain');
Route::get('/editcom{id}', 'Admin\ComplainController@editComplain');
Route::get('/deleteCom/{id}/delete', 'Admin\ComplainController@deleteComplain');
Route::post('/updatecom/{id}', 'Admin\ComplainController@updateComplain');
Route::get('/approve/{id}', 'Admin\ComplainController@approved_action');
Route::post('/approve/{id}', 'Admin\ComplainController@approved_action')->name('admin.post.approve');

Route::get('/updateApplication{id}', 'Admin\UserdetailsController@editApplication');
Route::post('/updateApplication/{id}', 'Admin\UserdetailsController@updateApplication');
Route::get('/licenseApprove{id}', 'Admin\UserdetailsController@licenseApprove');
Route::post('/licenseApprove{id}', 'Admin\UserdetailsController@licenseApprove');


//Admin Penalty Section

Route::get('/userPenalty', 'PenaltyController@penaltyUser');
Route::get('/penaltyAmount', 'Admin\UserdetailsController@penalty');

//Admin vehicle Search

Route::get('/VehicleSearch', 'Admin\UserdetailsController@search')->middleware('auth:admin');
Route::any('/searchVehicle', function () {
    $vehicle_number_search = Request::get('vehicle_number_search');
    $vehicle = vehicle_info::where('Vehicle_number', 'LIKE', '%' . $vehicle_number_search . '%')
        ->orWhere('BRTAoffice', 'LIKE', '%' . $vehicle_number_search . '%')->get();

    if (count($vehicle) > 0)
        return view('admin.vehicleSearch')->withDetails($vehicle)->withQuery($vehicle_number_search);
    else return view('admin.vehicleSearch')->withMessage('No Details found. Try to search again !');
})->middleware('auth:admin');
//Admin vehicle renew
Route::get('/userRenew', 'Admin\VehicleRenewController@index');
Route::get('/userRenewDelete{id}', 'Admin\VehicleRenewController@deleteRenew');


//Downloaded file form
Route::get('/download', function () {
    $file = public_path() . "/DL_form.pdf";
    $headers = array(
        'Content-type: Application/pdf',
    );
    return Response::download($file, "DL form.pdf", $headers);
});
Route::get('/download2', function () {
    $file = public_path() . "/learner_card.pdf";
    $headers = array(
        'Content-type: Application/pdf',
    );
    return Response::download($file, "Learner Card.pdf", $headers);
});


//Field Officer

Route::namespace("Officer")->prefix('officer')->group(function () {
    Route::get('/', 'HomeController@index')->name('officer.home');
    Route::namespace('Auth')->group(function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('officer.login');
        Route::post('/login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('officer.logout');
    });
});

Route::get('/usercomplain_details', 'Officer\ComplainController@complain');
Route::get('/officereditcom{id}', 'Officer\ComplainController@offiereditComplain');
Route::post('/updateComplainOfficer/{id}', 'Officer\ComplainController@updateComplainOfficer');
Route::get('/approveByOfficer/{id}', 'Officer\ComplainController@approvedByofficer');
Route::post('/approveByOfficer/{id}', 'Officer\ComplainController@approvedByofficer');
Route::get('/emergencyList', 'Officer\EmergencyVerifyController@userEmergency');
Route::get('/emergenyDelete/{id}', 'Officer\EmergencyVerifyController@emergenyDelete');
Route::get('/emergencyApprove/{id}', 'Officer\EmergencyVerifyController@officerApprove');
Route::post('/emergencyApprove/{id}', 'Officer\EmergencyVerifyController@officerApprove')->name('officer.em.approve');

Route::get('/renew', 'renewControlller@index')->middleware('auth');
Route::post('/applyRenew', 'renewControlller@renewApplication');

