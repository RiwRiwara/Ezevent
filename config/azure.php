<?php

return [

    'account_name' => env('AZURE_STORAGE_ACCOUNT_NAME'),

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
        'eventimgs' => env('APP_ENV') === 'local' ? 'testeventimgs' : 'eventimgs',
        'formimgs' => env('APP_ENV') === 'local' ? 'testformimgs' : 'formimgs',
    ],

    'default_img' => [
        'userprofile' => 'https://ezeventstorage.blob.core.windows.net/testprofileimgs/default_thumnail.png',
        'event' => 'https://ezeventstorage.blob.core.windows.net/testprofileimgs/default_event.png',
        'event_thumbnail' => 'https://ezeventstorage.blob.core.windows.net/testprofileimgs/default_thumnail.png',
        'event_banner' => 'https://ichef.bbci.co.uk/news/976/cpsprodpb/AEF6/production/_126709744_c66798edc6ea30838d4af96c1060a8cce4ab180f-1.jpg.webp',

    
    ],
    'image' =>[
        'userprofile' => env('AZURE_STORAGE_BASE_URL').'/'.(env('APP_ENV') === 'local' ? 'testprofileimgs' : 'profileimgs'),
        'subimgs' => env('AZURE_STORAGE_BASE_URL').'/'.(env('APP_ENV') === 'local' ? 'testsubimgs' : 'subimgs'),
        'eventimgs' => env('AZURE_STORAGE_BASE_URL').'/'.(env('APP_ENV') === 'local' ? 'testeventimgs' : 'eventimgs'),
        'formimgs' => env('AZURE_STORAGE_BASE_URL').'/'.(env('APP_ENV') === 'local' ? 'testformimgs' : 'formimgs'),
    ],


    'base_url' => env('AZURE_STORAGE_BASE_URL'),


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

    'connection_string' => env('AZURE_ACCOUNT_CONNECT_STRING'),



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