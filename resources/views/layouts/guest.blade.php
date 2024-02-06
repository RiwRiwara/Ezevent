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
    <link href="{{ env('RESOURECE_ASSET_URL') }}/css/base.css" rel="stylesheet" type="text/css" />

    @if (config('app.env', 'production') == 'production')
    <link href="https://ezevent.online/public/build/assets/{{env('CSS_BUILD_FILE_NAME')}}" rel="stylesheet" type="text/css" />
    @else
    @vite('resources/css/app.css')
    @endif
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
    <style>
        .custom-input {
            transition: border-color 0.8s ease;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="min-h-full">

    {{ $slot }}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
@if (config('app.env', 'production') == 'production')
<script src="https://ezevent.online/public/build/assets/{{env('JS_BUILD_FILE_NAME')}}"></script>
@else
@vite('resources/js/app.js')
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</html>