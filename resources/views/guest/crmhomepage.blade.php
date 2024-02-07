<x-guest-layout>
    @include('components.sidebar')
    <h1 class="text-3xl px-20 py-5 text-left text-primary-5">Ezevent</h1>
    <h2 class="text-2xl px-20 py-5 text-left text-gray-9">Junior Architecture CRM</h2>
    <!-- ใส่ Nav Bar ตรงเน้ -->

    <div class="relative overflow-x-auto px-20">
        <div class="grid grid-cols-2 py-10">
            <h3 class="text-2xl text-gray-9">Filter Customers:</h3>
            <div class="grid justify-items-end">
                <button type="submit" class="block w-72 h-12 rounded-md bg-neutral-9 text-center text-xl font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send Email</button>
            </div>
        </div>
        <div class="flex">
            <div>
                <h1>Name</h1>
                <x-forms.input-outline-primary name="event_name" label="Name" type="text" />
            </div>
            <div class="px-10">
                <h1>Mobile Phone</h1>
                <x-forms.input-outline-primary name="event_name" label="Mobile Phone" type="text" />
            </div>
            <div>
                <h1>Duty</h1>
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-2 border-neutral-2 hover:border-primary-3 rounded-s-lg hover:bg-primary-3 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-primary-3 dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                        Staff
                    </button>
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-2 border-neutral-2 hover:border-primary-3 rounded-e-lg hover:bg-primary-3 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-primary-3 dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                        Participant
                    </button>
                </div>

            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-lg text-gray-9 font-semibold dark:bg-gray-700 dark:text-gray-400">
                <tr class="border-b border-gray-9">
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Age
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gender
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Location
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time
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
```