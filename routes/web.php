<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UserController;
use App\Models\Fact;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('index'); 
// });

Route::get('/', [FrontController::class,'index'])->name('home'); 

Route::get('/portfolio-detail', [FrontController::class,'portfoliodet']);

Route::get('/admin', function(){ 
    $user = User::all()->first(); 
    return view('admin.index', compact('user'));
})->name('admin.home');


// infos personnelles 
Route::get('/admin/show/infopers', [UserController::class,'index'])->name('ad.infop.show'); 
Route::get('/admin/edit/infopers', [UserController::class,'edit'])->name('ad.infop.edit'); 
Route::put('/admin/edit2/infopers', [UserController::class,'update'])->name('ad.infop.update'); 


/// section About 
Route::get('/admin/show/about', [AboutController::class,'index'])->name('ad.about.show');
Route::get('/admin/edit/about', [AboutController::class,'edit'])->name('ad.about.edit'); 
Route::post('/admin/edit2/about', [AboutController::class,'update'])->name('ad.about.update'); 


/// les facts 
Route::get('/admin/show/facts', [FactsController::class,'index'])->name('ad.facts.show'); 
Route::get('/admin/edit/facts', [FactsController::class,'edit'])->name('ad.facts.edit'); 
Route::post('/admin/edit2/facts', [FactsController::class,'update'])->name('ad.facts.update'); 


// portfolio 
// titre (portfolio)
Route::get('/admin/edit/portfoliotitle', [ProjectsController::class,'editTitre'])->name('ad.portfolio.edititle');
Route::post('/admin/edit2/portfolio', [ProjectsController::class,'updateTitre'])->name('ad.portfolio.et2'); 

// les projets
Route::get('/admin/show/projects', [ProjectsController::class,'index'])->name('ad.projects.show'); 
Route::get('/admin/edit/projects/{id}', [ProjectsController::class,'edit'])->name('ad.projects.edit'); 
Route::post('/admin/edit2/projects/{id}', [ProjectsController::class,'update'])->name('ad.projects.update');

Route::get('/admin/add/projects', [ProjectsController::class,'create'])->name('ad.projects.add'); 
Route::post('/admin/add2/projects', [ProjectsController::class,'store'])->name('ad.projects.add2'); 

Route::delete('/admin/destroy/projects/{id}', [ProjectsController::class, 'destroy'])->name('ad.projects.destroy');



//contact 

Route::get('/admin/show/contact', [ContactController::class,'index'])->name('ad.contact.show'); 
Route::get('/admin/edit/contact', [ContactController::class,'edit'])->name('ad.contact.edit');
Route::put('/admin/update/contact', [ContactController::class,'update'])->name('ad.contact.update');


// mailbox: 

Route::get('/admin/mailbox', [MailboxController::class,'index'])->name('ad.mailbox.show'); 

Route::get('/admin/mailbox/show/{id}', [MailboxController::class,'show'])->name('ad.mailbox.mailshow'); 

Route::post('/sendmail', [MailboxController::class,'store'])->name('ad.mailbox.send'); 








