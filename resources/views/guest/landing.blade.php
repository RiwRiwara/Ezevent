<x-guest-layout>
@include('components.sidebar')

<div class="flex" style="font-family: IBM Plex Sans Thai">
        <div class="lg:flex-col mt-2 w-full">
            <h2 class="ml-4 text-2xl lg:text-4xl font-bold leading-9 tracking-tight text-neutral-9">Ezevent</h2>
            <div>
                <div class="ml-8">
                    <div class="mt-4 lg:flex justify-between items-center">
                        <label class="text-2xl font-bold leading-9 tracking-tight text-neutral-9">All event(0
                            Events)</label>
                        <button type="button"
                            class="px-20 py-1.5 bg-neutral-9 ring-neutral-9 border-2 border-neutral-9 text-white rounded-md shadow-sm hover:bg-neutral-7 ml-auto mr-10">
                            Create Activity
                        </button>
                    </div>
                    <div class="mt-4 lg:flex justify-between items-center">
                        <!-- Search Icon -->
                        <div class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </div>

                        <!-- Search Bar -->
                        <input type="text"
                            class="border-none flex-grow px-4 py-2 border border-neutral-9 rounded-md focus:outline-none focus:border-indigo-600"
                            placeholder="Search...">

                        <!-- Dropdown Filter -->
                        <select class="border-none ml-2  mr-10 font-bold">
                            <option value="filter1">All event</option>
                            <option value="filter2">Filter 2</option>
                            <option value="filter3">Filter 3</option>
                        </select>
                    </div>
                    <div class="lg:mt-48 mt-0 flex flex-col items-center justify-center h-auto">
                        <div class="text-neutral-9">
                            <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" fill="currentColor"
                                class="bi bi-calendar2-event-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M11.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                            </svg>
                        </div>
                        <label class="text-2xl font-bold leading-9 tracking-tight text-black">Start your first
                            activity!</label>
                        <label class="text-base">Let’s create your exclusive event with Ezevent.
                            Many attendees will join :)</label>
                        <button type="button"
                            class="px-20 mt-2 py-1.5 bg-neutral-9 ring-neutral-9 border-2 border-neutral-9 text-white rounded-md shadow-sm hover:bg-neutral-7">
                            Create Activity
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</x-guest-layout>