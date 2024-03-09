@props([ 'name' => 'input',
'type' => 'button',
'id' => null,
'attributes' => '', ])


<a href="{{route('create-event')}}" class=" relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden md:text-md leading-9 w-full md:w-auto
                                                                        font-bold text-gray-900 rounded-lg group bg-gradient-to-br from-neutral-5 to-neutral-9 
                                                                        group-hover:from-neutral-5 group-hover:to-neutral-9 hover:text-white dark:text-white focus:ring-4
                                                                        focus:scale-105 duration-300 
                                                                        focus:outline-none focus:ring-neutral-2 dark:focus:ring-neutral-8">
    <span class="w-full text-neutral-9 hover:text-neutral-0 relative px-2  transition-all ease-in duration-300 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
        {{ $slot }}
    </span>
</a>