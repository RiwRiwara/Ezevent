<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary-5 dark:text-gray-200 leading-tight">
            {{ __('Ezevent') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6">
        <div class="grid grid-cols-12 gap-6 ">
            <div class="col-span-12 md:col-span-12 ">
                <div class="bg-white dark:bg-gray-800 rounded-lg overflow-hidden flex justify-center items-center">
                    <img class="h-20 w-20 rounded-full items-center" src="https://avatars.githubusercontent.com/u/35387401?v=4" alt="Profile Image" />
                    <h2 class="text-l font-bold ml-3">awirut</h2>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4 ">
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden mt-6 md:mt-0">
                    <div class="p-4">
                        <!-- <h3 class="text-lg font-semibold text-primary-5 dark:text-gray-200 mb-2">Personal Information</h3> -->
                        <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1" for="name">First Name:</label>
                        <input type="text" id="name" name="name" class="border border-gray-300 dark:border-gray-700 rounded-md p-2 w-full mb-2" value="John">
                        <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1" for="name">Last Name:</label>
                        <input type="text" id="name" name="name" class="border border-gray-300 dark:border-gray-700 rounded-md p-2 w-full mb-2" value="John Doe">
                        <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1" for="email">Email:</label>
                        <input type="email" id="email" name="email" class="border border-gray-300 dark:border-gray-700 rounded-md p-2 w-full mb-2" value="john@example.com">
                        <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1" for="location">Mobile Number:</label>
                        <input type="text" id="location" name="location" class="border border-gray-300 dark:border-gray-700 rounded-md p-2 w-full mb-2" value="089 999 9999">
                        <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1" for="location">Gender:</label>
                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <button type="button" class="px-10 py-2 text-sm font-medium text-gray-900 bg-transparent border-2 border-neutral-2 hover:border-primary-3 rounded-s-lg hover:bg-primary-3 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-primary-3 dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                Female
                            </button>
                            <button type="button" class="px-10 py-2 text-sm font-medium text-gray-900 bg-transparent border-2 border-neutral-2 hover:border-primary-3 hover:bg-primary-3 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-primary-3 dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                Male
                            </button>
                            <button type="button" class="px-10 py-2 text-sm font-medium text-gray-900 bg-transparent border-2 border-neutral-2 hover:border-primary-3 rounded-e-lg hover:bg-primary-3 focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-primary-3 dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                LGBTQA+
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-span-12 md:col-span-4 ">
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden mt-6 md:mt-0">
                    <div class="p-4">
                        <!-- <h3 class="text-lg font-semibold text-primary-5 dark:text-gray-200 mb-2">Contact Information</h3> -->
                        <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1" for="phone">Province:</label>
                        <input type="text" id="phone" name="phone" class="border border-gray-300 dark:border-gray-700 rounded-md p-2 w-full mb-2" value="+1234567890">
                        <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1" for="address">District:</label>
                        <input type="text" id="address" name="address" class="border border-gray-300 dark:border-gray-700 rounded-md p-2 w-full mb-2" value="123 Main St">
                        <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1" for="address">Sub-District:</label>
                        <input type="text" id="address" name="address" class="border border-gray-300 dark:border-gray-700 rounded-md p-2 w-full mb-2" value="123 Sub Main St">
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4 ">
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden mt-6 md:mt-0">
                    <div class="p-4">

                        <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1" for="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" class="border border-gray-300 dark:border-gray-700 rounded-md p-2 w-full mb-2" value="+1234567890">
                        <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1" for="address">Address:</label>
                        <input type="text" id="address" name="address" class="border border-gray-300 dark:border-gray-700 rounded-md p-2 w-full mb-2" value="123 Main St">
                        <button type="submit" class="mg-1 block w-full rounded-md bg-neutral-8 px-3.5 py-2.5 text-center text-xl font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ">{{__('event.save')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
