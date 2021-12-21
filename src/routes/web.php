<?php 

// use myGov\Logtracker\Http\Middleware\VerifyLogApiToken;
use myGov\Logtracker\Http\Controllers\LogtrackerController;



Route::group(['prefix' => 'api/audit-panel-data'], function () {
    
    /*************Default Logs API******************/
    Route::get('/', '\myGov\Logtracker\Http\Controllers\LogtrackerController@logApidata');

    /**************Only for MongoDB**************** */
    Route::get('/log-synchronous', '\myGov\Logtracker\Http\Controllers\LogtrackerController@getUnsynchronousData');
    Route::post('/log-synchronous', '\myGov\Logtracker\Http\Controllers\LogtrackerController@synchronousProcess');
});