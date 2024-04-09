<x-app-layout>
    <x-slot name="title">
        {{__('page.event_detail')}}
    </x-slot>

    <x-slot name="header">
        <div class="flex justify-center">
            <x-breadcrumb :items="$page_data['breadcrumbItems']" />
        </div>
    </x-slot>

    <div class="max-w-full bg-neutral-9 shadow-inner border-b-8 border-neutral-8">

        <div class="col-span-12 flex justify-end p-2">
            <p class="text-muted text-gray-200 font-medium">{{$event->event_id}}</p>
        </div>

        <div class="max-w-7xl px-2 md:py-8 mx-auto sm:px-10 lg:px-8">
            <div class=" grid-cols-12 grid">
                <div class="col-span-6 flex flex-row gap-4 justify-start">
                    <img class="w-32 h-36 rounded-lg border-4 border-neutral-2 p-1 object-cover" src="{{$event->getThumbnail()}}" alt="">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row gap-2">
                            <div class="text-2xl font-bold text-white overflow-hidden overflow-ellipsis whitespace-normal break-words max-w-[350px] max-h-[3.5em] line-clamp-3" id="event-name-show">{{$event->event_name}}</div>
                        </div>
                        <div class="text-md text-gray-2 font-semibold text-nowrap"> {{$event->getDateStart()}} - {{$event->getDateEnd()}}</div>
                        <div class="text-md text-gray-2 font-semibold text-nowrap"> {{$event->venue}}</div>
                    </div>
                </div>
                <div class="col-span-6 flex flex-col gap-4 ">
                    <div class="flex items-center justify-end">
                        <div class="rounded-lg text-white font-bold px-2 py-1 {{$event->getStatusColor()}} me-2">
                            {{ __('event.status.'.$event->event_status) }}
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <x-button.btn-common name="review" type="button">
                            {{__('page.published')}}
                        </x-button.btn-common>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="max-w-7xl my-5 px-2 mx-auto sm:px-10 lg:px-8" id="partials-detail">

        <div x-data="tabs()" class="md:flex">
            @include('event.subnav')



            <div x-show="activeTab === 'event_setting'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
            </div>
            <div x-show="activeTab === 'event_rule'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
            </div>

            <div x-show="activeTab === 'dashboard'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">

            </div>

            <div x-show="activeTab === 'appearance'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
            </div>

            <div x-show="activeTab === 'form'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
            </div>

            <div x-show="activeTab === 'participant'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
            </div>
            <div x-show="activeTab === 'staff'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
            </div>

            <div x-show="activeTab === 'message'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
                @include('event.event-detail-message.detail-message')

            </div>
        </div>


        <script>
            function tabs() {
                return {
                    activeTab: window.location.hash ? window.location.hash.substring(1) : 'message',
                    changeTab(tabName) {
                        this.activeTab = tabName;
                        history.pushState(null, null, window.location.pathname + '#' + tabName);
                    },
                };
            }

            function changeTab(tabName) {
                this.activeTab = tabName;
                history.pushState(null, null, window.location.pathname + '#' + tabName);
            }
            window.addEventListener('hashchange', function() {
                if (window.location.hash) {
                    this.activeTab = window.location.hash.substring(1);
                } else {
                    this.activeTab = 'form';
                }
            });
        </script>
    </div>
</x-app-layout>