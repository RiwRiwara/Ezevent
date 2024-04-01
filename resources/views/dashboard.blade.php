<x-app-layout>
    <x-slot name="title">
        {{__('page.event')}}
    </x-slot>

    <x-slot name="header">
        <div class="flex justify-center">
            <x-breadcrumb :items="$page_data['breadcrumbItems']" />
        </div>
    </x-slot>


    <div class="max-w-7xl mx-auto px-6 md:px-8 my-5 md:mt-8 bg-white rounded-md h-fit ">

        <div id="alert-additional-content-1" class="p-4 mb-4 text-neutral-8 border border-neutral-3 rounded-lg bg-neutral- dark:bg-gray-800 dark:text-neutral-4 dark:border-neutral-8" role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <h3 class="text-base font-medium">
                    Ezevent 0.0.1v is now available!
                </h3>
            </div>
            <div class="mt-2 mb-4 text-sm">
                Welcome to Ezevent 0.0.1v! This is the first version of Ezevent. We are excited to have you on board and we hope you enjoy using Ezevent. We are looking forward to your feedback and suggestions.
            </div>
            <div class="flex" style="display: none;">
                <button type="button" class="text-white bg-neutral-8 hover:bg-neutral-9 focus:ring-4 focus:outline-none focus:ring-neutral-2 font-medium rounded-lg text-xs px-3 py-1.5 me-2 text-center inline-flex items-center dark:bg-neutral-6 dark:hover:bg-neutral-7 dark:focus:ring-neutral-8">
                    <svg class="me-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                    </svg>
                    Donate!
                </button>
                <button type="button" class="text-neutral-8 bg-transparent border border-neutral-8 hover:bg-neutral-9 hover:text-white focus:ring-4 focus:outline-none focus:ring-neutral-2 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-neutral-6 dark:border-neutral-6 dark:text-neutral-4 dark:hover:text-white dark:focus:ring-neutral-8" data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                    Close
                </button>
            </div>
        </div>

        <div class="mt-4 flex justify-center items-center">
            <h1 class="text-2xl text-center font-bold my-3 leading-9 tracking-tight text-neutral-9">
                Welcome to Ezevent
            </h1>
        </div>
        <div class="flex justify-center items-center">
            <img class="mx-2 rounded-md h-40" src="{{ asset('images/default_thumnail.png') }}" alt="EZEVENT">
            <img class="mx-2 rounded-md h-40" src="{{ asset('images/kmutt.jpg') }}" alt="Kmutt logo">
        </div>

        <div class="md:flex-col mt-4 gap-4">
            <div class="flex flex-row gap-2">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>

                <h1 class="text-2xl font-bold leading-9 tracking-tight text-neutral-9">
                    What is Ezevent?
                </h1>
            </div>
            <article>
                <p class="mt-4 text-base text-neutral-9">
                    Ezevent is a simple event management system that allows you to create, manage, and share events with your friends, family, and colleagues. You can create events, invite people, and manage your events with ease. Ezevent is designed to be simple, easy to use, and user-friendly. We hope you enjoy using Ezevent.
                </p>
            </article>

            <hr class="my-5 border-1 border-neutral-5">

            <div class="grid grid-cols-2 gap-10">
                <div class="">
                    <div class="flex flex-row gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                        </svg>
                        <h1 class="text-2xl font-bold leading-9 tracking-tight text-neutral-9">
                            Why made Ezevent?
                        </h1>
                    </div>

                    <article>
                        <p class="mt-4 text-base text-neutral-9">
                            Ezevent was created to solve the problem of managing events. We wanted to create a simple, easy-to-use event management system that allows you to create, manage, and share events with your friends, family, and colleagues. We believe that Ezevent is the best event management system out there, and we hope you enjoy using it.
                        </p>
                    </article>

                    <hr class="my-5 border-1 border-neutral-5">

                    <div class="flex flex-row gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>

                        <h1 class="text-2xl font-bold leading-9 tracking-tight text-neutral-9">
                            Ezevent Mobile App
                        </h1>
                    </div>

                    <article>
                        <p class="mt-4 text-base text-neutral-9">
                            Ezevent is available on both Android and iOS. You can download the Ezevent app from the Google Play Store or the Apple App Store. The Ezevent app allows you to create, manage, and share events on the go. You can also receive notifications for your events and stay up to date with your events.
                        </p>
                    </article>

                    <hr class="my-5 border-1 border-neutral-5">
                    <div class="flex flex-row gap-2">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                        </svg>

                        <h1 class="text-2xl font-bold leading-9 tracking-tight text-neutral-9">
                            Features of Ezevent
                        </h1>
                    </div>
                    <article>
                        <p class="mt-4 text-base text-neutral-9">
                            Ezevent has many features that make it the best event management system out there. Some of the features of Ezevent include:
                        </p>
                        <ul class="mt-4 text-base text-neutral-9 list-disc list-inside">
                            <li>
                                <a href="{{ route('event-list') }}" class="text-primary-6 underline hover:text-lg hover:font-bold hover:text-primary-9 duration-500">Create events</a>
                            </li>
                            <li>Invite people to your events</li>
                            <li>Manage your events</li>
                            <li>Share your events</li>
                            <li>Receive notifications for your events</li>
                        </ul>
                    </article>
                </div>

                <div class="">
                    <h1 class="text-2xl font-bold leading-9 tracking-tight text-neutral-9">
                        <span class="text-white bg-primary-5 rounded-full my-2 px-3 py-1">AI</span> - Ezevent
                    </h1>

                    <article>
                        <p class="mt-4 text-base text-neutral-9">
                            Ezevent is powered by AI. We use AI to help you create, manage, and share events with ease. 
                        </p>
                    </article>
                </div>

            </div>


        </div>

    </div>
</x-app-layout>