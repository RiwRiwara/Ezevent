<x-app-layout>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-primary-5 dark:text-gray-200 leading-tight">
      {{ __('Ezevent') }}
    </h2>
  </x-slot>

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <h2 class="text-xl px-20 py-5 text-left text-gray-9">Create New Event</h2>
    <div class="container px-10 mx-auto pt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">

      <!-- left-content -->
      <div class="col-span-1 border-2 border-neutral-8 rounded-lg p-4 bg-gray-0">
        <h1 class="text-xl font-bold">Detail</h1>
        <x-forms.input-outline-primary name="event_name" label="Event Name" type="text" />
        <!-- Check box -->
        <div class="grid grid-cols-2">
          <div>
            <h3 class="pt-4 mb-4">Select Type</h3>
            <ul class="w-full text-sm font-medium text-gray-9 bg-white border border-gray-6 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="entertainment" name="entertainment" />
                  <label for="entertainment" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Entertainment</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="education" name="education" />
                  <label for="education" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Education</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="charity" name="charity" />
                  <label for="charity" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Charity</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="seminar" name="seminar" />
                  <label for="seminar" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Seminar</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="funny" name="funny" />
                  <label for="funny" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Funny</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="finance" name="finance" />
                  <label for="finance" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Finance &
                    Accounting</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="game" name="game" />
                  <label for="game" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Game &
                    E-sports</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="exhibition" name="exhibition" />
                  <label for="exhibition" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Exhibition</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="art" name="art" />
                  <label for="art" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Art &
                    Design</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="technology" name="technology" />
                  <label for="technology" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Technology</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="other" name="other" />
                  <label for="other" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Other</label>
                </div>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="pt-4 mb-4">Select Badge</h3>
            <ul class="w-full text-sm font-medium text-gray-9 bg-white border border-gray-6 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="communication" name="communication" />
                  <label for="communication" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Communication Skill</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="problem" name="problem" />
                  <label for="problem" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Problem-Solving
                    Skill</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="learning" name="learning" />
                  <label for="learning" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Learning
                    Skill</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="teamwork" name="teamwork" />
                  <label for="teamwork" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Teamwork
                    Skill</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="thinking" name="thinking" />
                  <label for="thinking" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Thinking
                    Skill</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="leadership" name="leadership" />
                  <label for="leadership" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Leadership</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="knowledge" name="knowledge" />
                  <label for="knowledge" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Knowledge</label>
                </div>
              </li>
              <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
                <div class="flex items-center ps-3">
                  <x-forms.checkbox id="professional" name="professional" />
                  <label for="professional" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Professional Skill</label>
                </div>
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
              <textarea name="address" id="address" autocomplete="off" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-9 shadow-sm ring-1 ring-inset ring-gray-6 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
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