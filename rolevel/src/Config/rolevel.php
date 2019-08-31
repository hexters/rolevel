<?php 

    return [


        'models' => [
            'roles' => App\Role::class
        ],

        'show_uniqkey' => in_array(env('APP_ENV'), ['local', 'staging']),

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
        ]

    ];