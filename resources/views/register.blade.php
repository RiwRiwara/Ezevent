<x-guest-layout>
  <!-- register page1 -->
  <link rel="icon" href="{{ env('RESOURECE_ASSET_URL') }}/images/logo-small.png">
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex flex-row items-center justify-center">
      <img class="h-15 w-auto" src="{{ env('RESOURECE_ASSET_URL') }}/images/Logo(Orange).png" alt="Logo">
      <h2 class="ml-4 text-3xl font-bold leading-9 tracking-tight text-neutral-9">Create New Account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST">
        <div>
          <label class="block text-sm font-medium leading-6 text-primary-9">* Create new account, you can
            update them after</label>
          <div class="mt-2">
            <input placeholder='Mobile number'
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <input placeholder='Firstname*'
              class="mt-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <input placeholder='lastname*'
              class="mt-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <input placeholder='Gender*'
              class="mt-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          <label class="block text-sm font-medium leading-6 text-primary-9">* Date of birth</label>
          <div class="mt-2">
            <div class="flex space-x-2">
              <select
                class="w-1/3 rounded-md border-0 py-1.5 text-neutral-8 placeholder:text-neutral-8 shadow-sm ring-1 ring-inset ring-neutral-9 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="" disabled selected>Day</option>
                @for ($day = 1; $day <= 31; $day++) <option value="{{ $day }}">{{ $day }}</option>
                  @endfor
              </select>
              <select
                class="w-1/3 rounded-md border-0 py-1.5 text-neutral-8 placeholder:text-neutral-8 shadow-sm ring-1 ring-inset ring-neutral-9 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="" disabled selected>Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
              <select
                class="w-1/3 rounded-md border-0 py-1.5 text-neutral-8 placeholder:text-neutral-8 shadow-sm ring-1 ring-inset ring-neutral-9 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="" disabled selected>Year</option>
                @for ($year = date('Y'); $year >= 1900; $year--)
                <option value="{{ $year }}">{{ $year }}</option>
                @endfor
              </select>
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium leading-6 text-primary-9">More Information</label>
            <label class="block text-sm font-medium leading-6 text-primary-9">* you can give more detail for
              better profile </label>
            <div class="mt-2">
              <input placeholder='Address1*'
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <input placeholder='Province*'
                class="mt-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <input placeholder='Distinct*'
                class="mt-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <input placeholder='Posecode*'
                class="mt-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <div>
              <button type="submit"
                class="mt-20 flex w-full justify-center rounded-md bg-neutral-9 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-neutral-7">Next</button>
            </div>
      </form>
    </div>
  </div>
  <!-- register page2 -->
  <!-- <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm flex flex-row items-center justify-center">
      <img class="h-15 w-auto" src="{{ env('RESOURECE_ASSET_URL') }}/images/Logo(Orange).png" alt="Logo">
      <h2 class="ml-4 text-3xl font-bold leading-9 tracking-tight text-neutral-9">Create New Account</h2>
    </div>


    <div class="mt-16 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST">
        <div>
          <label class="block text-sm font-medium leading-6 text-primary-9">OTP Verify</label>
          <div>
            <div class=" flex">
              <input placeholder='Mobile Number*'
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <button type="button"
                class="ml-2 px-3 py-1.5 ring-neutral-9 border-2 border-neutral-9 text-primary-9 rounded-md shadow-sm hover:bg-neutral-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">SEND</button>
            </div>
          </div>
          <input placeholder='Enter OTP code'
            class="mt-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>


        <div>
          <label class="mt-16 block text-sm font-medium leading-6 text-primary-9">Email Verify</label>
          <div class="mt-1">
            <div class=" flex">
              <input placeholder='Email*'
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <button type="button"
                class="ml-2 px-3 py-1.5 ring-neutral-9 border-2 border-neutral-9 text-primary-9 rounded-md shadow-sm hover:bg-neutral-1 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">SEND</button>
            </div><input placeholder='Email Verify code'
              class="mt-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-neutral-9 placeholder:text-neutral-8 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          <div>
            <button type="submit"
              class="mt-16 flex w-full justify-center rounded-md bg-neutral-9 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-neutral-7 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
          </div>
      </form>
    </div>
  </div> -->
</x-guest-layout>