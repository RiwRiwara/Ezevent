<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <title>{{ isset($title) ? $title : config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon" />
    <link href="{{ asset('css/base.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/base.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>

    @if (config('app.env', 'production') == 'production')
    <link href="https://ezevent.online/public/build/assets/{{env('CSS_BUILD_FILE_NAME')}}" rel="stylesheet" type="text/css" />
    @else
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
    @endif

</head>

<body class="antialiased ">
    <div class="min-h-screen bg-gray-0 dark:bg-gray-900">
        
        @include('components.sidebar')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-8 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="md:ms-10 fade-in">
            {{ $slot }}
        </main>
    </div>
    @if (config('app.env', 'production') == 'production')
    <script src="https://ezevent.online/public/build/assets/{{env('JS_BUILD_FILE_NAME')}}"></script>
    @else
    @livewireScripts
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    
</body>

</html>