<?php

use App\Http\Controllers\Admin\AdminAllUserController;
use App\Http\Controllers\Admin\AdminDriverController;
use App\Http\Controllers\Admin\AdminFeedbackController;
use App\Http\Controllers\Admin\AdminKycController;
use App\Http\Controllers\Admin\AdminUserBlockUnblock;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminVehicleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Driver\DriverKycController;
use App\Http\Controllers\Driver\DriverPasswordController;
use App\Http\Controllers\Driver\DriverProfileController;
use App\Http\Controllers\Driver\DriverVehicleController;
use App\Http\Controllers\Driver\IndividualDriverController;
use App\Http\Controllers\Feedback\FeedbackController;
use App\Http\Controllers\User\IndividualUserController;
use App\Http\Controllers\User\UserCountController;
use App\Http\Controllers\User\UserProfileController;
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

// Start Auth
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/forgot-password', [PasswordResetController::class, 'forgotPassword']);
Route::post('/check-email-verification-code', [PasswordResetController::class, 'checkEmailVerificationCode']);
Route::post('/set-new-password', [PasswordResetController::class, 'setNewPassword']);
// End Auth

// Start Feedback
Route::post('/feedback', [FeedbackController::class, 'postFeedback']);
// End Feedback

// Start Admin
Route::post('/user-blocked/{id}', [AdminUserBlockUnblock::class, 'block']);
Route::post('/user-unblocked/{id}', [AdminUserBlockUnblock::class, 'unblock']);
Route::get('/get-users', [AdminUserController::class, 'getUsers']);
Route::get('/get-drivers', [AdminDriverController::class, 'getDrivers']);
Route::get('/get-feedbacks', [AdminFeedbackController::class, 'getFeedbacks']);
Route::get('/get-kycs', [AdminKycController::class, 'getKycs']);
Route::get('/get-vehicles', [AdminVehicleController::class, 'getVehicles']);
Route::get('/verify-kycs/{driver_id}', [AdminKycController::class, 'verifyKyc']);
Route::get('/unverify-kycs/{driver_id}', [AdminKycController::class, 'unverifyKyc']);
Route::post('/update-verify-status/{id}', [AdminKycController::class, 'updateVerifyStatus']);
Route::get('get-all-users', [AdminAllUserController::class, 'getAllUsers']);
// End Admin

// Start User
Route::get('/get-users-count', [UserCountController::class, 'getUserCount']);
Route::get('/get-drivers-count', [UserCountController::class, 'getDriverCount']);
Route::get('/get-verified-drivers-count', [UserCountController::class, 'getVerifiedDriverCount']);
// End User



Route::middleware('auth:sanctum')->group(function () {
    // individual driver details
    Route::get('/get-individual-driver-details', [IndividualDriverController::class, 'individualDriverDetails']);
    // individual user details
    Route::get('/get-individual-user-details', [IndividualUserController::class, 'individualUserDetails']);
    // logout
    Route::get('/logout', [AuthController::class, 'logout']);
    // add vehicle
    Route::post('/add-vehicle', [DriverVehicleController::class, 'addVehicle']);
    // update vehicle 
    Route::post('/update-vehicle/{id}', [DriverVehicleController::class, 'updateVehicle']);
    // delete vehicle 
    Route::get('/delete-vehicle/{id}', [DriverVehicleController::class, 'deleteVehicle']);
    // get myVehicle
    Route::get('/get-myvehicles', [DriverVehicleController::class, 'getMyVehicle']);
    // post kyc
    Route::post('/add-kyc', [DriverKycController::class, 'addKyc']);
    // update user profile 
    Route::post('/update-user-profile/{id}', [UserProfileController::class, 'updateUserProfile']);
    // update driver profile 
    Route::post('/update-driver-profile/{id}', [DriverProfileController::class, 'updateDriverProfile']);
    // notify kyc verify to driver
    Route::post('/notification/kyc-verified/{driverId}', [AdminNotificationController::class, 'sendKYCVerifiedNotification']);
    // driver password update
    Route::post('/update-driver-password', [DriverPasswordController::class, 'updateDriverPassword']);
});
