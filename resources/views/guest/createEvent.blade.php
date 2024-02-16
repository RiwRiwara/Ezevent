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
        <h1 class="text-xl font-bold">Detail</h1>
        <x-forms.input-outline-primary name="event_name" label="Event Name" type="text" />
        <!-- Check box -->
        <div class="grid grid-cols-2">
          <div>
            <h3 class="pt-4 mb-4">Select Type</h3>
            <ul class="">
              <li class=" ">
                <x-forms.checkbox id="entertainment" name="entertainment" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="education" name="education" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="charity" name="charity" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="seminar" name="seminar" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="funny" name="funny" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="finance" name="finance" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="game" name="game" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="exhibition" name="exhibition" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="art" name="art" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="technology" name="technology" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="other" name="other" />
              </li>
            </ul>
          </div>
          <div>
            <h3 class="pt-4 mb-4">Select Badge</h3>
            <ul class="">
              <li class=" ">
                <x-forms.checkbox id="communication" name="communication" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="problem" name="problem" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="learning" name="learning" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="teamwork" name="teamwork" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="thinking" name="thinking" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="leadership" name="leadership" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="knowledge" name="knowledge" />
              </li>
              <li class=" ">
                <x-forms.checkbox id="professional" name="professional" />
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- right-content -->
      <div>
        <div class="mb-4 py-5 col-span-1 border-2 border-neutral-8 rounded-lg p-4 bg-gray-0">
          <h1 class="text-xl font-bold">Date & Time</h1>
          <div class="mb-4">
            <label for="start-date" class="text-lg">Start at Date</label>
          </div>
          <div class="mb-4 flex gap-4">
            <x-forms.date-picker name="date_start" placeholder="{{__('Start Date')}}" />
            <x-forms.time-picker name="date_start" placeholder="{{__('Start Time')}}" />
          </div>
          <div class="mb-4">
            <label for="end-date" class="text-lg">End at Date</label>
          </div>
          <div class="mb-4 flex gap-4">
            <x-forms.date-picker name="date_birth" placeholder="{{__('End Date')}}" />
            <x-forms.time-picker name="date_start" placeholder="{{__('End Time')}}" />
          </div>
        </div>
        <div class="mb-4 col-span-1 border-2 border-neutral-8 rounded-lg p-4 bg-gray-0">
          <h1 class="text-xl font-bold">Location</h1>
          <div class="mb-4 flex flex-col">
            <p class="text-lg">Where would you like to host an event?</p>
            <div class="inline-flex rounded-md gap-4" role="group">
              <button type="button" class="w-full px-4 py-2 text-sm font-medium text-gray-9 bg-transparent border border-gray-9 rounded-lg hover:bg-gray-9 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-9 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                Venue
              </button>
              <button type="button" class="w-full px-4 py-2 text-sm font-medium text-gray-9 bg-transparent border border-gray-9 rounded-lg hover:bg-gray-9 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-9 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                Online
              </button>
            </div>
          </div>
          <div class="mb-4">
            <label for="address" class="text-lg">Do you want to add venue location now?</label>
            <div class="mt-2.5">
              <x-forms.textarea-outline-primary name="address" label="{{__('field_name.address')}}" placeholder="{{__('field_name.add_address')}}" />
            </div>
          </div>
        </div>
        <div class="mt-10">
          <button type="submit" class="block w-full rounded-md bg-neutral-8 px-3.5 py-2.5 text-center text-xl font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </div>

    </div>
  </div>

</x-app-layout>