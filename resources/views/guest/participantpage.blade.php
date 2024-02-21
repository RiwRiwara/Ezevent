สุก<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary-5 dark:text-gray-200 leading-tight">
            {{ __('Ezevent') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 py-10">
            <h3 class="text-2xl text-gray-9">{{__('page.filter_customer')}}</h3>
            <div class="grid justify-items-end">
            <select class="border-none ml-2 mr-10 font-bold">
                                <option value="filter1">Sort by</option>
                                <option value="filter2">เรียงตามตัวอักษร</option>
                                <option value="filter3">ใหม่สุด-เก่าสุด</option>
                            </select>
            </div>
        </div>
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
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b border-gray-9 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-9 whitespace-nowrap dark:text-white">
                        คำมา คำซี
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
                    <td class="px-6 py-4 text-primary-5">
                        Waiting </td>
                    <td class="py-4 flex flex-row space-x-8">
                        <button type="submit" class="block w-24 h-6 rounded-md border border-neutral-9 text-neutral-9 text-center text-xl shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Dismiss</button>
                        <button type="submit" class="block w-24 h-6 rounded-md border border-neutral-9 text-neutral-9 text-center text-xl shadow-sm hover:bg-neutral-7 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-7">Detail</button>
                    </td>
                </tr>
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
                    <td class="px-6 py-4 text-success-8 ">
                        Approved </td>
                    <td class="py-4 flex flex-row space-x-8">
                        <button type="submit" class="block w-24 h-6 rounded-md border border-neutral-9 text-neutral-9 text-center text-xl shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Dismiss</button>
                        <button type="submit" class="block w-24 h-6 rounded-md border border-neutral-9 text-neutral-9 text-center text-xl shadow-sm hover:bg-neutral-7 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-7">Detail</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>
```