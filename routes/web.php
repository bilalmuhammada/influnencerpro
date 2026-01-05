<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController as UserAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfluencerController;
use App\Http\Controllers\VendorController;
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


Route::get('chats/invited-influencers/', [\App\Http\Controllers\ChatController::class, 'invitedInfluencer']);
Route::get('/chats/', [\App\Http\Controllers\ChatController::class, 'index']);
Route::post('/chat/favorite', [\App\Http\Controllers\ChatController::class, 'toggleFavorite'])->name('chat.favorite');
Route::post('/chat/block', [\App\Http\Controllers\ChatController::class, 'toggleBlock'])->name('chat.block');


Route::get('/register', [UserAuthController::class, 'register']);
Route::get('/login', [UserAuthController::class, 'login'])->name('login');
Route::get('/subscriptions', [\App\Http\Controllers\GeneralController::class, 'subscription']);
Route::get('/influncersubscriptions', [\App\Http\Controllers\GeneralController::class, 'influncersubscription']);


Route::get('/checkout',  [\App\Http\Controllers\GeneralController::class, 'checkout'])->name('checkout');
Route::post('/session',  [\App\Http\Controllers\GeneralController::class, 'session'])->name('session');
Route::get('/success',  [\App\Http\Controllers\GeneralController::class, 'success'])->name('success');

Route::get('/forgot-password', [UserAuthController::class, 'forgotPassword']);
Route::get('/reset/{reset_password_token}', [UserAuthController::class, 'reset']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->middleware('checkUser');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->middleware('checkUser');
Route::get('/account-setting', [UserAuthController::class, 'vendorAccountSetting'])->middleware('checkUser:vendor,influencer');
Route::get('/contact-us', [\App\Http\Controllers\ContactUsController::class, 'index']);
Route::get('/notifications', [\App\Http\Controllers\NotificationController::class, 'index']);
Route::post('/notifications/{id}/mark-as-read', [\App\Http\Controllers\NotificationController::class, 'markAsRead'])->name('notifications.mark-as-read');
Route::post('/notifications/{id}/delete', [\App\Http\Controllers\NotificationController::class, 'destroy'])->name('notifications.delete');

Route::prefix('/category')->group(function () {
    Route::get('/{id}/influencers', [\App\Http\Controllers\UserController::class, 'index']);
});

Route::prefix('/influencer')->middleware(['checkLogin'])->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('checkUser:influencer');
    Route::get('/account-setting', [UserAuthController::class, 'accountSetting'])->middleware('checkUser:vendor,influencer');
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('checkUser:influencer');
    Route::get('/complete-profile', [UserAuthController::class, 'completeProfile'])->middleware('checkUser:influencer');
    Route::get('/change-old-password', [UserAuthController::class, 'changeOldPassword'])->middleware('checkUser:vendor,influencer');
});
Route::group(['middleware' => 'auth.ensure'], function () {
    Route::delete('influencer/image/delete/{id}', [\App\Http\Controllers\UserController::class, 'deleteImage'])->name('influencer.image.delete');
    Route::get('influencers/{id}/public-profile', [\App\Http\Controllers\UserController::class, 'detail']);
});

Route::prefix('/reports')->middleware(['checkUser:vendor,influencer', 'checkLogin'])->group(function () {
    Route::get('/transaction-history', [\App\Http\Controllers\ReportController::class, 'transactionHistory']);
    Route::get('/my-reports', [\App\Http\Controllers\ReportController::class, 'myReports']);
    Route::get('/vendors-earning', [\App\Http\Controllers\ReportController::class, 'vendorsEarning']);
    Route::get('/influencer-earning', [\App\Http\Controllers\ReportController::class, 'influencerEarning']);
});


Route::get('/verify-otp', [UserAuthController::class, 'otpIndex'])->name('verify.otp');
Route::post('/verify-otp', [UserAuthController::class, 'verify'])->name('verify.otp.post');
Route::get('/resend-otp', [UserAuthController::class, 'resend'])->name('resend.otp');


Route::get('/download-csv', [\App\Http\Controllers\CsvController::class, 'downloadCsv']);
Route::get('/download-csv-favourite-influencer', [\App\Http\Controllers\CsvController::class, 'downloadCsvFavouriteInfluencer']);

Route::get('/contracts', [\App\Http\Controllers\ContractController::class, 'index']);

Route::prefix('/vendor')->middleware(['checkUser:vendor', 'checkLogin'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\UserController::class, 'index']);
    Route::get('/favourite-influencers', [\App\Http\Controllers\UserController::class, 'favouriteInfluencers']);
    Route::get('/influencers-filter', [\App\Http\Controllers\UserController::class, 'filter']);
});

Route::prefix('/influencers')->middleware(['checkUser:vendor', 'checkLogin'])->group(function () {
    Route::get('/{id}/detail', [\App\Http\Controllers\UserController::class, 'detail']);
});



//Route::get('/dashboard-messages', function () {
//    return view('vendor-dashboard.messages');
//});


Route::get('/dashboard-influencer-detail', function () {
    return view('vendor-dashboard.influencer-detail');
});

Route::get('/vendor-dashboard-settings', function () {
    return view('vendor-dashboard.settings');
});
Route::get('/privacy-policy', function () {
    return view('auth.privacy-policy');
});

Route::get('/termcondition', function () {
    return view('auth.termcondition');
});

Route::get('/dashboard-vendor-profile', function () {
    return view('vendor-dashboard.vendor-profile');
});


// influencer dashboard

Route::get('/influencer-dashboard', function () {
    return view('influencer-dashboard.home');
});


Route::get('/influencer-messages', function () {
    return view('influencer-dashboard.messages');
});


Route::get('/influencer-transaction-history', function () {
    return view('influencer-dashboard.transaction-history');
});


Route::get('/influencer-contracts', function () {
    return view('influencer-dashboard.my-contracts');
});


Route::get('/dashboard-influencer-detail', function () {
    return view('influencer-dashboard.influencer-detail');
});


Route::get('/dashboard-settings', function () {
    return view('influencer-dashboard.settings');
});

Route::get('/influencer-my-reports', function () {
    return view('influencer-dashboard.my-reports');
});

Route::get('/influencer-influencer-earning', function () {
    return view('influencer-dashboard.influencer-earning');
});

Route::get('/dashboard-influencer-profile', function () {
    return view('influencer-dashboard.profile');
});



// admin route


Route::prefix('/admins-dashboard')->group(function () {
    Route::get('/', [UserAuthController::class, 'index']);

    Route::get('/login', [UserAuthController::class, 'index']);
    Route::get('/edit-profile', [UserAuthController::class, 'editProfile']);
    Route::get('/forgot-password', [UserAuthController::class, 'forgotPassword']);
    Route::get('/reset/{password_reset_code}', [UserAuthController::class, 'checkForgotPasswordCode']);

    Route::get('/privacy-policy', function () {
        return view('auth.privacy-policy');
    });

    Route::get('/contact-us', [\App\Http\Controllers\Usercontroller::class, 'contactForm']);

    Route::get('/termcondition', function () {
        return view('auth.termcondition');
    });


    Route::middleware('auth_check')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);

        Route::prefix('/admins')->group(function () {
            Route::get('/', [AdminController::class, 'indexadmin']);
            Route::get('/create', [AdminController::class, 'create']);
        });
        Route::prefix('/categories')->group(function () {
            Route::get('/', [CategoryController::class, 'index']);
        });

        Route::prefix('/vendors')->group(function () {
            Route::get('/', [VendorController::class, 'index']);
            Route::get('/create', [VendorController::class, 'create']);
            Route::get('/transactions', [VendorController::class, 'transactions']);
            Route::get('/reviews', [VendorController::class, 'reviews']);
        });

        Route::prefix('/influencers')->group(function () {
            Route::get('/', [InfluencerController::class, 'index']);
            Route::get('/create', [InfluencerController::class, 'create']);
            Route::get('/transactions', [InfluencerController::class, 'transactions']);
            Route::get('/reviews', [InfluencerController::class, 'reviews']);
        });

        Route::get('/faqs', function () {
            return view('faq')->with(['menu' => 'faqs']);
        });

        Route::get('/change-password', [UserAuthController::class, 'resetPassword']);
    });
});

// end route