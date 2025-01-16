<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend.index');
    })->name('home');

Route::get('/service-details', function () {
    return view('frontend.service-details');
})->name('service-details');

Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('about-us');

Route::get('/visa-details', function () {
    return view('frontend.service-details');
})->name('service-details');

Route::get('/success-stories', function () {
    return view('frontend.success-stories');
})->name('success-stories');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
})->name('contact-us');

Route::get('/FAQ', function () {
    return view('frontend.faq');
})->name('faq');


//----------------- services ------------------------

Route::get('/work-visa', function () {
    return view('frontend.services.work-visa');
})->name('work-visa');
Route::get('/family-visa', function () {
    return view('frontend.services.family-visa');
})->name('family-visa');
Route::get('/study-visa', function () {
    return view('frontend.services.study-visa');
})->name('study-visa');
Route::get('/business-visa', function () {
    return view('frontend.services.business-visa');
})->name('business-visa');
Route::get('/asylum', function () {
    return view('frontend.services.asylum');
})->name('asylum');

//---------------------------

Route::fallback(function () {
    return view('errors.404');
});

Route::post('contact/mail/send', [\App\Http\Controllers\Front\FrontendController::class, 'sendMail'])->name('contact.mail');

