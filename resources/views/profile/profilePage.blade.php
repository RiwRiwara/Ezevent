<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <x-breadcrumb :items="$page_data['breadcrumbItems']" />
        </div>
    </x-slot>



    <div class="flex justify-center md:items-center h-screen">

        <div class="container mx-auto md:my-10 px-5 py-7 md:w-5/12 bg-neutral-0 rounded-md">

            <div class="no-wrap md:-mx-2 my-2 ">

                <div class="flex justify-center items-center">
                    <div class=" w-4/6 md:w-3/12 ">
                        <form action="{{ route('upload-profile-img') }}" method="POST">
                            @csrf
                            <input type="file" name="image" class="filepond profile-img-upload hover:scale-105 duration-300 cursor-pointer " name="image" accept="image/png, image/jpeg, image/gif" />
                            <button 
                            data-tooltip-target="uploadpImg" data-tooltip-style="light"
                            type="submit" class="w-full relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-neutral-3 to-neutral-7 group-hover:from-neutral-3 group-hover:to-neutral-7 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-neutral-2 dark:focus:ring-neutral-8">
                                <span class="w-full text-neutral-7 hover:text-neutral-0 relative px-2 py-1 transition-all ease-in duration-300 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    {{__('field_name.save')}}
                                </span>
                            </button>
                            <div id="uploadpImg" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm  text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                <div>เพื่อทำการอัพโหลดควรลบรูปภาพเดิมทุกครั้ง</div>
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="w-full mx-2 ">
                    <div class="px-5 py-2 mb-8  ">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                            <span clas="text-neutral-5">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <div class="flex flex-row gap-2">
                                <span class="tracking-wide text-lg">Basic infomation</span>
                                <svg data-tooltip-target="tooltip-light" data-tooltip-style="light" class="cursor-help w-6 h-6 text-gray-6 dark:text-white hover:text-gray-9 hover:scale-110 duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 11h2v5m-2 0h4m-2.6-8.5h0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
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

                                <livewire:editable-field fieldName="first_name" label_show="{{__('field_name.first_name')}}" />
                                <livewire:editable-field fieldName="last_name" label_show="{{__('field_name.last_name')}}" />

                                <livewire:editable-field-dropdown fieldName="gender" label_show="{{__('field_name.gender')}}" optionsObject="{{json_encode($page_data['gender'])}}" />


                                <div x-data="{ showDatePicker: false }" class="flex flex-col gap-2">
                                    <div x-show="!showDatePicker" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                        <x-forms.input-outline-primary name="date_of_birth" readonly label="{{__('field_name.date_birth')}}" type="text" @click="showDatePicker = !showDatePicker" value="{{$user->date_of_birth['show']}}" classinput="cursor-copy" />
                                    </div>
                                    <div x-show="showDatePicker" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                        <form action="{{route('profile.update.field')}}" method="POST">
                                            @csrf
                                            <div class="flex flex-row gap-2">
                                                <input type="hidden" name="updatedField" value="date_of_birth" />
                                                <input type="hidden" name="label_show" value="{{__('field_name.date_birth')}}" />
                                                <x-forms.date-picker name="edit_date_of_birth" placeholder="{{__('field_name.select_date_birth')}}" value="{{$user->date_of_birth['show']}}" />
                                                <button type="submit">
                                                    <svg class="w-[21px] h-[21px] text-success-4 dark:text-white hover:text-success-7 hover:scale-110 duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>
                                                </button>
                                                <button id="cancelButton_date_birth" type="button" @click="showDatePicker = !showDatePicker">
                                                    <svg class="w-[21px] h-[21px] text-gray-3 dark:text-white hover:text-gray-7 hover:scale-110 duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
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

                    <div class="px-5 py-2  ">
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
                                <x-forms.input-outline-primary name="phone" label="" type="text" disabled value="{{$user->mobile_number}}" />
                                <x-forms.input-outline-primary name="email" label="" type="text" disabled value="{{$user->email}}" />

                            </div>
                        </div>

                    </div>
                    <!-- End of about section -->

                </div>
            </div>
        </div>
    </div>

    <script type="module">
        // FilePond
        const update_profile = document.querySelector('input[type="file"].profile-img-upload');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const customOptions = {
            files: [{
                source: '{{$user->profile_img}}',
                options: {
                    'X-CSRF-TOKEN': csrfToken,
                    type: 'local',
                }
            }],

            labelIdle: `<div class="cursor-pointer">Drag & Drop your picture or <span class="font-bold underline hover:text-neutral-6 duration-300 ">Browse</span></div>`,
            imagePreviewHeight: 100,
            imageCropAspectRatio: '1:1',
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 250,
            stylePanelLayout: 'circle',
            styleLoadIndicatorPosition: 'center bottom',
            allowMultiple: false,
            allowDrop: true,
            allowReplace: true,
            server: {
                process: {
                    url: './uploads/process',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    withCredentials: false,
                },
                load: {
                    url: './load-profile-img/',
                    method: 'GET',
                    withCredentials: false,
                    onload: (response) => {
                        return response;
                    },
                    onerror: (response) => {
                        
                    }
                },
                
            },
        };
        var profileimage = filepond.createFilePond(update_profile, customOptions);
    </script>

</x-app-layout>