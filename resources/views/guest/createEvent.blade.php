<x-app-layout>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-primary-5 dark:text-gray-200 leading-tight">
      {{ __('Ezevent') }}
    </h2>
  </x-slot>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="container px-10 mx-auto pt-8 grid grid-cols-1 gap-8 sm:grid-cols-2">
      <!-- left-content -->
      <div class="col-span-1 border-2 border-neutral-8 rounded-lg p-4 bg-gray-0">
        <h1 class="text-xl font-bold">{{__('event.detail')}}</h1>
        <x-forms.input-outline-primary name="event_name" label="{{__('event.event_name')}}" type="text" />
        <!-- Check box -->
        <div class="grid grid-cols-2">
          <div>
            <h3 class="pt-4 mb-4">{{__('event.select_type')}}</h3>
            <ul class="">
              <li class=" ">
                <x-forms.checkbox id="entertainment" name="entertainment" label="{{__('event.type.entertainment')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="education" name="education" label="{{__('event.type.education')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="charity" name="charity" label="{{__('event.type.charity')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="seminar" name="seminar" label="{{__('event.type.seminar')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="funny" name="funny" label="{{__('event.type.funny')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="finance" name="finance" label="{{__('event.type.finance')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="game" name="game" label="{{__('event.type.game')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="exhibition" name="exhibition" label="{{__('event.type.exhibition')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="art" name="art" label="{{__('event.type.art')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="technology" name="technology" label="{{__('event.type.technology')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="other" name="other" label="{{__('event.type.other')}}"/>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="pt-4 mb-4">{{__('event.select_badge')}}</h3>
            <ul class="">
              <li class=" ">
                <x-forms.checkbox id="communication" name="communication" label="{{__('event.badge.communication')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="problem" name="problem" label="{{__('event.badge.problem')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="learning" name="learning" label="{{__('event.badge.learning')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="teamwork" name="teamwork" label="{{__('event.badge.teamwork')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="thinking" name="thinking" label="{{__('event.badge.thinking')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="leadership" name="leadership" label="{{__('event.badge.leadership')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="knowledge" name="knowledge" label="{{__('event.badge.knowledge')}}"/>
              </li>
              <li class=" ">
                <x-forms.checkbox id="professional" name="professional" label="{{__('event.badge.professional')}}"/>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- right-content -->
      <div>
        <div class="mb-4 py-5 col-span-1 border-2 border-neutral-8 rounded-lg p-4 bg-gray-0">
          <h1 class="text-xl font-bold">{{__('event.datetime')}}</h1>
          <div class="mb-4">
            <label for="start-date" class="text-lg">{{__('event.date_start')}}</label>
          </div>
          <div class="mb-4 flex gap-4">
            <x-forms.date-picker name="date_start" placeholder="{{__('event.datestart')}}" />
            <x-forms.time-picker name="date_start" placeholder="{{__('Start Time')}}" />
          </div>
          <div class="mb-4">
            <label for="end-date" class="text-lg">{{__('event.date_end')}}</label>
          </div>
          <div class="mb-4 flex gap-4">
            <x-forms.date-picker name="date_birth" placeholder="{{__('event.dateend')}}" />
            <x-forms.time-picker name="date_start" placeholder="{{__('End Time')}}" />
          </div>
        </div>
        <div class="mb-4 col-span-1 border-2 border-neutral-8 rounded-lg p-4 bg-gray-0">
          <h1 class="text-xl font-bold">{{__('event.location')}}</h1>
          <div class="mb-4 flex flex-col">
            <p class="text-lg">{{__('event.text_location1')}}</p>
            <div class="inline-flex rounded-md gap-4" role="group">
              <button type="button" class="w-full px-4 py-2 text-sm font-medium text-gray-9 bg-transparent border border-gray-9 rounded-lg hover:bg-gray-9 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-9 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
              {{__('event.venue')}}
              </button>
              <button type="button" class="w-full px-4 py-2 text-sm font-medium text-gray-9 bg-transparent border border-gray-9 rounded-lg hover:bg-gray-9 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-9 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
              {{__('event.online')}}
              </button>
            </div>
          </div>
          <div class="mb-4">
            <label for="address" class="text-lg">{{__('event.text_location2')}}</label>
            <div class="mt-2.5">
              <x-forms.textarea-outline-primary name="address" label="{{__('field_name.address')}}" placeholder="{{__('field_name.add_address')}}" />
            </div>
          </div>
        </div>
        <div class="mt-10">
          <button type="submit" class="block w-full rounded-md bg-neutral-8 px-3.5 py-2.5 text-center text-xl font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('event.save')}}</button>
        </div>
      </div>

    </div>
  </div>

</x-app-layout>