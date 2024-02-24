<x-guest-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-primary-5 dark:text-gray-200 leading-tight">
      {{ __('Ezevent') }}
    </h2>
  </x-slot>
  <h2 class="text-s px-20 py-5 text-left text-gray-9 font-bold">Occupation</h2>
  <div class="hidden sm:ml-6 sm:block">
      <div class="flex space-x-2">
          <a href="#" class="text-s px-16 text-left font-bold text-black-300">Dashboard</a>
          <a href="#" class="text-s px-16 text-left font-bold text-black-300">Event Setting</a>
          <a href="#" class="text-s px-16 text-left font-bold text-black-300">Poster Setting</a>
          <a href="#" class="text-s px-16 text-left font-bold text-black-300">Staff</a>
          <a href="#" class="text-s px-16 text-left font-bold text-black-300">Participants</a>
          <a href="#" class="text-s px-16 text-left font-bold text-black-300">Create Form</a>
        </div>
           
    <!-- Check box -->
    <div class="px-20 py-10">
        <input id="register-form" name="register-form" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="register-form" class="w-full py-14 ms-4 text-sm font-medium text-gray-9 dark:text-gray-6">Register Form</label> 
        <input id="estimate-form" name="estimate-form" type="checkbox" value="" class="w-4 h-4 text-neutral-6 bg-gray-100 border-gray-6 rounded focus:ring-blue-500 dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="estimate-form" class="w-full py-14 ms-4 text-sm font-medium text-gray-9 dark:text-gray-6">Estimate Form</label>
     
        <button type="button" class="float-right w-50 px-20 py-2 p-4 mr-20 text-sm font-medium text-neutral-8 bg-transparent border border-neutral-8 
            rounded-lg hover:bg-neutral-8 hover:text-white focus:z-10 focus:ring-2 focus:ring-neutral-8  
            focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
            Upload
        </button>
    </div>
  
    <div class="py-4"> 
        <div class="block rounded-md bg-white p-4 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 flex flex-row">
          <div type ="input" class="flex-auto items-center border-b border-black bg-gray-100 py-4"></div>
          <button>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-2 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
              <option>Multiple choice</option>
              <option>Checkboxes</option>
              <option>Shorts answer</option>
              <option>Paragraph</option>
              <option>Drop down</option>
            </select>
          </button>
        </div>
    </div>
   
    <div class="py-4">
    <button type="submit" class="float-right w-72 px-24 py-2 mr-40 text-sm font-medium text-white bg-neutral-8 border border-neutral-8 
            rounded-lg  hover:text-white  hover:bg-indigo-500 hover:border-indigo-500  focus-visible:outline-indigo-600">
           SAVE
     </button>
    </div>
    

</x-guest-layout>