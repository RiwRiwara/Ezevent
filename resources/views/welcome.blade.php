<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')

</head>



<body class="bg-neutral-6">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-100 w-auto" src="{{ asset('images/Logo.png') }}" alt="Your Company">
            <h2 class="mt-10 text-center text-4xl font-bold leading-9 tracking-tight text-neutral-9">EZEVENT</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{route('login.store')}}" method="POST">
                @csrf
                <div>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required placeholder="Email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required placeholder="Password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-neutral-9 px-3 py-1.5 text-xl font-semibold leading-6 text-white shadow-sm hover:bg-neutral-7 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm">
                <a href="/register" class="font-semibold leading-6 text-gray-0" >Create account here</a>
            </p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>