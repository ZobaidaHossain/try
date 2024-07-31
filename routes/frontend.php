

<?php

use App\Http\Controllers\javascriptController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;


route::get('/',[TemplateController::class, 'index'])->name('home');

route::get('/testimonial',[TestimonialController::class, 'index'])->name('testimonial');

route::get('/javascript',[javascriptController::class, 'index'])->name('javascript');
?>
