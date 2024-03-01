<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon" />
    <link href="{{ asset('css/base.css') }}" rel="stylesheet" type="text/css" />


    <title>{{ isset($title) ? $title : config('app.name', 'Laravel') }}</title>
    @if (config('app.env', 'production') == 'production')
    <link href="https://ezevent.online/public/build/assets/{{env('CSS_BUILD_FILE_NAME')}}" rel="stylesheet" type="text/css" />
    @else
    @vite('resources/css/app.css')
    @livewireStyles
    @endif
</head>
@include('components.language-switch')


<body class="bg-neutral-5 fade-in">
    <div class="flex flex-col justify-center px-6 py-12 md:px-0 md:py-0 lg:px-0 lg:py-0 xl:px-0 xl:py-0">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto w-auto h-3/4 h " src="{{ asset('images/Logo.png') }}" alt="EZEVENT">
            <h2 class="mt-10 text-center text-5xl font-bold leading-9 tracking-tight text-neutral-0">EZEVENT</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('login.store')}}" method="POST">
                @csrf
                <div class="mt-2">
                    <x-forms.input-outline-primary name="email" label="{{__('field_name.email')}}" type="email"
                        required />
                </div>

                <div class="mt-2">
                    <x-forms.input-outline-primary-password name="password" label="{{__('field_name.password')}}"
                        type="password" required />
                </div>

                <x-button.primary type="submit" innerHtml="{{__('field_name.login')}}" id="loginButton" />
            </form>

            <p class="mt-3 text-center text-sm">
                {{__('field_name.have_create_account')}}
                <a href="{{route('web.register.index')}}" class="font-semibold text-lg underline leading-10 text-neutral-0">
                    {{__('field_name.create_account')}}
                </a>
            </p>

        </div>
    </div>
    @if (config('app.env', 'production') == 'production')
    <script src="https://ezevent.online/public/build/assets/{{env('JS_BUILD_FILE_NAME')}}"></script>
    @else
    @vite('resources/js/app.js')
    @livewireScripts
    @endif

</body>t