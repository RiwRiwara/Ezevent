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

        <div class="max-w-7xl px-2 py-8 mx-auto sm:px-10 lg:px-8">
            <div class=" grid-cols-12 grid">
                <div class="col-span-6 flex flex-row gap-4 justify-start">
                    <img class="w-32 h-36 rounded-lg border-4 border-neutral-2 p-1" src="{{$event->getThumbnail()}}" alt="">
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row gap-2">
                            <div class="text-2xl font-bold text-white text-nowrap">{{$event->event_name}}</div>
                            <div class="flex items-center">
                                <div class="rounded-lg text-white font-bold px-2 py-1 {{$event->getStatusColor()}} me-2">
                                    {{ __('event.status.'.$event->event_status) }}
                                </div>
                            </div>

                        </div>
                        <div class="text-md text-gray-2 font-semibold text-nowrap"> {{$event->getDateStart()}} - {{$event->getDateEnd()}}</div>
                        <div class="text-md text-gray-2 font-semibold text-nowrap"> {{$event->venue}}</div>
                    </div>
                </div>
                <div class="col-span-6 flex flex-col gap-4 ">
                    <div class="flex justify-end">
                        <x-button.btn-common name="review" type="button">
                            {{__('page.published')}}
                        </x-button.btn-common>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl my-5 px-2 mx-auto sm:px-10 lg:px-8">

        <div x-data="tabs()" class="md:flex">
            <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
                <li>
                    <button @click="changeTab('dashboard')" type="button" :class="{ 'text-gray-0 bg-neutral-9 duration-500 scale-105 dark:text-white': activeTab === 'dashboard', 'hover:text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white': activeTab !== 'dashboard' }" class="inline-flex items-center px-4 py-3 rounded-lg w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                        </svg>


                        <span class="ms-2 text-nowrap font-semibold ">Dashboard</span>
                    </button>
                </li>

                <li>
                    <button @click="changeTab('event_setting')" type="button" :class="{ 'text-gray-0 bg-neutral-9 duration-500 scale-105 dark:text-white': activeTab === 'event_setting', 'hover:text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white': activeTab !== 'event_setting' }" class="inline-flex items-center px-4 py-3 rounded-lg w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                        </svg>

                        <span class="ms-2 text-nowrap font-semibold ">Event Setting</span>

                    </button>
                </li>

                <li>
                    <button type="button" @click="changeTab('apperance')" type="button" :class="{ 'text-gray-0 bg-neutral-9 duration-500 scale-105 dark:text-white': activeTab === 'apperance', 'hover:text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white': activeTab !== 'apperance' }" class="inline-flex items-center px-4 py-3 rounded-lg w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 0 1-.657.643 48.39 48.39 0 0 1-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 0 1-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 0 0-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 0 1-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 0 0 .657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 0 1-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 0 0 5.427-.63 48.05 48.05 0 0 0 .582-4.717.532.532 0 0 0-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 0 0 .658-.663 48.422 48.422 0 0 0-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 0 1-.61-.58v0Z" />
                        </svg>
                        <span class="ms-2 text-nowrap font-semibold ">Apperance Setting</span>

                    </button>
                </li>
                <li>
                    <button type="button" @click="changeTab('form')" type="button" :class="{ 'text-gray-0 bg-neutral-9 duration-500 scale-105 dark:text-white': activeTab === 'form', 'hover:text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white': activeTab !== 'form' }" class="inline-flex items-center px-4 py-3 rounded-lg w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>

                        <span class="ms-2 text-nowrap font-semibold ">Application Form</span>

                    </button>
                </li>
                <li>
                    <button type="button" @click="changeTab('participant')" type="button" :class="{ 'text-gray-0 bg-neutral-9 duration-500 scale-105 dark:text-white': activeTab === 'participant', 'hover:text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white': activeTab !== 'participant' }" class="inline-flex items-center px-4 py-3 rounded-lg w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>

                        <span class="ms-2 text-nowrap font-semibold ">Participant</span>
                    </button>
                </li>
                <li>
                    <button type="button" @click="changeTab('message')" type="button" :class="{ 'text-gray-0 bg-neutral-9 duration-500 scale-105 dark:text-white': activeTab === 'message', 'hover:text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white': activeTab !== 'message' }" class="inline-flex items-center px-4 py-3 rounded-lg w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
                        <span class="ms-2 text-nowrap font-semibold ">Message</span>
                    </button>
                </li>

            </ul>

            <div x-show="activeTab === 'event_setting'" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
                @include('event.event-detail-partials.detail-event')
            </div>

            <div x-show="activeTab === 'dashboard'" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
                @include('event.event-detail-partials.detail-dashboard')

            </div>

            <div x-show="activeTab === 'apperance'" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
                @include('event.event-detail-partials.detail-apperance')
            </div>

            <div x-show="activeTab === 'form'" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
                @include('event.event-detail-partials.detail-form')
            </div>

            <div x-show="activeTab === 'participant'" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
                @include('event.event-detail-partials.detail-participant')
            </div>

            <div x-show="activeTab === 'message'" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
                @include('event.event-detail-partials.detail-message')
            </div>

            <script>
                function tabs() {
                    return {
                        activeTab: window.location.hash ? window.location.hash.substring(1) : 'dashboard',
                        changeTab(tabName) {
                            // Update activeTab
                            this.activeTab = tabName;
                            // Update URL
                            history.pushState(null, null, window.location.pathname + '#' + tabName);
                        },
                    };
                }

                function changeTab(tabName) {
                    // Update activeTab
                    this.activeTab = tabName;
                    // Update URL
                    history.pushState(null, null, window.location.pathname + '#' + tabName);
                }
                // Listen for hash changes and update activeTab accordingly
                window.addEventListener('hashchange', function() {
                    if (window.location.hash) {
                        // Remove '#' from hash and set activeTab
                        this.activeTab = window.location.hash.substring(1);
                    } else {
                        // If no hash is present, default to 'dashboard'
                        this.activeTab = 'dashboard';
                    }
                });
            </script>
        </div>
    </div>
</x-app-layout>