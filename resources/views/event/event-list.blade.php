<x-app-layout>
    <x-slot name="title">
        {{__('page.event')}}
    </x-slot>

    <x-slot name="header">
        <div class="flex justify-center">
            <x-breadcrumb :items="$page_data['breadcrumbItems']" />
        </div>
    </x-slot>




    <div class="max-w-7xl mx-auto p-6 md:p-8 my-5 md:mt-10 bg-white rounded-md h-fit ">
        <div class="md:flex-col gap-4">

            <div class=" md:flex justify-between items-center">
                <h1 class="text-2xl font-bold leading-9 tracking-tight text-neutral-9">{{__('page.all_event')}} ( 
                    {{$page_data['my_events']->total()}}
                    {{__('page.event')}})
                </h1>
                <x-button.neutral name="create-event">
                    {{__('page.create_event')}}
                </x-button.neutral>
            </div>
            <hr class="my-5 border-1 border-primary-5">
            <div class="flex justify-end">
                <form class="flex items-center max-w-sm  flex-row gap-2 text-nowrap">
                    <x-forms.input-outline-primary name="search_string" label="{{__('page.search')}}" type="text" value="{{request()->input('search_string')}}" />
                    <button type="submit" class="p-1 ms-2 text-sm font-medium text-white bg-neutral-7 rounded-lg border border-neutral-7 hover:bg-neutral-8 focus:ring-4 focus:outline-none focus:ring-neutral-3 dark:bg-neutral-6 dark:hover:bg-neutral-7 dark:focus:ring-neutral-8 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <a href="{{route('event-list')}}" class="p-1 text-sm font-medium text-white bg-neutral-7 rounded-lg border border-neutral-7 hover:bg-neutral-8 focus:ring-4 focus:outline-none focus:ring-neutral-3 dark:bg-neutral-6 dark:hover:bg-neutral-7 dark:focus:ring-neutral-8 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span class="sr-only">Reset</span>
                    </a>

                </form>
            </div>

            @if ($page_data['my_events']->count() == 0)
            <div class="mt-10 flex flex-col items-center justify-center gap-4b ">
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
            @else
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-3">

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="bg-neutral-8 text-neutral-8 px-3 py-2">
                                {{__('event.thumbnail')}}
                            </th>
                            <th scope="col" class="bg-neutral-9 text-white px-6 py-3">
                                {{__('event.event_name')}}
                            </th>
                            <th scope="col" class="bg-neutral-8 text-white px-6 py-3">
                                {{__('event.datetime')}}
                            </th>
                            <th scope="col" class="bg-neutral-9 text-white px-6 py-3">
                                {{ __('event.phase.set') }}

                            </th>
                            <th scope="col" class="bg-neutral-8 text-white px-6 py-3">
                                {{ __('event.status.Status') }}

                            </th>
                            <th scope="col" class="bg-neutral-9 text-white px-6 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($page_data['my_events'] as $event)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="px-2 py-2 items-center flex justify-center">
                                <img class="h-24 w-20 rounded-md object-cover hover:scale-x-105 duration-300 ease-in hover:shadow-md t" src="{{$event->getThumbnail()}}" alt="">
                            </td>
                            <th scope="row" class="px-4 py-2 font-semibold text-neutral-9 whitespace-nowrap dark:text-white text-base">
                                {{ mb_strlen($event->event_name) > 30 ? mb_substr($event->event_name, 0, 30) . '...' : $event->event_name }}
                            </th>

                            <td class="px-4 py-2 text-base text-nowrap">
                                {{$event->getDateStart()}} - {{$event->getDateEnd()}}
                            </td>
                            <td class="px-4 py-2 font-bold text-base">
                                <div class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="10" stroke="currentColor" class="animate-pulse w-2.5 h-2.5 {{$event->getStatusColor()}}">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    {{ __('event.status.'.$event->event_status) }}
                                </div>
                            </td>
                            <td class="px-4 py-2 font-bold text-base text-nowrap">
                                <div class="flex items-center">
                                    <span class="h-2.5 w-2.5 rounded-full {{$event->getStatusColor()}} me-2 animate-pulse text-nowrap"></span>
                                    {{ __('event.phase.'.$event->event_phase) }}
                                </div>
                            </td>
                            <td class="px-4 py-2 text-right">
                                <a type="link" href="{{route('event-detail', ['event_id' => $event->event_id])}}" class="text-neutral-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>

                <div class="mt-5">
                    {{ $page_data['my_events']->links() }}
                </div>
            </div>


            @endif

        </div>
    </div>



    </x-guest-layout>