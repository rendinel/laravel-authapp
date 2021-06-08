<?php
use App\Http\Controllers\TestEnrollmentController;
use App\Http\Controllers\EmailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
Auth::routes();

Route::get('/private', [HomeController::class, 'private']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route for mail
// Route::get('/email', function() {
//     Mail::to('info@darynazar.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });

// route mail attachment
Route::get('/email', [EmailsController::class, 'email']);


// route notifications
Route::get('/send-testenrollment', [TestEnrollmentController::class, 'sendTestNotification']);