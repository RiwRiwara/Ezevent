<x-app-layout>



  <x-slot name="title">
    {{__('page.create_event')}}
  </x-slot>

  <x-slot name="header">
    <div class="flex justify-center">
      <x-breadcrumb :items="$page_data['breadcrumbItems']" />
    </div>
  </x-slot>



  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="container px-10 mx-auto pt-8">

      <div class="  ">

        <h1 class="text-2xl text-center font-bold mb-4 mt-2 text-neutral-8">
          เพิ่มข้อมูลกิจกรรม
        </h1>

        <div class=" p-3 rounded-lg my-5 border-2 border-gray-1">
          <div class="my-2">
            <x-forms.input-outline-primary name="event_name" label="{{__('event.event_name')}}" type="text" />
          </div>

          <div class="my-2">

            <link href="/styles.css" rel="stylesheet" />
            <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css" />
            <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />

            <div id="toolbar-container">
              <span class="ql-formats">
                <select class="ql-font"></select>
                <select class="ql-size"></select>
              </span>
              <span class="ql-formats">
                <button class="ql-bold"></button>
                <button class="ql-italic"></button>
                <button class="ql-underline"></button>
                <button class="ql-strike"></button>
              </span>
              <span class="ql-formats">
                <select class="ql-color"></select>
                <select class="ql-background"></select>
              </span>
              <span class="ql-formats">
                <button class="ql-script" value="sub"></button>
                <button class="ql-script" value="super"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-header" value="1"></button>
                <button class="ql-header" value="2"></button>
                <button class="ql-blockquote"></button>
                <button class="ql-code-block"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-list" value="ordered"></button>
                <button class="ql-list" value="bullet"></button>
                <button class="ql-indent" value="-1"></button>
                <button class="ql-indent" value="+1"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-direction" value="rtl"></button>
                <select class="ql-align"></select>
              </span>
              <span class="ql-formats">
                <button class="ql-link"></button>
                <button class="ql-formula"></button>
              </span>
              <span class="ql-formats">
                <button class="ql-clean"></button>
              </span>
            </div>
            <div id="editor">
            </div>

            <!-- Initialize Quill editor -->
            <script>
              const quill = new Quill('#editor', {
                modules: {
                  syntax: true,
                  toolbar: '#toolbar-container',
                },
                placeholder: 'Compose an epic...',
                theme: 'snow',
              });
            </script>
            
          </div>

          <div class="flex flex-row gap-4 my-3">
            <div>
              <button data-modal-target="type-modal" data-modal-toggle="type-modal" class="text-md font-semibold px-4 py-2 bg-neutral-2 duration-300 text-neutral-9 rounded-md hover:bg-neutral-5 focus:outline-none focus:ring-2 focus:ring-neutral-5 focus:ring-opacity-50">
                เลือกประเภทกิจกรรม
              </button>
              <div id="type-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">

                  <div class=" flex items-center justify-between p-2 md:p-3 border-b rounded-t dark:border-gray-600 bg-neutral-0 my-4">
                    <h3 class=" text-2xl px-2 py-1 rounded-md font-semibold text-neutral-9 dark:text-white text-center">
                      เลือกประเภทกิจกรรม
                    </h3>

                    <button type="button" class=" text-gray-400  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="type-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                  </div>

                  <div class="flex flex-col gap-3">
                    @foreach ($page_data['event_types'] as $event_type)
                    <x-forms.checkbox id="{{$event_type->name_en}}" icon="{{$event_type->icon}}" name="{{$event_type->name_en}}" label="{{ app()->getLocale() === 'en' ? $event_type->name_en : $event_type->name_th }}" />
                    @endforeach
                  </div>

                </div>
              </div>
            </div>

            <div class="">
              <button data-modal-target="badge-modal" data-modal-toggle="badge-modal" class="text-md font-semibold px-4 py-2 bg-neutral-2 duration-300 text-neutral-9 rounded-md hover:bg-neutral-5 focus:outline-none focus:ring-2 focus:ring-primary-5 focus:ring-opacity-50">{{__('event.select_badge')}}</button>
              <div id="badge-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">

                  <div class=" flex items-center justify-between p-2 md:p-3 border-b rounded-t dark:border-gray-600 bg-neutral-0 my-4">
                    <h3 class=" text-2xl px-2 py-1 rounded-md font-semibold text-neutral-9 dark:text-white text-center">
                      {{__('event.select_badge')}}
                    </h3>

                    <button type="button" class=" text-gray-400  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="badge-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                  </div>

                  <div class="flex flex-col gap-3">
                    @foreach ($page_data['badge_types'] as $badge_type)
                    <x-forms.checkbox id="{{$badge_type->name_en}}" icon="{{$event_type->icon}}" name="{{$badge_type->name_en}}" label="{{ app()->getLocale() === 'en' ? $badge_type->name_en : $badge_type->name_th }}" />
                    @endforeach
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class=" p-3 rounded-lg my-5 border-2 border-gray-1">
          <h1 class="text-lg font-bold text-neutral-9 mb-3">{{__('event.datetime')}}</h1>
          <div class="mb-4 flex gap-4">
            <x-forms.date-picker name="date_start" placeholder="{{__('event.datestart')}}" />
            <x-forms.time-picker name="date_start" placeholder="{{__('Start Time')}}" />
          </div>
          <div class="mb-4 flex gap-4">
            <x-forms.date-picker name="date_birth" placeholder="{{__('event.dateend')}}" />
            <x-forms.time-picker name="date_start" placeholder="{{__('End Time')}}" />
          </div>
        </div>

        <div class="p-3 rounded-lg my-5 border-2 border-gray-1" x-data="{ selectedVenue: '' }">
          <h1 class="text-lg font-bold text-neutral-9 mb-3">{{__('event.location')}}</h1>
          <div class="mb-4 flex flex-col">
            <div class="inline-flex rounded-md gap-4" role="group">
              <button @click="selectedVenue = 'venue'" :class="{ 'bg-neutral-5': selectedVenue === 'venue', 'bg-neutral-2': selectedVenue !== 'venue' }" class="text-md font-semibold px-4 py-2 duration-300 text-neutral-9 rounded-md hover:bg-neutral-5 focus:outline-none focus:ring-2 focus:ring-neutral-5 focus:ring-opacity-50">
                {{__('event.venue')}}
              </button>
              <button @click="selectedVenue = 'online'" :class="{ 'bg-neutral-5': selectedVenue === 'online', 'bg-neutral-2': selectedVenue !== 'online' }" class="text-md font-semibold px-4 py-2 duration-300 text-neutral-9 rounded-md hover:bg-neutral-5 focus:outline-none focus:ring-2 focus:ring-neutral-5 focus:ring-opacity-50">
                {{__('event.online')}}
              </button>
            </div>
          </div>
          <div class="mt-3" x-show="selectedVenue === 'venue'">
            <x-forms.textarea-outline-primary name="address" label="{{__('field_name.address')}}" placeholder="{{__('field_name.add_address')}}" />
          </div>
        </div>

        <div class="flex justify-end">
          <x-button.neutral>
            {{__('event.save')}}
          </x-button.neutral>
        </div>


      </div>
    </div>
  </div>

</x-app-layout>