<?php 

    return [


        'models' => [
            'roles' => App\Role::class
        ],

        /*
         | --------------------------------------
         | Assign configuration menu
         | --------------------------------------
         */
        'admin_prefix_link' => 'admin',
        
        'auth_middleware' => 'auth',

        'template' => [
            'extends' => 'layouts.app',
            'content' => 'content'
        ],

        'show_gate' => in_array(env('APP_ENV'), ['local', 'staging']),

    ];