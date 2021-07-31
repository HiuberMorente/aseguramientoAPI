<?php

    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\PatientController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('Users', [AuthController::class, 'Users']);


Route::middleware('auth:sanctum')->group(function(){
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
});


Route::get('patient', [PatientController::class, 'index']);
Route::get('patient/{patient}', [PatientController::class, 'show']);
Route::post('patient', [PatientController::class, 'store']);
Route::patch('patient/{patient}', [PatientController::class, 'update']);
Route::delete('patient/{patient}', [PatientController::class, 'delete']);
 

