<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\CadastroController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');



// Admin Routes
Route::get('/admins', 'AdminController@index')->name('admins.index');
Route::get('/admins/create', 'AdminController@create')->name('admins.create');
Route::post('/admins/store', 'AdminController@store')->name('admins.store');

// Pacientes
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/{paciente}', [PacienteController::class, 'show'])->name('pacientes.show');
Route::get('/pacientes/{paciente}', [PacienteController::class, 'edit'])->name('pacientes.edit');
Route::resource('pacientes', PacienteController::class);

//Agendamentos
Route::get('/agendamentos', [AgendamentoController::class, 'index'])->name('agendamentos.index');
Route::get('/agendamentos/create', [AgendamentoController::class, 'create'])->name('agendamentos.create');
Route::get('/agendamentos/show', [AgendamentoController::class, 'show'])->name('agendamentos.show');
Route::post('/agendamentos', [AgendamentoController::class, 'store'])->name('agendamentos.store');
Route::get('/agendamentos/{agendamento}/edit', [AgendamentoController::class, 'edit'])->name('agendamentos.edit');
Route::put('/agendamentos/{agendamento}', [AgendamentoController::class, 'update'])->name('agendamentos.update');
Route::delete('/agendamentos/{agendamento}', [AgendamentoController::class, 'destroy'])->name('agendamentos.destroy');


});

//Rotas Publicas
Route::get('/cadastro', 'CadastroController@create');
Route::post('/cadastro', 'CadastroController@store')->name('cadastro.store');
Route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro.index');

Auth::routes();
