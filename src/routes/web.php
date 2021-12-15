<?php 

use myGov\Logtracker\Http\Middleware\VerifyLogApiToken;
use myGov\Logtracker\Http\Controllers\LogtrackerController;



Route::group(['prefix' => 'api/audit-panel-data'], function () {
    
    /*************Default Logs API******************/
    Route::get('/', [LogtrackerController::class,'logApidata']);

    /**************Only for MongoDB**************** */
    Route::get('/log-synchronous', [LogtrackerController::class,'getUnsynchronousData']);
    Route::post('/log-synchronous', [LogtrackerController::class,'synchronousProcess']);
});