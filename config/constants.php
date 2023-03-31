<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Defined Variables
    |--------------------------------------------------------------------------
    |
    | This is a set of variables that are made specific to this application
    | that are better placed here rather than in .env file.
    | Use config('your_key') to get the values.
    |
    */
    //config('constants.mailchimp')
    'mailchimp' => env('MAILCHIMP_API_KEY'),
    //config('constants.mailchimp_api')
    'mailchimp_api' => env('MAILCHIMP_API_ID_KEY'),
    //config('constants.mailchimp_server')
    'mailchimp_server' => env('MAILCHIMP_SERVER'),
    //config('constants.comand_api_key')
    'comand_api_key' => env('COMAND_API_KEY'),
];
