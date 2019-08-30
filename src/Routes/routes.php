<?php 

    Route::namespace('Hexters\Rolevel\Controllers')
        ->prefix(config('rolevel.admin_prefix_link'))
        // ->middleware([config('rolevel.auth_middleware')])
        ->group(function() {
            Route::get('/roles', 'RolevelAssignController@assign');
        });