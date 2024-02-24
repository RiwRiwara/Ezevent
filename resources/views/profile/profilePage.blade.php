<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-neutral-8 dark:text-gray-200 leading-tight">
            {{ __('My profile') }}
        </h2>
    </x-slot>

    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2 px-5 shadow-sm shadow-neutral-7 mb-10 rounded-md hover:shadow-success-3 ease-in duration-200 ">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-neutral-4">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto" src="https://static.vecteezy.com/system/resources/previews/005/544/718/non_2x/profile-icon-design-free-vector.jpg" alt="">

                    </div>

                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$user->first_name}} {{$user->last_name}} </h1>

                    <div class="flex flex-row gap-1 my-1">
                        <span class="bg-neutral-1 hover:bg-neutral-2 text-neutral-8 text-xs font-semibold me-2 px-2 py-0.5 rounded dark:bg-gray-700 dark:text-neutral-4 border border-neutral-4 inline-flex items-center justify-center">Organizer</span>
                        <span class="bg-primary-1 hover:bg-primary-2 text-primary-8 text-xs font-semibold me-2 px-2 py-0.5 rounded dark:bg-gray-700 dark:text-primary-4 border border-primary-4 inline-flex items-center justify-center">Participant</span>
                    </div>

                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit.
                        Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>

                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <div class="px-5 py-8 shadow-sm shadow-neutral-7 mb-10 rounded-md hover:shadow-success-3 ease-in duration-200 ">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-neutral-5">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <div class="flex flex-row gap-2">
                            <span class="tracking-wide text-lg">Basic infomation</span>
                            <svg data-tooltip-target="tooltip-light" data-tooltip-style="light" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.6-8.5h0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div id="tooltip-light" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            Click / tap at field to edit
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <hr class="mt-2 mb-5">
                    <div class="text-gray-8">
                        <div class="grid md:grid-cols-2 text-md gap-4">

                            <x-forms.editable-field nameShow="first_name" label_show="{{__('field_name.first_name')}}">
                                <x-slot name="slot1">
                                    <x-forms.input-outline-primary @click="show_first_name = !show_first_name" name="first_name" classinput="cursor-alias" readonly label="{{__('field_name.first_name')}}" type="text" value="{{$user->first_name}} " />
                                </x-slot>
                                <x-slot name="slot2">
                                    <x-forms.input-outline-primary :isHighlight="true" name="edit_first_name" label="{{__('field_name.first_name')}}" type="text" value="{{$user->first_name}} " />
                                </x-slot>
                            </x-forms.editable-field>

                            <x-forms.editable-field nameShow="last_name" label_show="{{__('field_name.last_name')}}">
                                <x-slot name="slot1">
                                    <x-forms.input-outline-primary @click="show_last_name = !show_last_name" name="last_name" classinput="cursor-alias" readonly label="{{__('field_name.last_name')}}" type="text" value="{{$user->last_name}} " />
                                </x-slot>
                                <x-slot name="slot2">
                                    <x-forms.input-outline-primary :isHighlight="true" name="edit_last_name" label="{{__('field_name.last_name')}}" type="text" value="{{$user->last_name}} " />
                                </x-slot>
                            </x-forms.editable-field>


                            <x-forms.input-outline-primary name="gender" classinput="cursor-alias" readonly label="" type="text" value="{{$isThai ? $user->gender['name_th'] : $user->gender['name_en']}} " />



                            <div x-data="{ showDatePicker: false }" class="flex flex-col gap-2" >
                                <div x-show="!showDatePicker">
                                    <x-forms.input-outline-primary name="date_birth" readonly label="{{__('field_name.date_birth')}}" type="text" @click="showDatePicker = !showDatePicker" value="{{$user->date_of_birth['show']}}" classinput="cursor-copy" />
                                </div>
                                <div x-show="showDatePicker"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100"
                                >
                                    <form action="{{route('profile.update.field')}}" method="POST">
                                        @csrf
                                        <div class="flex flex-row gap-2">
                                            <x-forms.date-picker name="edit_date_birth" placeholder="{{__('field_name.select_date_birth')}}" value="{{$user->date_of_birth['show']}}" />
                                            <button type="submit">
                                                <svg class="w-[21px] h-[21px] text-success-4 dark:text-white hover:text-success-7 hover:animate-bounce" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                            </button>
                                            <button id="cancelButton_date_birth" type="button" @click="showDatePicker = !showDatePicker">
                                                <svg class="w-[21px] h-[21px] text-gray-3 dark:text-white hover:text-gray-7 hover:animate-bounce" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4" />
                                                </svg>
                                            </button>

                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="px-5 py-8 shadow-sm shadow-neutral-7 mb-10 rounded-md hover:shadow-success-3 ease-in duration-200 ">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-neutral-5">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <div class="flex flex-row gap-2">
                            <span class="tracking-wide text-lg">Account information</span>
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.6-8.5h0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                    </div>
                    <hr class="mt-2 mb-5">
                    <div class="text-gray-8">
                        <div class="grid md:grid-cols-2 text-md gap-4">
                            <x-forms.input-outline-primary name="phone" label="" type="text" disabled value="{{$user->mobile_number}} " />
                            <x-forms.input-outline-primary name="email" label="" type="text" disabled value="{{$user->email}} " />

                        </div>
                    </div>

                </div>
                <!-- End of about section -->

            </div>
        </div>
    </div>



</x-app-layout>