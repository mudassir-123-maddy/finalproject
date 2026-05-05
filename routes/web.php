<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MainController::class,'index']);
Route::get('dashbord', [MainController::class, 'Dashbord'])->name('dashbord');
Route::get('analytics', [MainController::class, 'Analytic'])->name('analysis');
Route::get('ecomerce',[MainController::class,'ecom'])->name('ecomerce');
Route::get('CRM',[MainController::class,'crm'])->name('crmpage');
Route::get('Saas',[MainController::class,'Saas'])->name('Saas');
Route::get('chart',[MainController::class,'charts'])->name('charts');
Route::get('orders',[MainController::class,'order'])->name('orders');
Route::get('all',[MainController::class,'all'])->name('all');
Route::get('products',[MainController::class,'products'])->name('product');
Route::get('customer',[MainController::class,'customers'])->name('customer');
Route::get('invoice',[MainController::class,'invoices'])->name('invoice');
Route::get('mails',[MainController::class,'mail'])->name('mail');
Route::get('chat',[MainController::class,'chats'])->name('chats');
Route::get('files',[MainController::class,'file'])->name('file');
Route::get('kanban',[MainController::class,'kanban'])->name('kanban');
Route::get('calender',[MainController::class,'calenders'])->name('calender');
Route::get('wizard',[MainController::class,'wizards'])->name('wiz');
Route::get('form',[MainController::class,'forms'])->name('form');
Route::get('roadmap',[MainController::class,'roadmaps'])->name('roadmap');
Route::get('feature',[MainController::class,'features'])->name('feature');
Route::get('deployment',[MainController::class,'deployments'])->name('deployments');
Route::get('activity',[MainController::class,'activities'])->name('activity');
Route::get('feedback',[MainController::class,'feedbacks'])->name('feedback');