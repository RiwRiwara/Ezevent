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
                  All Users Dashboard
                </h1>
                <div>
                <form class="flex items-center max-w-sm  flex-row gap-2 text-nowrap">
                    <x-forms.input-outline-primary name="search_string" label="{{__('page.search')}}" type="text" value="" />
                    <button type="submit" class="p-1 ms-2 text-sm font-medium text-white bg-neutral-7 rounded-lg border border-neutral-7 hover:bg-neutral-8 focus:ring-4 focus:outline-none focus:ring-neutral-3 dark:bg-neutral-6 dark:hover:bg-neutral-7 dark:focus:ring-neutral-8 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <a href="" class="p-1 text-sm font-medium text-white bg-neutral-7 rounded-lg border border-neutral-7 hover:bg-neutral-8 focus:ring-4 focus:outline-none focus:ring-neutral-3 dark:bg-neutral-6 dark:hover:bg-neutral-7 dark:focus:ring-neutral-8 duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span class="sr-only">Reset</span>
                    </a>

                </form>
                </div>
            </div>
            <hr class="my-5 border-1 border-primary-5">
            <h1 class="text-sm font-bold leading-9 tracking-tight text-neutral-9">
             All Users ( 
                    {{$users_data['all_users']->total()}}
                    users)
            </h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-3">

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="bg-neutral-8 text-neutral-8 px-3 py-2">
                                รูป
                            </th>
                            <th scope="col" class="bg-neutral-9 text-white px-5 py-3">
                                ชื่อนามสกุล
                            </th>
                            <th scope="col" class="bg-neutral-8 text-white px-5 py-3">
                                อีเมล
                            </th>
                            <th scope="col" class="bg-neutral-9 text-white px-5 py-3">
                                เบอร์โทร
                            </th>
                            <th scope="col" class="bg-neutral-8 text-white px-5 py-3">
                                สถานะ
                            </th>
                            <th scope="col" class="bg-neutral-9 text-white px-5 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users_data['all_users'] as $user)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="px-2 py-2 items-center flex justify-center">
                                <img class="h-24 w-20 rounded-md object-cover hover:scale-x-105 duration-300 ease-in hover:shadow-md t" src="{{$user->profileImg()}}" alt="">
                            </td>
                            <th scope="row" class="px-3 py-2 font-semibold text-neutral-9 whitespace-nowrap dark:text-white text-base">
                                {{$user->first_name}} {{$user->last_name}}
                            </th>

                            <td class="px-4 py-2 text-base text-nowrap">
                                {{$user->email}}
                            </td>
                            <td class="px-4 py-2 font-bold text-base">
                                {{$user->mobile_number}}
                            </td>
                            <td class="px-4 py-2 font-bold text-base text-nowrap">
                                {{$user->created_at}}
                            </td>
                            <td class="px-4 py-2 text-right">
                            <a href="{{route('user-profile', ['user_id' => $user->user_id])}}" class="text-neutral-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-2 text-center">No users found</td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

                <div class="mt-5">
                    {{ $users_data['all_users']->links() }}
                </div>
            </div>
        </div>
        
    </div>

</x-app-layout>

