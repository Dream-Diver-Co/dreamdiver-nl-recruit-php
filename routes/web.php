<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectsinglepageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TickethistoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\BasicticketController;
use App\Http\Controllers\DreamjobController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;


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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/ticket', [FrontendController::class, 'ticket'])->name('ticket');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/career', [FrontendController::class, 'career'])->name('career');
Route::get('/review', [FrontendController::class, 'review'])->name('review');
Route::get('/recruitment', [FrontendController::class, 'recruitment'])->name('recruitment');

Route::get('/cookie', [FrontendController::class, 'cookie'])->name('cookie');


Route::get('/software_development', [FrontendController::class, 'softwareDevelopment'])->name('software_development');
Route::get('/mobile_app', [FrontendController::class, 'mobileApp'])->name('mobile_app');
Route::get('/software_service', [FrontendController::class, 'softwareService'])->name('software_service');
Route::get('/web_design', [FrontendController::class, 'webDesign'])->name('web_design');
Route::get('/seo', [FrontendController::class, 'seo'])->name('seo');
Route::get('/marketing', [FrontendController::class, 'marketing'])->name('marketing');


Route::get('/aeon', [FrontendController::class, 'aeon'])->name('aeon');
//Route::get('/projectsingletest', [FrontendController::class, 'projectsingletest_view'])->name('projectsingletest');
Route::get('/project_single_view/{project}', [FrontendController::class, 'project_single_view'])->name('project_single_view');


Route::get('/pos', [FrontendController::class, 'pos'])->name('pos');
Route::get('/misi', [FrontendController::class, 'misi'])->name('misi');
Route::get('/shob_khobor', [FrontendController::class, 'shobKhobor'])->name('shob_khobor');
Route::get('/fnf_stay', [FrontendController::class, 'fnfStay'])->name('fnf_stay');
Route::get('/de_was', [FrontendController::class, 'deWas'])->name('de_was');
Route::get('/kaan', [FrontendController::class, 'kaan'])->name('kaan');
Route::get('/book_change', [FrontendController::class, 'bookChange'])->name('book_change');
Route::get('/foody_moody', [FrontendController::class, 'foodyMoody'])->name('foody_moody');
Route::get('/ideabd', [FrontendController::class, 'ideaBd'])->name('ideabd');

Route::get('/trusted', [FrontendController::class, 'trusted'])->name('trusted');
Route::get('/reasonable', [FrontendController::class, 'reasonable'])->name('reasonable');
Route::get('/twonty_four', [FrontendController::class, 'twonty_four'])->name('twonty_four');

Route::get('/loginfromfrontend', [FrontendController::class, 'login'])->name('loginfromfrontend');
Route::get('/registrar', [FrontendController::class, 'registrar'])->name('registrar');



Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified', 'role:admin'])->name('admin.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/adminlte', function () {
    return view('adminlte');
});

Route::group(['middleware' => ['auth', 'verified', 'role:admin']], function () {
    Route::get('/home_service_index', [HomeServiceController::class, 'index'])->name('home_service_index');
    Route::get('/home_service_create', [HomeServiceController::class, 'create'])->name('home_service_create');
    Route::post('/home_service_store', [HomeServiceController::class, 'store'])->name('home_service_store');
    Route::get('/home_service_edit/{id}', [HomeServiceController::class, 'edit'])->name('home_service_edit');
    Route::put('/home_service_update/{id}', [HomeServiceController::class, 'update'])->name('home_service_update');
    Route::put('/home_service_destroy/{id}', [HomeServiceController::class, 'destroy'])->name('home_service_destroy');

    Route::resource('projectsingle', ProjectsinglepageController::class);
    Route::get('/projectsingle_edit/{id}', [ProjectsinglepageController::class, 'edit'])->name('projectsingle_edit');
    Route::put('/projectsingle_update/{id}', [ProjectsinglepageController::class, 'update'])->name('projectsingle_update');
    Route::put('/projectsingle_destroy/{id}', [ProjectsinglepageController::class, 'destroy'])->name('projectsingle_destroy');


    Route::resource('projects', ProjectController::class);


    Route::resource('faqs', FaqController::class);

    // Route::resource('tickets', TicketController::class);
    // Route::post('/tickethistory_store', [TickethistoryController::class, 'store'])->name('tickethistory_store');

    Route::get('/contact_form_index', [ContactformController::class, 'index'])->name('contact_form_index');
    Route::get('/contact_form_create', [ContactformController::class, 'create'])->name('contact_form_create');
    // Route::post('/contact_form_store', [ContactformController::class, 'store'])->name('contact_form_store');
    Route::get('/contact_form_edit/{id}', [ContactformController::class, 'edit'])->name('contact_form_edit');
    Route::put('/contact_form_update/{id}', [ContactformController::class, 'update'])->name('contact_form_update');
    Route::put('/contact_form_destroy/{id}', [ContactformController::class, 'destroy'])->name('contact_form_destroy');

    Route::get('/dreamjob_form_index', [DreamjobController::class, 'index'])->name('dreamjob_form_index');
    Route::get('/dreamjob_form_create', [DreamjobController::class, 'create'])->name('dreamjob_form_create');
    // Route::post('/dreamjob_form_store', [DreamjobController::class, 'store'])->name('dreamjob_form_store');
    Route::get('/dreamjob_form_edit/{id}', [DreamjobController::class, 'edit'])->name('dreamjob_form_edit');
    Route::put('/dreamjob_form_update/{id}', [DreamjobController::class, 'update'])->name('dreamjob_form_update');
    Route::put('/dreamjob_form_destroy/{id}', [DreamjobController::class, 'destroy'])->name('dreamjob_form_destroy');


    Route::get('/basicticket_index', [BasicticketController::class, 'index'])->name('basicticket_index');
    Route::get('/basicticket_create', [BasicticketController::class, 'create'])->name('basicticket_create');
    // Route::post('/basicticket_store', [BasicticketController::class, 'store'])->name('basicticket_store');
    Route::get('/basicticket_edit/{id}', [BasicticketController::class, 'edit'])->name('basicticket_edit');
    Route::put('/basicticket_update/{id}', [BasicticketController::class, 'update'])->name('basicticket_update');
    Route::put('/basicticket_destroy/{id}', [BasicticketController::class, 'destroy'])->name('basicticket_destroy');

    // Route::resource('dreamjob', DreamjobController::class);
    // Route::resource("/student", StudentController::class);

});

// Route::post('/dreamjob_store', [DreamjobController::class, 'store'])->name('dreamjob_store');
Route::post('/basicticket_store', [BasicticketController::class, 'store'])->name('basicticket_store');
Route::post('/contact_form_store', [ContactformController::class, 'store'])->name('contact_form_store');


Route::resource('employee', EmployeeController::class);
// Dream job route (student)
// Route::resource("/student", StudentController::class);
Route::resource("/postedjob", StudentController::class);

Route::resource('tickets', TicketController::class);
Route::post('/tickethistory_store', [TickethistoryController::class, 'store'])->name('tickethistory_store');

Route::get('/myticket', [TicketController::class, 'myticket'])->name('myticket');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
