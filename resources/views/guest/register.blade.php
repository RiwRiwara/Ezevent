<x-guest-layout>
  <!-- register page1 -->
  <div class=" px-6 py-6 9lg:px-8 bg-neutral-2">
    <div class=" flex flex-row items-center justify-center">
      <img class="h-15 w-auto" src="{{ asset('images/Logo(Orange).png') }}" alt="Logo">
      <h2 class="ml-4 text-3xl font-bold leading-9 tracking-tight text-neutral-9">Create New Account</h2>
    </div>

    <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md bg-gray-0 p-4 rounded-lg shadow-md">
      <form class="space-y-6" action="#" method="POST">
        <div class="mb-2">
          <p class="block text-md font-bold  text-primary-9">Personal Infomation</p>
          <div class="mt-2 flex flex-col gap-3">
            <x-forms.input-outline-primary name="email" label="Email" type="email" />
            <x-forms.input-outline-primary name="phone" label="Phone" type="text" />
            <x-forms.input-outline-primary name="first_name" label="First name" type="text" />
            <x-forms.input-outline-primary name="last_name" label="Last name" type="text" />
            <div >
              <label for="date" class="block text-md font-medium leading-6 text-primary-9">Date of birth</label>
              <input type="date" class="form-input block px-2.5 pb-2.5 pt-4 w-full text-md text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-neutral-9 peer">
            </div>
          </div>
        </div>

        <div class="mb-2">
          <p class="block text-md font-bold text-primary-9">Address</p>
          <div class="mt-2 flex flex-col gap-3">
            <x-forms.input-outline-primary name="address" label="Address" type="text" />
            <x-forms.input-outline-primary name="city" label="City" type="text" />
            <x-forms.input-outline-primary name="state" label="State" type="text" />
            <x-forms.input-outline-primary name="zip" label="Zip" type="text" />
            
          </div>
        </div>
        <div>
            <button type="submit" class="mt-20 flex w-full justify-center rounded-md bg-neutral-9 px-3 py-1.5 text-md font-semibold leading-6 text-white shadow-sm hover:bg-neutral-7">Next</button>
        </div>
      </form>
    </div>

  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
</x-guest-layout>