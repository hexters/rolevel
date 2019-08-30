<?php 

    Route::group([ 
            'middleware' => ['web', config('rolevel.auth_middleware')],
            'namespace' => 'Hexters\Rolevel\Controllers',
            'prefix' => config('rolevel.admin_prefix_link')
        ], 
        function() {
            Route::get('/roles', 'RolevelAssignController@assign');
        });