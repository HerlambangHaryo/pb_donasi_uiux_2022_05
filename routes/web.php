<?php

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
    
    //-----------------------------------------------------------
        Route::get('/', function () {
            return redirect()->route('Home.index');
        });

        Route::resource('Home', HomeController::class);
        Route::resource('Dashboard', DashboardController::class);

	        Route::get('Bencana/{Bencana}/deletedata', 'BencanaController@deletedata')
	            ->name('Bencana.deletedata');
        Route::resource('Bencana', BencanaController::class);
        
            Route::get('Bantukami/{Bantukami}/deletedata', 'BantukamiController@deletedata')
                ->name('Bantukami.deletedata');
        Route::resource('Bantukami', BantukamiController::class);
        
        Route::resource('Timbantuan', TimbantuanController::class);
        Route::resource('Rekeningdonasi', RekeningdonasiController::class);
        Route::resource('Donasi', DonasiController::class);

        Route::resource('Pembelanjaandana', PembelanjaandanaController::class);
        Route::resource('Korbanbencana', KorbanbencanaController::class);
        Route::resource('Titikpengungsian', TitikpengungsianController::class);
        Route::resource('Titikblokir', TitikblokirController::class);

            Route::get('Bantukamiapproval/{Bantukamiapproval}/approve', 'BantukamiapprovalController@approve')
                ->name('Bantukamiapproval.approve');
        Route::resource('Bantukamiapproval', BantukamiapprovalController::class);

        Route::resource('Terimakasih', TerimakasihController::class);
        
        Route::resource('Detailbantukami', DetailbantukamiController::class);

        


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
