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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Contact-Us', 'Controller@contact')->name('contact');
Route::get('/About-Us', 'Controller@about')->name('about us');
Route::get('/Company-history', 'Controller@company')->name('Company history');
Route::get('/why-us', 'Controller@whyUs')->name('why choose us');
Route::get('/computer-Sytem-installation', 'Controller@computerSytem')->name('computer systems');
Route::get('/Security-Surveillance-Systems', 'Controller@securitySurvillance')->name('security systems');
Route::get('/Network-installation', 'Controller@networkInstallation')->name('Network installation');
Route::get('/Computer-accessories-supplies', 'Controller@computerAccessories')->name('computer accessories');
Route::get('/General-Office-Supplies', 'Controller@generalOffice')->name('general office supplies');
Route::get('/Support-Consultancy', 'Controller@support')->name('support');
Route::get('/Our-Portfolio', 'Controller@portfolio')->name('portfolio');
Route::get('/Our-Blogs', 'Controller@blog')->name('portfolio');
Route::get('/Our-Faq', 'Controller@faq')->name('portfolio');
Route::get('/Careers', 'Controller@careers')->name('portfolio');
Route::post('/contacts', 'Controller@send')->name('portfolio');
