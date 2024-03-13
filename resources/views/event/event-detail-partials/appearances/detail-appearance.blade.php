<div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
    <div class="flex flex-col justify-center text-center">
        <h1 class="text-4xl text-center font-bold mb-4 mt-2 text-neutral-8">
            {{__("event.menu-event.menu-event4")}}
        </h1>
        <p>
            This is the appearance of the event screen is will show in mobile app.
        </p>
    </div>



    <div class="flex flex-col gap-4 mt-10 rounded-lg my-5 border-2 border-gray-1 p-2">
        <h1 class="text-xl text-center font-bold mb-3 mt-2 text-neutral-8">
            <a onclick="smoothScroll('#banner')"># Main Banner</a>
        </h1>
        <div class="grid grid-cols-2 items-start" id="banner">
            <div class="flex justify-center">

                <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter">
                    <a href="#">
                        <img id="banner_image_preview" class="rounded-lg object-cover" style="height: 600px;width: 430;" src="{{$event->getBannerImage()}}" alt="image description">
                    </a>
                    <figcaption class="absolute px-4 py-3 text-lg text-bold text-white bottom-0.5 opacity-80 w-full" id="banner_title" 
                    style="background-color: {{$event->banner_text_bg}}; color: {{$event->banner_text_color}};">
                        <p class="font-semibold text-sm mb-0.5">
                            {{$event->getCategoriesForShow()}}
                        </p>
                        <p class="font-bold text-3xl mb-0.5">
                            {{$event->event_name}}
                        </p>
                        <p class=" text-sm mb-0.5">
                            Date : {{$event->getDateStart()}} - {{$event->getDateEnd()}}
                        </p>
                        <p class=" text-sm mb-0.5">
                            Time : {{$event->getTimeStart()}} - {{$event->getTimeEnd()}}
                        </p>
                        <div class="flex flex-row gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <div class="text-sm">{{$event->placename}}</d>
                            </div>

                    </figcaption>
                </figure>



            </div>
            <div class="flex flex-col gap-3">

                <div class="p-2 rounded-lg border-2 border-gray-1">
                    <a class="text-md font-bold text-neutral-9 mb-3">
                        Banner image
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
                            Text Background Color
                        </a>
                        <div class="mt-2 flex flex-col gap-3">
                            <x-forms.color-picker defaultValue="{{$event->banner_text_bg}}" name="text_background_color" from="text-bg-color" target_id="banner_title" />
                        </div>
                    </div>

                    <div>
                        <a class="text-md font-bold text-neutral-9 mb-3">
                            Text Color
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

    <x-forms.rich-text name="appearance" value="{{$event->appearance}}" label="Appearance" />
    <script>
        function handleColorChange(from, targetId, color) {
            if (from === 'text-bg-color') {
                document.getElementById(targetId).style.backgroundColor = color
            } else if (from === 'text-color') {
                document.getElementById(targetId).style.color = color
            }
        }
    </script>

    <script>
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