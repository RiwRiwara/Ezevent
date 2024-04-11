<x-app-layout>
    @include('event.event-detail-header')


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

            <div x-show="activeTab === 'participant'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" >
                @include('event.event-detail-participant.detail-participant')

            </div>
            <div x-show="activeTab === 'staff'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
            </div>

            <div x-show="activeTab === 'message'" class="md:px-6  text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90">
            </div>
        </div>


        <script>
            function tabs() {
                return {
                    activeTab: window.location.hash ? window.location.hash.substring(1) : 'participant',
                    changeTab(tabName) {
                        this.activeTab = tabName;
                        history.pushState(null, null, window.location.pathname + '#' + tabName);
                    },
                };
            }
        </script>
    </div>
</x-app-layout>