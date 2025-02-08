<?php

return [
    /*
    |--------------------------------------------------------------------------
    | API Documentation Settings
    |--------------------------------------------------------------------------
    |
    | This file is for defining the settings for the API documentation package.
    | You can customize it to fit your project's needs.
    |
    */

    'api_title' => env('API_DOCS_TITLE', 'API Documentation'),
    'api_description' => env('API_DOCS_DESCRIPTION', 'This is the API documentation for your application.'),
    'api_version' => env('API_DOCS_VERSION', '1.0.0'),
    
    /*
    |--------------------------------------------------------------------------
    | API Documentation Routes
    |--------------------------------------------------------------------------
    |
    | You can define the route names for accessing the documentation. 
    | For example, you can set a route for the documentation index page.
    |
    */

    'routes' => [
        'docs' => 'api/docs',  // This will be the route to view the docs
        'swagger' => 'api/swagger', // Swagger UI route
    ],

    /*
    |--------------------------------------------------------------------------
    | Documentation Style
    |--------------------------------------------------------------------------
    |
    | You can set the default style for the documentation here. 
    | You can also integrate a UI framework like Swagger or Redoc.
    |
    */
    
    'documentation_style' => 'swagger', // You can change it to 'redoc' or other frameworks if needed.

    /*
    |--------------------------------------------------------------------------
    | Enable API Authentication
    |--------------------------------------------------------------------------
    |
    | If your API documentation requires authentication, you can enable it here.
    |
    */

    'authentication' => [
        'enabled' => env('API_DOCS_AUTH_ENABLED', false),
        'auth_type' => 'Bearer Token',  // You can change this depending on your needs (e.g., Basic Auth)
    ],

    /*
    |--------------------------------------------------------------------------
    | Display Examples in Documentation
    |--------------------------------------------------------------------------
    |
    | This option allows you to enable or disable displaying example requests and responses.
    |
    */

    'show_examples' => true,

    /*
    |--------------------------------------------------------------------------
    | Default Documentation Layout
    |--------------------------------------------------------------------------
    |
    | You can define the default layout options for your documentation page.
    |
    */

    'layout' => 'default',  // You can define custom layout views if needed.
];
