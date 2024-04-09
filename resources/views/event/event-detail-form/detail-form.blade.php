<div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
    <h1 class="text-2xl text-center font-bold mb-4 mt-2 text-neutral-8">
    </h1>

    <div class="flex flex-col gap-4">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">

                <form method="GET" id="filter_form">
                    <input type="hidden" name="page" value="{{ $eventApplications->currentPage() }}">
                    <select id="time_range_filter" name="time_range" onchange="submitForm()" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        <option value="last_day">Last day</option>
                        <option value="last_7_days">Last 7 days</option>
                        <option value="last_30_days">Last 30 days</option>
                        <option value="last_month">Last month</option>
                    </select>
                    <select id="role_filter" name="role" onchange="submitForm()" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        <option value="all">All</option>
                        <option value="participant">Participant</option>
                        <option value="staff">Staff</option>
                    </select>
                </form>

                <label for="table-search" class="sr-only">Search</label>
                <form class="relative" method="GET" id="table-search-form">
                    <input type="hidden" name="page" value="{{ $eventApplications->currentPage() }}">
                    <input type="hidden" name="time_range" value="{{ $timeRange }}">

                    <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search" name="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-neutral-5 focus:border-neutral-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5" placeholder="Search">
                </form>
            </div>

            <livewire:application-table :eventApplications="$eventApplicationsDataArray['data']" />
            <div class="p-2">
                {{$eventApplications->links()}}
            </div>
        </div>
    </div>
</div>

<script>
    function submitForm() {
        document.getElementById("filter_form").submit();
    }
</script>
