<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary-5 dark:text-gray-200 leading-tight">
            {{ __('Ezevent') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="lg:flex-col mt-2 w-full">
            <div>
                <div class="ml-8">
                    <div class="mt-4 lg:flex justify-between items-center">
                        <label class="text-2xl font-bold leading-9 tracking-tight text-neutral-9">{{__('page.all_event')}}(0
                        {{__('page.event')}})</label>
                        <a  href="{{route('create-event')}}" class="hidden md:block px-20 py-1.5 bg-neutral-9 ring-neutral-9 border-2 border-neutral-9 text-white rounded-md shadow-sm hover:bg-neutral-7 ml-auto mr-10">
                        {{__('page.create_event')}}
                        </a>
                    </div>
                    <div class="mt-4 flex flex-row justify-between items-center">
                        <div class="flex flex-row">
                            <div class="mr-2 mb-2 md:mb-0">
                                <i class="bi bi-search text-3xl"></i>
                            </div>
                            <x-forms.input-outline-primary name="search_string" label="{{__('page.search')}}" type="text" />
                        </div>

                        <!-- Dropdown Filter (Desktop) -->
                        <div class="hidden md:block">
                            <select class="border-none ml-2 mr-10 font-bold">
                                <option value="filter1">{{__('page.all_event')}}</option>
                                <option value="filter2">Filter 2</option>
                                <option value="filter3">Filter 3</option>
                            </select>
                        </div>
                    </div>
                    <!-- Dropdown Filter (Mobile) -->
                    <div class="md:hidden mb-2">
                        <select class="border-none w-full font-bold">
                            <option value="filter1">{{__('page.all_event')}}</option>
                            <option value="filter2">Filter 2</option>
                            <option value="filter3">Filter 3</option>
                        </select>
                    </div>

                    <div class="lg:mt-48 mt-0 flex flex-col items-center justify-center h-auto gap-4b ">
                        <div class="text-neutral-9">
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="130" fill="currentColor" class="bi bi-calendar2-event-fill" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M11.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                            </svg>
                        </div>

                        <label class="text-2xl font-bold leading-9 tracking-tight text-black">{{__('page.topic1')}}</label>

                        <label class="text-base">{{__('page.paragraph1')}}</label>

                        <button type="button" class="px-20 mt-2 py-1.5 bg-neutral-9 ring-neutral-9 border-2 border-neutral-9 text-white rounded-md shadow-sm hover:bg-neutral-7">
                            {{__('page.create_event')}}
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </x-guest-layout>