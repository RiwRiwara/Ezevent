            <!-- Edit user modal -->
            <div id="form_modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            {{ $application->user->first_name }} | 

                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="form_modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                    <input type="text" name="first-name" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-neutral-6 focus:border-neutral-6 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5" placeholder="Bonnie" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                    <input type="text" name="last-name" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-neutral-6 focus:border-neutral-6 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5" placeholder="Green" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-neutral-6 focus:border-neutral-6 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5" placeholder="example@company.com" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                    <input type="number" name="phone-number" id="phone-number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-neutral-6 focus:border-neutral-6 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5" placeholder="e.g. +(12)3456 789" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                    <input type="text" name="department" id="department" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-neutral-6 focus:border-neutral-6 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5" placeholder="Development" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                    <input type="number" name="company" id="company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-neutral-6 focus:border-neutral-6 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5" placeholder="123456" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                                    <input type="password" name="current-password" id="current-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-neutral-6 focus:border-neutral-6 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5" placeholder="••••••••" required="">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                                    <input type="password" name="new-password" id="new-password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-neutral-6 focus:border-neutral-6 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5" placeholder="••••••••" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit" class="text-white bg-neutral-7 hover:bg-neutral-8 focus:ring-4 focus:outline-none focus:ring-neutral-3 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-neutral-6 dark:hover:bg-neutral-7 dark:focus:ring-neutral-8">Save all</button>
                        </div>
                    </form>
                </div>
            </div>