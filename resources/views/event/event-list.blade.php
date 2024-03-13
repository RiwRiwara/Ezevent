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
                        <tr>
                            <th scope="col" class="bg-neutral-8 text-white px-3 py-2">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="bg-neutral-9 text-white px-6 py-3">
                                Event Name
                            </th>
                            <th scope="col" class="bg-neutral-8 text-white px-6 py-3">
                                Event Date & Time
                            </th>
                            <th scope="col" class="bg-neutral-9 text-white px-6 py-3">
                                Phase
                            </th>
                            <th scope="col" class="bg-neutral-8 text-white px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="bg-neutral-9 text-white px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($page_data['my_events'] as $event)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="px-3 py-4">
                                <img class="h-24 w-20 rounded-md object-cover" src="{{$event->getThumbnail()}}" alt="">
                            </td>
                            <th scope="row" class="px-6 py-4 font-semibold text-neutral-9 whitespace-nowrap dark:text-white text-lg">
                                {{ mb_strlen($event->event_name) > 30 ? mb_substr($event->event_name, 0, 30) . '...' : $event->event_name }}
                            </th>

                            <td class="px-6 py-4 text-lg">
                                {{$event->getDateStart()}} - {{$event->getDateEnd()}}
                            </td>
                            <td class="px-6 py-4 font-bold text-lg">
                                <div class="flex items-center">
                                    <span class="h-2.5 w-2.5 rounded-full {{$event->getStatusColor()}} me-2 animate-pulse"></span>
                                    {{ __('event.status.'.$event->event_status) }}
                                </div>
                            </td>
                            <td class="px-6 py-4 font-bold text-lg">
                                <div class="flex items-center">
                                    <span class="h-2.5 w-2.5 rounded-full {{$event->getStatusColor()}} me-2 animate-pulse"></span>
                                    {{ __('event.phase.'.$event->event_phase) }}
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <x-button.btn-common name="view" type="link" href="{{route('event-detail', ['event_id' => $event->event_id])}}">
                                    View
                                </x-button.btn-common>
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