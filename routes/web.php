<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;
use App\Models\Lead;
use GuzzleHttp\Psr7\Request;

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

Route::get('/', [LeadController::class, 'index'])->name('homepageroute');
Route::get('/detail/{lead}', function (Lead $lead) {
    return view('detail', ['lead' => $lead]);
})->name('detailroute');
Route::get('edit/{lead}', function (Lead $lead) {
    return view('edit', ['lead' => $lead]);
})->name('editroute');
Route::put('update/{id}', [LeadController::class, 'salvar'])->name('salvarroute');
