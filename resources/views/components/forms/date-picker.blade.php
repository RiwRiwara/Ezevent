@props([
'name' => 'input',
'id' => null,
'placeholder' => 'เลือกวันเกิด',
'value' => null,
])
<div class="relative w-full">
    <div 
        class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
        </svg>
    </div>
    <input 
        datepicker
        id="{{$id ?? $name}}"
        name="{{$name}}"
        type="text" 
        value="{{$value}}"
        class=" rounded-lg focus:ring-0
                hover:border-primary-3 bg-gray-0 border-2 border-neutral-2 text-neutral-9 text-sm
                focus:border-neutral-5 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 
                dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5  custom-input
                dark:focus:border-neutral-5" placeholder="{{$placeholder}}">
</div>
@error($name)
<div class="mt-1">
    <span 
        id="{{ $name }}-error" 
        class="text-danger-7 text-sm">
        {{ $message }}
    </span>
</div>
@enderror