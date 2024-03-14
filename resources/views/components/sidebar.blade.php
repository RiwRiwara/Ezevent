<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-neutral-9  rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-18 h-screen items-center transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">

    <div class="sidebar min-h-screen overflow-hidden border-r bg-neutral-7 w-auto lg:w-[3.35rem] lg:hover:w-56 xl:w-[3.35rem] xl:hover:w-56 2xl:w-[3.35rem] 2xl:hover:w-56">

        <div class="flex h-screen flex-col justify-between pt-2 pb-6">
            <div>
                <ul class="space-y-4 font-medium ">
                    <li class="">

                        <a href="{{ route('my-profile') }}" class="mt-2 rounded-full flex justify-center hover:scale-125 duration-300 delay-500 ease-in-out">
                            <img class="h-10 w-10 rounded-full items-center {{ request()->is('my-profile') ? 'border-4 border-neutral-5' : '' }}" 
                            src="{{ auth()->user()->profileImg()}}" alt="" />
                        </a>

                    </li>
                    <li class="min-w-max hover:bg-neutral-8 hover:scale-105 duration-300 ease-in-out hover:font-extrabold hover:underline">
                        <a href="{{route('dashboard')}}" aria-label="dashboard" class="relative flex items-center space-x-4  px-4 py-3 text-white {{ request()->is('dashboard') ? 'bg-neutral-9 ' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-inbox" viewBox="0 0 16 16">
                                <path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374z" />
                            </svg>
                            <span class="-mr-1 font-medium">{{__('field_name.dashboard')}}</span>
                        </a>
                    </li>
                    <li class="min-w-max hover:bg-neutral-8 hover:scale-105 duration-300 ease-in-out hover:font-extrabold hover:underline">
                        <a href="{{route('event-list')}}" class="bg group flex items-center space-x-4 px-4 py-3 text-white {{ request()->is('landing') ? 'bg-neutral-9 ' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                            </svg>
                            <span class="">{{__('field_name.event')}}</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="">
                <div class="min-w-max ">
                    @include('components.language-switch')
                </div>
                <form action="{{route('web.logout')}}" method="POST">
                    <div class="min-w-max hover:bg-danger-8 hover:scale-110 duration-300 ease-in-out hover:font-extrabold">
                        @csrf
                        <button type="submit" class="group flex items-center space-x-4  px-4 py-3 text-white" style="width:100%">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                                    <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3zm1 13h8V2H4z" />
                                    <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
                                </svg>
                            </div>
                            <div class="">
                                {{__('field_name.logout')}}
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</aside>