<x-app-layout>
    <x-slot name="title">
        {{__('page.event')}}
    </x-slot>

    <x-slot name="header">
        <div class="flex justify-center">
            <x-breadcrumb :items="$page_data['breadcrumbItems']" />
        </div>
    </x-slot>


    <div class="max-w-7xl mx-auto p-6 md:p-8 my-5 md:mt-10 bg-white rounded-md h-svh ">
        <div class="md:flex-col gap-4">
            <div class=" md:flex justify-between items-center">
                <h1 class="text-2xl font-bold leading-9 tracking-tight text-neutral-9">{{__('page.all_event')}}(0
                    {{__('page.event')}})
                </h1>

                <x-button.neutral name="create-event">
                    {{__('page.create_event')}}
                </x-button.neutral>
            </div>
            <hr class="my-5 border-1 border-primary-5">
            <div>
                <form class="flex items-center max-w-sm ">
                    <x-forms.input-outline-primary name="search_string" label="{{__('page.search')}}" type="text" />
                    <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-neutral-7 rounded-lg border border-neutral-7 hover:bg-neutral-8 focus:ring-4 focus:outline-none focus:ring-neutral-3 dark:bg-neutral-6 dark:hover:bg-neutral-7 dark:focus:ring-neutral-8 duration-300">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>


            <div class="mt-10 flex flex-col items-center justify-center h-auto gap-4b ">
                <div class="text-neutral-9">
                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="130" fill="currentColor" class="bi bi-calendar2-event-fill" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M11.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                    </svg>
                </div>

                <label class="text-2xl font-bold leading-9 tracking-tight text-black mt-4">{{__('page.topic1')}}</label>

                <label class="text-base my-2">{{__('page.paragraph1')}}</label>

                <x-button.neutral name="create-event">
                    {{__('page.create_event')}}
                </x-button.neutral>
            </div>
        </div>
    </div>

    </x-guest-layout>