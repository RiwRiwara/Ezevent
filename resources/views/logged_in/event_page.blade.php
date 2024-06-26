<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary-5 dark:text-gray-200 leading-tight">
            {{ __('Ezevent') }}
        </h2>
    </x-slot>

    <h2 class="text-2xl px-4 md:px-20 py-5 text-left text-gray-9">Junior Architecture</h2>

    

    <h3 class="text-2xl px-4 md:px-20 text-left text-gray-9">{{__('page.overview')}}</h3>
    <div class="container px-4 mx-auto pt-8 grid gap-4 md:gap-20 grid-cols-1 md:grid-cols-2">
        
        <div class="text-lg border border-neutral-9 px-4 md:px-10 py-10 grid grid-cols-1">
            <div class="border-b border-neutral-9">
                <p class="text-gray-9">{{__('page.total_participants')}}</p>
                <p class="text-gray-9">2/25 {{__('page.person')}}</p>
            </div>
            <div class="my-auto">
                <p class="text-gray-9">{{__('page.total_staff')}}</p>
                <p class="text-gray-9">0/25 {{__('page.person')}}</p>
            </div>
        </div>
        
        <div class="border border-neutral-9 px-4 md:px-10 py-5">
            <div class="mt-2">
                <p class="text-lg text-gray-9 text-center">{{__('page.nowphase')}} : {{__('page.in_progress')}}</p>
                
                <ul class="mt-5 w-full text-lg text-gray-9 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full dark:border-gray-600">
                        <div class="grid grid-cols-2 px-4 md:px-20">
                            <div class="px-4 md:px-10">
                                <input checked id="upcoming" name="radio" type="radio" value="" class="w-4 h-4 text-primary-4 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="upcoming" class="text-lg text-gray-9 dark:text-gray-6">{{__('page.upcome')}}</label>
                            </div>
                            <div class="px-4 md:px-10">
                                <input id="progress" name="radio" type="radio" value="" class="w-4 h-4 text-primary-4 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="progress" class="text-lg text-gray-9 dark:text-gray-6">{{__('page.in_progress')}}</label>
                            </div>
                            <div class="px-4 md:px-10">
                                <input id="reviewing" name="radio" type="radio" value="" class="w-4 h-4 text-primary-4 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="reviewing" class="text-lg text-gray-9 dark:text-gray-6">{{__('page.review')}}</label>
                            </div>
                            <div class="px-4 md:px-10">
                                <input id="complete" name="radio" type="radio" value="" class="w-4 h-4 text-primary-4 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="complete" class="text-lg text-gray-9 dark:text-gray-6">{{__('page.complete')}}</label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mt-5 flex justify-center">
                <button type="submit" class="block w-80 md:w-auto border border-neutral-8 rounded-md bg-white px-3.5 text-center text-xl text-neutral-8 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('page.save_phase')}}</button>
            </div>
            <div class="mt-5 flex justify-center">
                <button type="submit" class="block w-80 md:w-auto border border-neutral-8 rounded-md bg-white px-3.5 py-2 text-center text-2xl text-neutral-8 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('page.create_qr')}}</button>
            </div>
        </div>
    </div>
    <div class="relative overflow-x-auto px-4 md:px-20">
        <h3 class="text-2xl py-10 text-gray-9">{{__('page.check')}}</h3>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-lg text-gray-9 font-semibold dark:bg-gray-700 dark:text-gray-400">
                <tr class="border-b border-gray-9">
                    <th scope="col" class="px-6 py-3">
                        {{__('page.name')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('page.age')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('page.gender')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('page.moblie_phone')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('page.address')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('page.status')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('page.time')}}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b border-gray-9 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-9 whitespace-nowrap dark:text-white">
                        คำมี คำซา
                    </th>
                    <td class="px-6 py-4">
                        90
                    </td>
                    <td class="px-6 py-4">
                        ชาย
                    </td>
                    <td class="px-6 py-4">
                        099-9999999 </td>
                    <td class="px-6 py-4">
                        BKK </td>
                    <td class="px-6 py-4">
                        Checked </td>
                    <td class="px-6 py-4">
                        16:20:56 </td>
                </tr>
                <tr class="bg-white border-b border-gray-9 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-9 whitespace-nowrap dark:text-white">
                        ปีเตอร์สโมค </th>
                    <td class="px-6 py-4">
                        21
                    </td>
                    <td class="px-6 py-4">
                        ชาย </td>
                    <td class="px-6 py-4">
                        099-9999998 </td>
                    <td class="px-6 py-4">
                        BKK </td>
                    <td class="px-6 py-4">
                        Check - Out </td>
                    <td class="px-6 py-4">
                        16:25:56 </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-guest-layout>
