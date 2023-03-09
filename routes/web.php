<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hsController;
use App\Http\Controllers\afiController;
use App\Http\Controllers\ajuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mstnkController;
use App\Http\Controllers\pstnkController;
use App\Http\Controllers\queryController;
use App\Http\Controllers\data_doController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\stnkjadiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\pddController;
use App\Http\Controllers\delvstnkController;

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

Route::get('/',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/',[LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


//dashboard
Route::get('dashboard',[DashboardController::class, 'dashboard'])->middleware('auth');
// Route::get('/summary/export',[DashboardController::class, 'SummaryExport'])->name('SummaryExport');
Route::resource('dashboard-report', DashboardController::class);
Route::get('/dashboard-chart',[DashboardController::class, 'chart'])->name('getChart');


route::get('/test', [queryController::class, 'test']); ##for testing purposes
route::get('/getPeriod', [queryController::class, 'getPeriod'])->name('getPeriod'); 
Route::resource('get-query', queryController::class);
Route::get('/summary/export',[queryController::class, 'SummaryExport'])->name('SummaryExport');

//data-do
Route::controller(data_doController::class)->group(function(){
    Route::get('data_do', 'do')->middleware('auth');
    Route::post('data_do-import', 'import')->name('data_do.import');   
    });
Route::resource('get-do', data_doController::class);


//afi
Route::controller(afiController::class)->group(function(){
    Route::get('afi', 'afi')->middleware('auth');
    Route::post('afi-import', 'Afiimport')->name('afi.Afiimport');   
    });
Route::resource('get-afi', afiController::class);

//mohon-stnk
Route::controller(mstnkController::class)->group(function(){
    Route::get('mstnk', 'mstnk')->middleware('auth');
    Route::post('mstnk-import', 'mstnkimport')->name('mstnk.mstnkimport');
});
Route::resource('get-mohon', mstnkController::class);

//pending-stnk
Route::controller(pstnkController::class)->group(function(){
    Route::get('pstnk', 'pstnk')->middleware('auth');
    Route::post('pstnk-import', 'pstnkimport')->name('pstnk.pstnkimport');
    Route::post('pstnk-clear', 'cleardata')->name('pstnk.cleardata');
});
Route::resource('get-pending', pstnkController::class);


//stnk-jadi
Route::controller(stnkjadiController::class)->group(function (){
    Route::get('stnkjadi', 'stnkjadi')->middleware('auth');
    Route::post('stnkjadi-import', 'stnkjadiImport')->name('stnkjadi.stnkjadiImport');
});
Route::resource('get-jadi', stnkjadiController::class);


//inv
Route::controller(invoiceController::class)->group(function (){
    Route::get('invoice', 'invoice')->middleware('auth');
    Route::post('invoice-import', 'invoiceImport')->name('invoice.invoiceImport');
});
Route::resource('get-invoice', invoiceController::class);

//hs
Route::controller(hsController::class)->group(function () {
    route::get('hs','hs')->middleware('auth');
    Route::post('hs-import','hsImport')->name('hs.hsImport');     
});
Route::resource('get-hs', hsController::class); 


Route::controller(ajuController::class)->group(function(){
    Route::get('ajustnk','ajustnk')->middleware('auth');
    Route::get('formaju','formAju')->middleware('auth');        
});
//formaju
Route::get('/getvi',[ajuController::class, 'vi']);
Route::resource('get-form',ajuController::class);

//pdd
Route::get('/pdd',[pddController::class, 'showpage'])->middleware('auth');
Route::post('/pdd-import',[pddController::class, 'pddimport'])->name('pdd-import');
Route::resource('get-pdd', pddController::class);

//delvstnk
Route::get('/delvstnk',[delvstnkController::class, 'showpage'])->middleware('auth');
route::resource('getdelvstnk',delvstnkController::class);


// Route::get('/ajustnk', function (){
//     return view('ajustnk',[
//         "title" => "Aju STNK"
//     ]);
// });

// Route::get('/formaju', function (){
//     return view('formaju',[
//         "title" => "Form Aju STNK",
//     ]);
// });

// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
