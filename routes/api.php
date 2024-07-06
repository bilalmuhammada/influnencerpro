<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MobileApiController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/auth')->group(function () {
    Route::post("/register", [AuthController::class, 'registerBackend']);
    Route::post("/login", [AuthController::class, 'loginBackend']);
});

Route::post("/logout", [AuthController::class, 'logout']);

Route::post('/upload-file', [\App\Http\Controllers\GeneralController::class, 'uploadFileSendFromAdminPanel']);

Route::post('/forgot-password-check', [\App\Http\Controllers\AuthController::class, 'forgotPasswordCheck']);
Route::post('/reset-code-check', [\App\Http\Controllers\AuthController::class, 'resetPasswordCodeCheck']);// for mobile api
Route::post('/reset-password', [\App\Http\Controllers\AuthController::class, 'resetPassword']);

Route::post("/contact-us", [ContactUsController::class, 'store']);

Route::get("/categories", [MobileApiController::class, 'getAllCategories']);

Route::get("/get-countries", \App\Http\Controllers\GeneralController::class . '@getCountries');
Route::get("/get-states-by-multi-nationality", \App\Http\Controllers\GeneralController::class . '@getStatesByMultiSelectNationality');
Route::post("/get-states-by-nationality", \App\Http\Controllers\GeneralController::class . '@getStatesByNationality');
Route::post("/get-cities-by-state", \App\Http\Controllers\GeneralController::class . '@getCitiesByState');
Route::post("/get-cities-by-country", \App\Http\Controllers\GeneralController::class . '@getCitiesByCountry');


Route::post('chats/send-request/{user_id}', [\App\Http\Controllers\ChatController::class, 'initiateChat']);
Route::post('chats/status-update', [\App\Http\Controllers\ChatController::class, 'statusUpdate']);
Route::post('chats/accept-or-reject', [\App\Http\Controllers\ChatController::class, 'acceptOrRejectChat']);
Route::post('chats/send-chat-request', [\App\Http\Controllers\ChatController::class, 'initiateChat']);
Route::post('chats/send-message', [\App\Http\Controllers\ChatController::class, 'sendMessage']);
Route::get('chats/get-new-messages', [\App\Http\Controllers\ChatController::class, 'getNewMessages']);
Route::post('chats/mark-as-read', [\App\Http\Controllers\ChatController::class, 'markMessagesAsRead']);
Route::post('chats/mark-as-read-all', [\App\Http\Controllers\ChatController::class, 'markMessagesAsReadAll']);
Route::post('chats/delete-chats', [\App\Http\Controllers\ChatController::class, 'deleteChats']);

Route::get("/paginated-influencers", [UserController::class, 'getPaginatedInfluencers']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get("get-data-for-dashboard", [\App\Http\Controllers\AdminController::class, 'getDataFroDashboard']);
    Route::post("auth/complete-profile", [AuthController::class, 'completeProfileBackend']);
    Route::post("auth/complete-profile-web", [AuthController::class, 'completeProfileBackendForWeb']);
    Route::post("auth/logout", [AuthController::class, 'logout']);
    Route::post("auth/account-setting-update", [AuthController::class, 'accountSettingUpdate']);
    Route::post("auth/vendor-account-setting-update", [AuthController::class, 'vendorAccountSettingUpdateBackend']);
    Route::post("auth/update-password", [AuthController::class, 'updatePassword']);

    Route::prefix('/brands')->group(function () {
        Route::post("/", [UserController::class, 'brands']);
        Route::post("/profile-edit", [AuthController::class, 'brandProfileEditBackend']);
    });

    Route::prefix('/categories')->group(function () {
        Route::post("/influencers", [MobileApiController::class, 'getInfluencesByCategory']);
    });

    Route::prefix('/reports')->group(function () {
        Route::post("/earning", [\App\Http\Controllers\ReportController::class, 'earning']);
        Route::post("/earning-chart", [\App\Http\Controllers\ReportController::class, 'earningChart']);
    });

    Route::post("/transactions/{id}/delete", [\App\Http\Controllers\ReportController::class, 'transactionDelete']);
    Route::post("/transactions/multi-delete", [\App\Http\Controllers\ReportController::class, 'transactionMultiDelete']);

    Route::prefix('influencers/')->group(function () {
        Route::post("/", [UserController::class, 'influencers']);
        Route::post("chat-status", [UserController::class, 'chatStatus']);
        Route::post('add-to-favourites', [UserController::class, 'addToFavourites']);
        Route::post('remove-profile-image', [AuthController::class, 'removeProfileImage']);
        Route::post('remove-from-favourites', [UserController::class, 'removeFromFavourites']);
        Route::post("detail", [MobileApiController::class, 'detail']);
        Route::post("filter", [MobileApiController::class, 'influencersFilter']);
        Route::post("search-by-name", [UserController::class, 'searchByName']);
        Route::post("update-address", [MobileApiController::class, 'updateAddress']);
        Route::post("update-social-media-accounts", [MobileApiController::class, 'updateSocialMediaAccounts']);
    });


    Route::prefix('app/')->group(function () {
        Route::prefix('chats/')->group(function () {
            Route::post('get-users-for-chat', [\App\Http\Controllers\ChatController::class, 'getAcceptedUserForChat']);
            Route::post('send-request/{user_id}', [\App\Http\Controllers\ChatController::class, 'initiateChat']);
            Route::post('accept-or-reject', [\App\Http\Controllers\ChatController::class, 'acceptOrRejectChat']);
            Route::post('send-chat-request', [\App\Http\Controllers\ChatController::class, 'initiateChat']);
            Route::post('send-message', [\App\Http\Controllers\ChatController::class, 'sendMessage']);
            Route::get('get-new-messages', [\App\Http\Controllers\ChatController::class, 'getNewMessages']);
            Route::post('mark-as-read', [\App\Http\Controllers\ChatController::class, 'markMessagesAsRead']);
        });
    });
});

