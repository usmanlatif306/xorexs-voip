<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WebsiteController;
use App\Http\Livewire\Website\About;
use App\Http\Livewire\Website\Homepage;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [WebsiteController::class, 'home'])->name('homepage');
Route::get('about-us', [WebsiteController::class, 'about'])->name('about_page');
Route::get('services', [WebsiteController::class, 'services'])->name('services_page');
Route::get('contact', [ContactController::class, 'index'])->name('contact_page');
Route::post('contact', [ContactController::class, 'send'])->name('send_message');
Route::get('faqs', [WebsiteController::class, 'faqs'])->name('faq_page');
Route::get('how-it-works', [WebsiteController::class, 'works'])->name('work_page');

Route::post('save-order', [OrderController::class, 'saveOrder'])->name('order.save');
Route::post('order/city', [OrderController::class, 'orderCity'])->name('order.city');
Route::delete('/delete-order/{order}', [OrderController::class, 'deleteOrder'])->name('order.delete');

// voip user routes
require __DIR__ . '/voip.php';

// admin routes
require __DIR__ . '/admin.php';
