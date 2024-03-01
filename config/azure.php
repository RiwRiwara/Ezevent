<?php

return [


    /*
    |--------------------------------------------------------------------------
    | List of containers
    |--------------------------------------------------------------------------
    |
    | This value is the list of containers in your Azure Storage Account.
    |
    */

    'containers' => [
        'userprofile' => env('APP_ENV') === 'local' ? 'testprofileimgs' : 'profileimgs',
        'subimgs' => env('APP_ENV') === 'local' ? 'testsubimgs' : 'subimgs',
        'eventimgs' => env('APP_ENV') === 'local' ? 'testtesteventimgs' : 'testeventimgs',
        'formimgs' => env('APP_ENV') === 'local' ? 'testformimgs' : 'formimgs',
    ],


    /*
    |--------------------------------------------------------------------------
    | Azure Storage Account Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your Azure Storage Account.
    |
    */

    'account_name' => env('AZURE_STORAGE_ACCOUNT_NAME'),

    /*
    |--------------------------------------------------------------------------
    | Azure Storage Account Key
    |--------------------------------------------------------------------------
    |
    | This value is the key of your Azure Storage Account.
    |
    */

    'account_key' => env('AZURE_SAS_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Azure Storage Account Connection String
    |--------------------------------------------------------------------------
    |
    | This value is the connection string of your Azure Storage Account.
    |
    */

    'connection_string' => env('AZURE_CONNECTION_STRING'),

    /*
    |--------------------------------------------------------------------------
    | Azure Storage Account Blob URL
    |--------------------------------------------------------------------------
    |
    | This value is the URL of your Azure Storage Account Blob.
    |
    */

    'blob_url' => env('AZURE_BLOB_SAS_URL'),

    /*
    |--------------------------------------------------------------------------
    | Azure Storage Account File URL
    |--------------------------------------------------------------------------
    |
    | This value is the URL of your Azure Storage Account File.
    |
    */

    'file_url' => env('AZURE_FILE_SAS_URL'),
];