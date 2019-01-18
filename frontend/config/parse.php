<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Keys
    |--------------------------------------------------------------------------
    |
    | You can find these keys at https://parse.com/apps/{YOURAPP}/edit#keys
    |
    | It's probably a good idea to store these in your .env file, so that
    | they are not in your version control.
    |
    */

    'app_id'     => env('PARSE_APP_ID', 'YOToo69uhd5qLdmwpjjEdhpaideSP2ZhEwDzBfzR'),
    'rest_key'   => env('PARSE_REST_KEY', 'oA89xHWmYTjQakkqLnQv0dwOgvP46SoIYaW5d9f1'),
    'master_key' => env('PARSE_MASTER_KEY', 'DnJQevwSYWRlwdD3wL9NCdAD8V1eXgEpCRRoc2qn'),

    /*
    |--------------------------------------------------------------------------
    | Subclasses
    |--------------------------------------------------------------------------
    |
    | If you'd like to provide custom subclasses for your parse classes, you
    | can generate them with:
    |
    |     php artisan parse:subclass ClassName [--parse-class=ParseClassName]
    |
    | Then you must register them here
    |
    */

    'subclasses' => [
        // '\App\ParseClasses\CustomClass'
        '\App\ParseClasses\Event',
        '\App\ParseClasses\Attendee',
        '\App\ParseClasses\Connection',
        '\App\ParseClasses\Profile'
    ],


    /*
    |--------------------------------------------------------------------------
    | Repositories
    |--------------------------------------------------------------------------
    |
    | Once you add a new repository, you should add it to this array so that
    | you can inject the contract into your constructors thereby "insulating"
    | your classes from being tightly coupled to the Parse SDK. Generate the
    | repository with:
    |
    |     php artisan parse:repository ClassName [--parse-class=ParseClassName]
    |
    | Then you must register them here
    |
    */
    'repositories' => [
        // '\App\Repositories\ParseCustomClassRepository' => '\App\Repositories\Contracts\CustomClassRepository',
    ],
];
