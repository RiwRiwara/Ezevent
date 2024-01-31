<x-guest-layout>
  @include('components.sidebar')
  <h1 class="text-3xl px-20 py-5 text-left text-primary-5">Ezevent</h1>
  <h2 class="text-xl px-20 py-5 text-left text-gray-9">Create New Event</h2>
  <div class="container px-10 mx-auto pt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
    <!-- left-content -->
    <div class="col-span-1 border border-gray-6 rounded-lg p-4">
      <h1 class="text-xl font-bold">Detail</h1>
      <x-forms.input-outline-primary name="event_name" label="Event Name" type="text" />
      <!-- Check box -->
      <div class="grid grid-cols-2">
        <div>
          <h3 class="pt-4 mb-4">Select Type</h3>
          <ul class="w-48 text-sm font-medium text-gray-9 bg-white border border-gray-6 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="entertainment" name="entertainment" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="entertainment" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Entertainment</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="education" name="education" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="education" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Education</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="charity" name="charity" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="charity" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Charity</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="seminar" name="seminar" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="seminar" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Seminar</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="funny" name="funny" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="funny" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Funny</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="finance" name="finance" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="finance" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Finance & Accounting</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="game" name="game" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="game" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Game & E-sports</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="exhibition" name="exhibition" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="exhibition" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Exhibition</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="art" name="art" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="art" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Art & Design</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="technology" name="technology" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="technology" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Technology</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="other" name="other" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="other" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Other</label>
              </div>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="pt-4 mb-4">Select Badge</h3>
          <ul class="w-48 text-sm font-medium text-gray-9 bg-white border border-gray-6 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="communication" name="communication" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="communication" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Communication Skill</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="problem" name="problem" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="problem" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Problem-Solving Skill</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="learning" name="learning" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="learning" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Learning Skill</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="teamwork" name="teamwork" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="teamwork" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Teamwork Skill</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="thinking" name="thinking" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="thinking" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Thinking Skill</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="leadership" name="leadership" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="leadership" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Leadership</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="knowledge" name="knowledge" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="knowledge" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Knowledge</label>
              </div>
            </li>
            <li class="w-full border-b border-gray-6 rounded-t-lg dark:border-gray-600">
              <div class="flex items-center ps-3">
                <input id="professional" name="professional" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="professional" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Professional Skill</label>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- right-content -->
    <div>
      <div class="mb-4 py-5 col-span-1 border border-gray-6 rounded-lg p-4">
        <h1 class="text-xl font-bold">Date & Time</h1>
        <div class="mb-4">
          <label for="start-date" class="text-lg">Start at Date</label>
        </div>
        <div class="mb-4 flex gap-4">
          <input type="date" class="w-full form-control px-2.5 pb-2.5 pt-4 text-md text-gray-9 bg-transparent rounded-lg border-1 border-gray-6 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-neutral-9 peer" id="start-date">
          <input type="time" class="w-full form-control px-2.5 pb-2.5 pt-4 text-md text-gray-9 bg-transparent rounded-lg border-1 border-gray-6 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-neutral-9 peer" id="start-time">
        </div>
        <div class="mb-4">
          <label for="end-date" class="text-lg">End at Date</label>
        </div>
        <div class="mb-4 flex gap-4">
          <input type="date" class="w-full form-control px-2.5 pb-2.5 pt-4 text-md text-gray-9 bg-transparent rounded-lg border-1 border-gray-6 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-neutral-9 peer" id="end-date">
          <input type="time" class="w-full form-control px-2.5 pb-2.5 pt-4 text-md text-gray-9 bg-transparent rounded-lg border-1 border-gray-6 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-neutral-9 peer" id="end-time">
        </div>
      </div>
      <div class="mb-4 col-span-1 border border-gray-6 rounded-lg p-4">
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
</x-guest-layout>