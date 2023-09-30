<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\Auth_Controller;
use App\Http\Controllers\Contact_Controller;
use App\Http\Controllers\Blog_Controller;
use App\Http\Controllers\Job_Controller;
use App\Http\Controllers\Team_Controller;
use App\Http\Controllers\Aboutus_Controller;
use App\Http\Controllers\Service_Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\FileController;

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
//     return view('dashboard');
// });

Route::get('/login', [Auth_Controller::class, 'index'])->name('login')->middleware('guest');
Route::post('/submit', [Auth_Controller::class, 'submit'])->name('submit');
Route::get('/logout', [Auth_Controller::class, 'logout'])->name('logout');
Route::get('/forgot_pass', [Auth_Controller::class, 'forgot'])->name('forgot');
Route::post('/forgotpass', [Auth_Controller::class, 'forgotpass'])->name('forgotpass');

Route::get('/', [Dashboard_Controller::class, 'index'])->name('index')->middleware('auth');
// contact
Route::get('/contact', [Contact_Controller::class, 'index'])->name('contact')->middleware('auth');
Route::get('/addcontact', [Contact_Controller::class, 'add'])->name('addcontact')->middleware('auth');
Route::get('/edit/{id}', [Contact_Controller::class, 'edit'])->name('editcontact')->middleware('auth');
Route::post('/submitcontact', [Contact_Controller::class, 'submitcontact'])->name('submitcontact');
Route::post('/updatecontact/{id}', [Contact_Controller::class, 'updatecontact'])->name('updatecontact');
// blog
Route::get('/blog', [Blog_Controller::class, 'index'])->name('blog')->middleware('auth');
// Route::get('/addblog', [Blog_Controller::class, 'add'])->name('addblog')->middleware('auth');
Route::delete('/delete/{id}', [Blog_Controller::class, 'delete'])->name('deleteblog')->middleware('auth');
Route::get('/add', [Blog_Controller::class, 'add'])->name('addblog')->middleware('auth');
Route::get('/editblog/{id}', [Blog_Controller::class, 'edit'])->name('editblog')->middleware('auth');
Route::post('/updateblog/{id}', [Blog_Controller::class, 'update'])->name('updateblog')->middleware('auth');
Route::post('/store', [Blog_Controller::class, 'submit'])->name('store')->middleware('auth');
// job 
Route::get('/job', [Job_Controller::class, 'index'])->name('job')->middleware('auth');
Route::delete('/deletejob/{id}', [Job_Controller::class, 'delete'])->name('deletejob')->middleware('auth');
Route::get('/addjob', [Job_Controller::class, 'add'])->name('addjob')->middleware('auth');
Route::get('/editjob/{id}', [Job_Controller::class, 'edit'])->name('editjob')->middleware('auth');
Route::post('/updatejob/{id}', [Job_Controller::class, 'update'])->name('updatejob')->middleware('auth');
Route::post('/submitjob', [Job_Controller::class, 'submit'])->name('submitjob')->middleware('auth');
// Team 

Route::get('/team', [Team_Controller::class, 'index'])->name('team')->middleware('auth');
Route::get('/addTeam', [Team_Controller::class, 'add'])->name('addTeam')->middleware('auth');
Route::post('/saveteam', [Team_Controller::class, 'save'])->name('saveteam')->middleware('auth');
Route::delete('/deleteteam/{id}', [Team_Controller::class, 'delete'])->name('deleteteam')->middleware('auth');
Route::get('/editteam/{id}', [Team_Controller::class, 'edit'])->name('editteam')->middleware('auth');
Route::post('/updateteam/{id}', [Team_Controller::class, 'update'])->name('updateteam')->middleware('auth');

// visi
Route::get('/visi', [Aboutus_Controller::class, 'visi'])->name('visi')->middleware('auth');
Route::get('/addvisi', [Aboutus_Controller::class, 'addvisi'])->name('addvisi')->middleware('auth');
Route::post('/submitvisi', [Aboutus_Controller::class, 'submitvisi'])->name('submitvisi')->middleware('auth');
Route::delete('/deletevisi/{id}', [Aboutus_Controller::class, 'deletevisi'])->name('deletevisi')->middleware('auth');
Route::get('/editvisi/{id}', [Aboutus_Controller::class, 'editvisi'])->name('editvisi')->middleware('auth');
Route::post('/updatevisi/{id}', [Aboutus_Controller::class, 'updatevisi'])->name('updatevisi')->middleware('auth');
// misi 
Route::get('/misi', [Aboutus_Controller::class, 'misi'])->name('misi')->middleware('auth');
Route::get('/addmisi', [Aboutus_Controller::class, 'addmisi'])->name('addmisi')->middleware('auth');
Route::post('/submitmisi', [Aboutus_Controller::class, 'submitmisi'])->name('submitmisi')->middleware('auth');
Route::delete('/deletemisi/{id}', [Aboutus_Controller::class, 'deletemisi'])->name('deletemisi')->middleware('auth');
Route::get('/editmisi/{id}', [Aboutus_Controller::class, 'editmisi'])->name('editmisi')->middleware('auth');
Route::post('/updatemisi/{id}', [Aboutus_Controller::class, 'updatemisi'])->name('updatemisi')->middleware('auth');
// about 

Route::get('/about', [Aboutus_Controller::class, 'index'])->name('about')->middleware('auth');
Route::delete('/deleteabout/{id}', [Aboutus_Controller::class, 'deleteabout'])->name('deleteabout')->middleware('auth');
Route::get('/addabout', [Aboutus_Controller::class, 'addabout'])->name('addabout')->middleware('auth');
Route::post('/submitabout', [Aboutus_Controller::class, 'submitabout'])->name('submitabout')->middleware('auth');
Route::get('/editabout/{id}', [Aboutus_Controller::class, 'editabout'])->name('editabout')->middleware('auth');
Route::post('/updateabout/{id}', [Aboutus_Controller::class, 'updateabout'])->name('updateabout')->middleware('auth');

// manfaat dan sistem kerja sama 
Route::get('/msk', [Aboutus_Controller::class, 'indexmsk'])->name('msk')->middleware('auth');
Route::get('/addmanfaat', [Aboutus_Controller::class, 'addmanfaat'])->name('addmanfaat')->middleware('auth');
Route::post('/submitmsanfaat', [Aboutus_Controller::class, 'submitmsanfaat'])->name('submitmsanfaat')->middleware('auth');
Route::delete('/deletemanfaat/{id}', [Aboutus_Controller::class, 'deletemanfaat'])->name('deletemanfaat')->middleware('auth');
Route::get('/editmanfaat/{id}', [Aboutus_Controller::class, 'editmanfaat'])->name('editmanfaat')->middleware('auth');
Route::post('/updatemanfaat/{id}', [Aboutus_Controller::class, 'updatemanfaat'])->name('updatemanfaat')->middleware('auth');

// service 
Route::get('/service', [Service_Controller::class, 'index'])->name('service')->middleware('auth');
Route::get('/editservice/{id}', [Service_Controller::class, 'edit'])->name('editservice')->middleware('auth');
Route::get('/addservice', [Service_Controller::class, 'add'])->name('addservice')->middleware('auth');

// Home 
Route::get('/tagline', [HomeController::class, 'index'])->name('tagline')->middleware('auth');
Route::get('/addtagline', [HomeController::class, 'addtagline'])->name('addtagline')->middleware('auth');
Route::post('/submittagline', [HomeController::class, 'submittagline'])->name('submittagline')->middleware('auth');
Route::get('/edittagline/{id}', [HomeController::class, 'edittagline'])->name('edittagline')->middleware('auth');
Route::delete('/deletetagline/{id}', [HomeController::class, 'deletetagline'])->name('deletetagline')->middleware('auth');
Route::post('/updatetagline/{id}', [HomeController::class, 'updatetagline'])->name('updatetagline')->middleware('auth');
Route::get('/banner', [HomeController::class, 'indexbanner'])->name('banner')->middleware('auth');
Route::get('/editbanner/{id}', [HomeController::class, 'editbanner'])->name('editbanner')->middleware('auth');
Route::post('/updatebanner/{id}', [HomeController::class, 'updatebanner'])->name('updatebanner')->middleware('auth');

// candidat 
Route::get('/candidate', [CandidateController::class, 'index'])->name('candidate')->middleware('auth');
Route::get('/cv/serve/{filename}', [FileController::class, 'serveCV'])->name('cv.serve');
// Route::get('/cv/serve/{filename}', 'FileController@serveCV')->name('cv.serve');

// Route::get('uploads/cv/{filename}', 'FileController@serveCV')->name('cv.serve');
