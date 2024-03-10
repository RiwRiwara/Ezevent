<x-app-layout>
    
<x-slot name="header">
    <h2 class="font-semibold text-xl text-primary-5 dark:text-gray-200 leading-tight">
      {{ __('Ezevent') }}
    </h2>
</x-slot>

<div class="max-w-7xl mx-auto p-6 md:p-8 my-5 md:mt-10 bg-neutral-0 rounded-md h-svh ">
        <div class="md:flex-col gap-4">
            <div class=" md:flex justify-between items-center">
                <h1 class="text-2xl font-bold leading-9 tracking-tight text-neutral-9">
                  Admin Dashboard
                </h1>
                <div>
                  <form class="flex items-center max-w-sm ">
                      <x-forms.input-outline-primary name="search_string" label="{{__('page.search')}}" type="text" />
                      <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-neutral-7 rounded-lg border border-neutral-7 hover:bg-neutral-8 focus:ring-4 focus:outline-none focus:ring-neutral-3 dark:bg-neutral-6 dark:hover:bg-neutral-7 dark:focus:ring-neutral-8 duration-300">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                          </svg>
                          <span class="sr-only">Search</span>
                      </button>
                  </form>
                </div>
            </div>
            <hr class="my-5 border-1 border-primary-5">
            {{$users}}
        </div>
    </div>

</x-app-layout>