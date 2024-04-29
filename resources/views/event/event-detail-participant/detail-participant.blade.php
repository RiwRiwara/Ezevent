<?php
// Controller : [EventParticipantListController]
?>

<div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
    <h1 class="text-2xl text-center font-bold mb-4 mt-2 text-neutral-8">
        {{__("event.menu-event.menu-event6")}}

    </h1>

    <div class="flex flex-col gap-4">


        <div class="">
            <div class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                <div>
                    <select id="dropdownActionButton" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" aria-labelledby="dropdownActionButton">
                        <option value="normal">Normal</option>
                        <option value="cancel">Cancel</option>
                        <option value="removed">Removed</option>
                    </select>
                </div>

                <label for="table-table-search-users" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-neutral-5 focus:border-neutral-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5" placeholder="Search for users">
                </div>
            </div>
        </div>

        <livewire:participant-table :eventParticipants="$eventParticipantsDataArray['data']" />
        <div class="p-2">
            {{$eventParticipants->links()}}
        </div>


    </div>
</div>