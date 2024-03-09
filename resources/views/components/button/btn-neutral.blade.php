@props([ 'name' => 'input',
'type' => 'button',
'id' => null,
'btnType' => 'primary',
'attributes' => '', ])

@php
$btn_class = match ($btnType) {
'primary' => " relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden md:text-md leading-9 w-full md:w-auto
                                                                        font-bold text-gray-900 rounded-lg group bg-gradient-to-br from-neutral-5 to-neutral-9 
                                                                        group-hover:from-neutral-5 group-hover:to-neutral-9 hover:text-white dark:text-white focus:ring-4
                                                                        focus:scale-105 duration-300 
                                                                        focus:outline-none focus:ring-neutral-2 dark:focus:ring-neutral-8",

'secondary' => " relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden md:text-md leading-9 w-full md:w-auto
                                                                        font-bold text-gray-900 rounded-lg group bg-gradient-to-br from-gray-5 to-gray-9 
                                                                        group-hover:from-gray-5 group-hover:to-gray-9 hover:text-white dark:text-white focus:ring-4
                                                                        focus:scale-105 duration-300 
                                                                        focus:outline-none focus:ring-gray-2 dark:focus:ring-gray-8",

'danger' => " relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden md:text-md leading-9 w-full md:w-auto
                                                                        font-bold text-gray-900 rounded-lg group bg-gradient-to-br from-danger-5 to-danger-9 
                                                                        group-hover:from-danger-5 group-hover:to-danger-9 hover:text-white dark:text-white focus:ring-4
                                                                        focus:scale-105 duration-300 
                                                                        focus:outline-none focus:ring-danger-2 dark:focus:ring-danger-8",

'success' => " relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden md:text-md leading-9 w-full md:w-auto
                                                                        font-bold text-gray-900 rounded-lg group bg-gradient-to-br from-success-5 to-success-9 
                                                                        group-hover:from-success-5 group-hover:to-success-9 hover:text-white dark:text-white focus:ring-4
                                                                        focus:scale-105 duration-300 
                                                                        focus:outline-none focus:ring-success-2 dark:focus:ring-success-8",



};

$label_class = match ($btnType) {
'primary' => "w-full text-neutral-9 hover:text-neutral-0 relative px-2  transition-all ease-in duration-300 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0",

'secondary' => "w-full text-gray-9 hover:text-gray-0 relative px-2  transition-all ease-in duration-300 bg-white dark:text-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0",

'danger' => "w-full text-danger-9 hover:text-danger-0 relative px-2  transition-all ease-in duration-300 bg-white dark:text-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0",

'success' => "w-full text-success-9 hover:text-success-0 relative px-2  transition-all ease-in duration-300 bg-white dark:text-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0",



};


@endphp


<button type="{{$type}}" class="{{$btn_class}}"
    {{$attributes}}
 >
    <span class="{{$label_class}}">
        {{ $slot }}
    </span>
</button>