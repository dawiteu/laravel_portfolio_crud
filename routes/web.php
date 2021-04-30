<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\UserController;
use App\Models\Fact;
use App\Models\Page;
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
    $pages = Page::all(); 
    return view('admin.index', compact('user', 'pages'));
})->name('admin.home');

//pages 

Route::get('/admin/pages/edit/{id}', [PagesController::class,'edit'])->name('ad.pages.edit');
Route::put('/admin/update/page/{id}', [PagesController::class,'update'])->name('ad.pages.update');


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
Route::get('/admin/edit/facts/{id}', [FactsController::class,'edit'])->name('ad.facts.edit'); 
Route::post('/admin/edit2/facts/{id}', [FactsController::class,'update'])->name('ad.facts.update'); 

//skills 

Route::get('/admin/show/skills', [SkillsController::class, 'index'])->name('ad.skills.show'); 
Route::get('/admin/edit/skills/{id}', [SkillsController::class,'edit'])->name('ad.skills.edit'); 
Route::put('/admin/update/skills/{id}', [SkillsController::class,'update'])->name('ad.skills.update'); 

Route::get('/admin/add/skills', [SkillsController::class,'create'])->name('ad.skills.add'); 
Route::post('/admin/add2/skills', [SkillsController::class,'store'])->name('ad.skills.store'); 

Route::delete('/admin/delete/skills/{id}', [SkillsController::class,'destroy'])->name('ad.skills.destroy'); 
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
Route::get('/admin/edit/contact/{id}', [ContactController::class,'edit'])->name('ad.contact.edit');
Route::put('/admin/update/contact/{id}', [ContactController::class,'update'])->name('ad.contact.update');


// mailbox: 

Route::get('/admin/mailbox', [MailboxController::class,'index'])->name('ad.mailbox.show'); 

Route::get('/admin/mailbox/show/{id}', [MailboxController::class,'show'])->name('ad.mailbox.mailshow'); 

Route::post('/sendmail', [MailboxController::class,'store'])->name('ad.mailbox.send'); 


/// ajouter a la fin: 


//services: 
Route::get('/admin/services/show', [ServiceController::class,'index'])->name('ad.services.show'); 
Route::get('/admin/edit/service/{id}', [ServiceController::class,'edit'])->name('ad.services.edit');
Route::put('/admin/update/service/{id}', [ServiceController::class,'update'])->name('ad.services.update'); 

Route::get('/admin/add/service/', [ServiceController::class,'create'])->name('ad.services.add'); 
Route::post('/admin/service/store', [ServiceController::class,'store'])->name('ad.services.store');
Route::delete('/admin/service/delete/{id}', [ServiceController::class,'destroy'])->name('ad.services.destroy');






