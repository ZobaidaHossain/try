<?php

use App\Http\Controllers\javascriptController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TestimonialController;
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
    return view('welcome');
});

route::get('/',[TemplateController::class, 'index'])->name('frontend.home');

route::get('/testimonial',[TestimonialController::class, 'index'])->name('frontend.testimonial');

route::get('/javascript',[javascriptController::class, 'index'])->name('frontend.javascript');