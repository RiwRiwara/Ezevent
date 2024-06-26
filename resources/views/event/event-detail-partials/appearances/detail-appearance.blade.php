<div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
    <div class="flex flex-col justify-center text-center">
        <h1 class="text-4xl text-center font-bold mb-4 mt-2 text-neutral-8">
            {{__("event.menu-event.menu-event4")}}
        </h1>
        <p>
            {{__("event.appr_page.appr_info")}}
        </p>
    </div>



    <div class="flex flex-col gap-4 mt-10 rounded-lg my-5 border-2 border-gray-1 p-2">
        <h1 class="text-xl text-center font-bold mb-3 mt-2 text-neutral-8">
            <a onclick="smoothScroll('#banner')"># Main Banner</a>
        </h1>
        <div class="grid grid-cols-2 items-start" id="banner">
            <div class="flex justify-center">

                <div class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
                    <div class="h-[32px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                    <div class="h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                    <div class="h-[64px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                    <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800">
                        <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter">
                            <a href="#">
                                <img id="banner_image_preview" class="rounded-lg object-cover" style="height: 572px;width: 272px;" src="{{$event->getBannerImage()}}" alt="image description">
                            </a>
                            <figcaption class="absolute px-4 py-3 text-lg text-bold text-white bottom-0.5 opacity-80 w-full" id="banner_title" style="background-color: {{$event->banner_text_bg}} ;color: {{$event->banner_text_color}};">
                                <p class="font-semibold text-xs mb-0.5">
                                    {{$event->getCategoriesForShow()}}
                                </p>
                                <p class="font-bold text-xl mb-0.5">
                                    {{$event->event_name}}
                                </p>
                                <p class=" text-xs mb-0.5">
                                    Date : {{$event->getDateStart()}} - {{$event->getDateEnd()}}
                                </p>
                                <p class=" text-xs mb-0.5">
                                    Time : {{$event->getTimeStart()}} - {{$event->getTimeEnd()}}
                                </p>
                                <div class="flex flex-row gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <div class="text-xs">{{$event->placename}}</d>
                                    </div>

                            </figcaption>
                        </figure>

                    </div>
                </div>




            </div>
            <div class="flex flex-col gap-3">

                <div class="p-2 rounded-lg border-2 border-gray-1">
                    <a class="text-md font-bold text-neutral-9 mb-3">
                        {{__("event.appr_page.banner_img")}}
                    </a>
                    <form action="{{route('event-detail-banner-image-upload', $event->event_id)}}" method="POST" class="mt-2 flex flex-col gap-3" enctype="multipart/form-data" id="banner_image_form">
                        @csrf
                        <input onchange="previewImage(event)" name="banner_image" class="block w-full text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="banner_image" type="file">

                        <div class="flex justify-end ">
                            <x-button.btn-neutral type="submit">
                                {{__('event.save')}}
                            </x-button.btn-neutral>
                        </div>
                    </form>
                </div>

                <form action="{{route('event-detail-banner-setting', $event->event_id)}}" method="POST" class="p-2 rounded-lg border-2 border-gray-1 flex flex-col gap-3">
                    @csrf

                    <div>
                        <a class="text-md font-bold text-neutral-9 mb-3">
                            {{__("event.appr_page.bg_color")}}

                        </a>
                        <div class="mt-2 flex flex-col gap-3">
                            <x-forms.color-picker defaultValue="{{$event->banner_text_bg}}" name="text_background_color" from="text-bg-color" target_id="banner_title" />
                        </div>
                    </div>

                    <div>
                        <a class="text-md font-bold text-neutral-9 mb-3">
                            {{__("event.appr_page.text_color")}}
                        </a>
                        <div class="mt-2 flex flex-col gap-3">
                            <x-forms.color-picker defaultValue="{{$event->banner_text_color}}" name="banner_text_color" from="text-color" target_id="banner_title" />
                        </div>
                    </div>

                    <div class="flex justify-end ">
                        <x-button.btn-neutral type="submit">
                            {{__('event.save')}}
                        </x-button.btn-neutral>
                    </div>
                </form>


            </div>

        </div>

    </div>

    <form action="{{route('event-detail-content-update', $event->event_id)}}" method="POST" class="flex flex-col gap-4 mt-10 rounded-lg my-5 border-2 border-gray-1 p-2">
        @csrf
        <h1 class="text-xl text-center font-bold mb-3 mt-2 text-neutral-8">
            <a onclick="smoothScroll('#banner')"># Event Content</a>
        </h1>
        <x-forms.rich-text name="content" value="{{$event->content}}" label="content" />
        <div class="flex justify-end ">
            <x-button.btn-neutral type="submit">
                {{__('event.save')}}
            </x-button.btn-neutral>
        </div>
    </form>

    <script>
        function handleColorChange(from, targetId, color) {
            if (from === 'text-bg-color') {
                document.getElementById(targetId).style.backgroundColor = color
            } else if (from === 'text-color') {
                document.getElementById(targetId).style.color = color
            }
        }

        function previewImage(event) {
            const input = event.target;
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                const banner_image_preview = document.getElementById('banner_image_preview');
                banner_image_preview.src = reader.result;
            };

            reader.readAsDataURL(file);
        }
    </script>



</div>