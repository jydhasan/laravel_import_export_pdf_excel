<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
    return view('welcome');
});
// excel
Route::get('/excel',function(){
    return view('excel');
});
Route::get('users/export/', [UsersController::class, 'export']);
// import
Route::post('users/import/', [UsersController::class, 'import'])->name('import');
// Example of using the PDF generation route
Route::get('/generate-pdf',  [UsersController::class, 'generatePDF']);