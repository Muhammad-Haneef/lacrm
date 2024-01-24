<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AreaOfLawController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LeadStatusController;
use App\Http\Controllers\TaskStatusController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\ContactCategoryController;
use App\Http\Controllers\ContactMethodController;
use App\Http\Controllers\MatterStatusController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PredefineSmsController;
use App\Http\Controllers\PredefineEmailController;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MatterController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;




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

Route::fallback(function(){
    return view('404');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/forget-password', function () {
    return view('forget-password');
});

Route::redirect('/reset-password', '/', 301);
Route::get('/reset-password/{key?}', function (string $key=null) {
    return view('reset-password', ['key'=>$key]);
    /*
    if($key)
        return view('reset-password', ['key'=>$key]);
    else
        return redirect('/');
    */
})->whereAlphaNumeric('key');


Route::redirect('/admin', '/admin/dashboard', 301);
Route::prefix('/admin/')->group(function(){

    Route::get('reports', function(){
        return view('reports');
    });

    Route::get('trash', function(){
        return view('trash');
    });

    Route::get('logout', function(){
        echo "logout";
    });



    Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');
    Route::get('/roles', [RoleController::class, 'index'])->name('roles');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// LEADS    
    Route::get('leads', [LeadController::class, 'index'])->name('leads');
    Route::get('leads/view/{id}', [LeadController::class, 'show'])->name('lead-view');

// CONTACT    
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts');
    Route::get('contacts/edit/{id}', [ContactController::class, 'edit'])->name('contact-edit');

    Route::get('matters', [MatterController::class, 'index'])->name('matters');
    Route::get('tasks', [TaskController::class, 'index'])->name('tasks');
    Route::get('sms', [SmsController::class, 'index'])->name('sms');
    Route::get('calendar', function(){ return view('calendar'); })->name('calendar');
    Route::get('case-workers', [UserController::class, 'index'])->name('case-workers');


    // Final - starting
    Route::get('settings', function(){
        return view('settings/home');
    })->name('settings');
        Route::get('settings/area-of-law', [AreaOfLawController::class, 'index'])->name('area-of-law');
        Route::get('settings/departments', [DepartmentController::class, 'index'])->name('departments');
        Route::get('settings/lead-status', [LeadStatusController::class, 'index'])->name('lead-status');
        Route::get('settings/task-status', [TaskStatusController::class, 'index'])->name('task-status');
        Route::get('settings/priorities', [PriorityController::class, 'index'])->name('priorities');
        Route::get('settings/contact-categories', [ContactCategoryController::class, 'index'])->name('contact-categories');
        Route::get('settings/contact-methods', [ContactMethodController::class, 'index'])->name('contact-methods');
        Route::get('settings/matter-status', [MatterStatusController::class, 'index'])->name('matter-status');
        Route::get('settings/tags', [TagController::class, 'index'])->name('tags');
        Route::get('settings/predefine-sms', [PredefineSmsController::class, 'index'])->name('predefine-sms');
        Route::get('settings/predefine-email', [PredefineEmailController::class, 'index'])->name('predefine-email');
    // Final - ending












});
