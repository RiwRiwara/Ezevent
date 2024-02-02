<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <title>{{ config('app.name', 'Laravel') }}</title>
    @if (config('app.env', 'production') == 'production')
    <link href="https://ezevent.online/public/build/assets/{{env('CSS_BUILD_FILE_NAME')}}" rel="stylesheet"
        type="text/css" />
    @else
    @vite('resources/css/app.css')
    @endif
</head>



<body class="bg-neutral-6 " >
    <div class="flex flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto w-auto" src="{{ asset('images/Logo.png') }}" alt="EZEVENT">
            <h2 class="mt-10 text-center text-5xl font-bold leading-9 tracking-tight text-neutral-0">EZEVENT</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('login.store')}}" method="POST">
                @csrf
                    <div class="mt-2 bg-white rounded-lg">
                        <x-forms.input-outline-primary name="email" label="Email" type="email" required />
                    </div>

                    <div class="mt-2 bg-white rounded-lg">
                        <x-forms.input-outline-primary name="password" label="Password" type="password" required />
                    </div>

                    <x-button.primary type="submit" innerHtml="Login"/>
            </form>

            <p class="mt-3 text-center text-sm">
                <a href="/register" class="font-semibold leading-5 text-gray-0">Create account</a>
            </p>
        </div>
    </div>
    @if (config('app.env', 'production') == 'production')
    <script src="https://ezevent.online/public/build/assets/{{env('JS_BUILD_FILE_NAME')}}"></script>
    @else
    @vite('resources/js/app.js')
    @endif
</body>