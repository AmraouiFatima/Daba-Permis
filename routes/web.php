<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Inscription\InscriptionComponent;
use App\Http\Livewire\Reservation\ReservationComponent;
use App\Http\Livewire\FormInscription\FormInscriptionComponent;
use Livewire\WithPagination;
use App\Models\Inscription;
use App\Http\Controllers\InscriptionController;





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

Route::get('/', function () {
    return redirect()->route('login');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {

        $inscriptions = Inscription::paginate(4);
        return view('dashboard',['inscriptions'=>$inscriptions]);

    })->name('dashboard');
});


Route::get('/inscription', InscriptionComponent::class)->name('inscription');
Route::get('/reservation', ReservationComponent::class)->name('reservation');
Route::post('/addReservation', ReservationComponent::class)->name('addReservation');

//Route::get('/formInscription', FormInscriptionComponent::class)->name('formInscription');

//Route::get('/formInscription', [InscriptionController::class, 'create'])->name('formInscription');
//Route::post('/formInscription_storeSchool', [InscriptionController::class, 'storeSchool']);
//Route::post('/formInscription_storeMoniteur', [InscriptionController::class, 'storeMoniteur']);
//Route::post('/formInscription_storeCandidat', [InscriptionController::class, 'storeCandidat']);

//Route::get('/formInscription','InscriptionController@create')->name('formInscription');
//Route::post('/formInscription_storeSchool','InscriptionController@storeSchool');
//Route::post('/formInscription_storeMoniteur','InscriptionController@storeMoniteur');
//Route::post('/formInscription_storeCandidat','InscriptionController@storeCandidat');


Route::get('/formInscription', [InscriptionController::class, 'index'])->name('formInscription');
Route::post('/formInscription_storeSchool', [InscriptionController::class, 'storeSchool'])->name('storeSchool');
Route::post('/formInscription_storeMoniteur', [InscriptionController::class, 'storeMoniteur'])->name('storeMoniteur');
Route::post('/formInscription_storeCandidat', [InscriptionController::class, 'storeCandidat'])->name('storeCandidat');