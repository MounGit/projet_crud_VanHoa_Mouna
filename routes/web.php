<?php

use App\Http\Controllers\BlogBackController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeBackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioBackController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//BACK OFFICE 

Route::get('/admin/backoffice/home', [HomeBackController::class, 'index'])->name('backH');

//BACK OFFICE PORTFOLIO

Route::get('/admin/backoffice/portfolio', [PortfolioBackController::class, 'index'])->name('backP');

Route::get('/admin/backoffice/portfolio/create', [PortfolioBackController::class, 'create'])->name('backPC');

Route::post('/portfolio/change', [PortfolioBackController::class, 'store']);

Route::post('/portfolio/{id}/delete', [PortfolioBackController::class, 'destroy'])->name('delete');

Route::get('/portfolio/{id}/show', [PortfolioBackController::class, 'show'])->name('show');

Route::get('/portfolio/{id}/edit', [PortfolioBackController::class, 'edit'])->name('edit');

Route::put('/portfolio/{id}/update', [PortfolioBackController::class, 'update'])->name('update');

//BACK OFFICE BLOG

Route::get('/admin/backoffice/blog', [BlogBackController::class, 'index'])->name('backB');

Route::get('/admin/backoffice/blog/create',[BlogBackController::class,'create'])->name('backblogcreate');

Route::post('/blog/{id}/delete',[BlogBackController::class,'destroy'])->name('deleteBlog');

Route::post('/blog/change',[BlogBackController::class,'store']);


