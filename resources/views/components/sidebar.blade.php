<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-neutral-9  rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-18 h-screen items-center transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">

    <div
        class="sidebar min-h-screen overflow-hidden border-r bg-neutral-7 w-auto lg:w-[3.35rem] lg:hover:w-56 xl:w-[3.35rem] xl:hover:w-56 2xl:w-[3.35rem] 2xl:hover:w-56">

        <div class="flex h-screen flex-col justify-between pt-2 pb-6">
            <div>
                <ul class="space-y-4 font-medium ">
                    <li>
                        <a href="#" class="mt-2 rounded-full flex justify-center">
                            <img class="h-10 w-10 rounded-full items-center"
                                src="https://avatars.githubusercontent.com/u/35387401?v=4" alt="" />
                        </a>
                    </li>
                    <li class="min-w-max hover:bg-neutral-8">
                        <a href="{{route('dashboard')}}" aria-label="dashboard"
                            class="relative flex items-center space-x-4  px-4 py-3 text-white {{ request()->is('dashboard') ? 'bg-neutral-9 ' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-inbox" viewBox="0 0 16 16">
                                <path
                                    d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374z" />
                            </svg>
                            <span class="-mr-1 font-medium">Dashboard</span>
                        </a>
                    </li>
                    <li class="min-w-max hover:bg-neutral-8">
                        <a href="{{route('landing')}}" class="bg group flex items-center space-x-4 px-4 py-3 text-white {{ request()->is('landing') ? 'bg-neutral-9 ' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-calendar-event" viewBox="0 0 16 16">
                                <path
                                    d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                            </svg>
                            <span class="">Event</span>
                        </a>
                    </li>
                    <li class="min-w-max hover:bg-neutral-8">
                        <a href="{{route('crm-home-page')}}" class="group flex items-center space-x-4  px-4 py-3 text-white {{ request()->is('crm-home-page') ? 'bg-neutral-9 ' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-people" viewBox="0 0 16 16">
                                <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                            </svg>
                            <span class="">CRM</span>
                        </a>
                    </li>
                    <li class="min-w-max hover:bg-neutral-8">
                        <a href="{{route('summary')}}" class="group flex items-center space-x-4  px-4 py-3 text-white {{ request()->is('summary') ? 'bg-neutral-9 ' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-star" viewBox="0 0 16 16">
                                <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                            </svg>
                            <span class="">Summary</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="">
                <div class="min-w-max ">
                    @include('components.language-switch')
                </div>
                <form action="{{route('logout')}}" method="POST">
                    <div class="min-w-max hover:bg-danger-8 ">
                        @csrf
                        <button type="submit" class="group flex items-center space-x-4  px-4 py-3 text-white"
                            style="width:100%">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-door-closed" viewBox="0 0 16 16">
                                    <path
                                        d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3zm1 13h8V2H4z" />
                                    <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
                                </svg>
                            </div>
                            <div class="">
                                Log out
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</aside>