<?php
    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Route;

    Route::get('/ping', function () {
        return response()->json(['message' => 'API funcionando']);
    });

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:api')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/profile', [AuthController::class, 'profile']);
    });


