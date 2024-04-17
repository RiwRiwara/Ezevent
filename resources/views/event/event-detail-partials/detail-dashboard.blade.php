<div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
    <h1 class="text-2xl text-center font-bold mb-4 mt-2 text-neutral-8">
        {{__("event.menu-event.menu-event1")}}
    </h1>


    <div class="flex flex-col gap-4">

        <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <div class="border-t border-gray-200 dark:border-gray-600">
                <h1 class="text-xl font-bold leading-none text-neutral-9 dark:text-white p-4">
                    ผู้เข้าร่วมงาน
                </h1>
                <div class="flex justify-center items-center p-4 rounded-md bg-neutral-1 mx-4 text-3xl font-bold text-neutral-7">
                    {{$event->getSummary()['count_participants']}}
                </div>

                <dl class="flex flex-row gap-4 justify-center flex-wrap p-8">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_participants_applications']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">{{__("event.dashboard_page.total_appplications")}}</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_participants_applications_pending']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">{{__("event.dashboard_page.wait_approve")}}</dd>
                    </div>

                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_participants_applications_cancelled']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">ยกเลิกการสมัคร</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_participants_applications_rejected']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">ถูกปฎิเสธ</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_participants_cancelled']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">.
                            ออกจากงาน
                        </dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_participants_removed']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">
                            ถูกเอาออกจากงาน
                        </dd>
                    </div>

                </dl>
            </div>

            <div class="border-t border-gray-200 dark:border-gray-600">
                <h1 class="text-xl font-bold leading-none text-neutral-9 dark:text-white p-4">
                    สตาฟงาน
                </h1>
                <div class="flex justify-center items-center p-4 rounded-md bg-primary-1 mx-4 text-3xl font-bold text-primary-7">
                    {{$event->getSummary()['count_staff']}}
                </div>
                <dl class="flex flex-row gap-4 justify-center flex-wrap p-8">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_staff_applications']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">{{__("event.dashboard_page.total_appplications")}}</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_staff_applications_pending']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">{{__("event.dashboard_page.wait_approve")}}</dd>
                    </div>

                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_staff_applications_cancelled']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">ยกเลิกการสมัคร</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_staff_applications_rejected']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">ถูกปฎิเสธ</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_staff_cancelled']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">.
                            ออกจากงาน
                        </dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-lg font-extrabold">
                            {{$event->getSummary()['count_staff_removed']}}
                        </dt>
                        <dd class="text-gray-400 text-nowrap dark:text-gray-400">
                            ถูกเอาออกจากงาน
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <div class=" p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">{{__("event.dashboard_page.recent_participants")}}</h5>
                <a href="#" class="text-sm font-medium text-neutral-6 hover:underline dark:text-neutral-5">
                    {{__("event.dashboard_page.view_all")}}
                </a>
            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($event->getLastestApplication() as $application)
                    <a href="/" class="">
                        <li class="py-3 sm:py-4 hover:scale-105 hover:bg-slate-100 px-4 duration-300 ease-in-out">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="{{$application['user']->profileImg()}}" alt="{{
                                $application['user']['first_name'] . ' ' . $application['user']['last_name'] 
                                }}">
                                </div>
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        {{$application['user']['first_name'] . ' ' . $application['user']['last_name']}}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        {{$application['user']['email']}}
                                    </p>
                                    <div class="text-muted text-sm">
                                        วันเวลาที่สมัคร : {{$application->getDateTimeAppication()}}
                                    </div>
                                </div>
                                <div class="{{$application['type'] == 'Staff' ? 'bg-primary-5' : 'bg-neutral-6'}} p-1 rounded-md inline-flex items-center text-sm font-semibold text-white dark:text-white ">
                                    {{$application['type']}}
                                </div>

                            </div>
                        </li>
                    </a>
                    @empty

                    <li class="py-3 sm:py-4">
                        <div class="flex items center justify-center">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">
                                {{__("ไม่มีผู้เข้าร่วมงานล่าสุด")}}
                            </p>
                        </div>
                    </li>


                    @endforelse


                </ul>
            </div>
        </div>

    </div>

</div>