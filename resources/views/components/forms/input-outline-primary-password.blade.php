@props([
    'name' => 'password',
    'label' => 'Password',
    'type' => 'password',
    'placeholder' => '',
    'attributes' => '',
    'autocomplete' => 'off'
])

<div class="relative" x-data="{ showPassword: false, inputFilled: false }">
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" aria-describedby="{{ $name }}-error" placeholder="{{ $placeholder }}" {{$attributes}} autocomplete="{{$autocomplete}}" 
        x-bind:type="showPassword ? 'text' : 'password'"
        @input="inputFilled = $event.target.value.trim() !== ''"
        class="block px-2.5 pb-2.5 pt-2 w-full text-md text-gray-9 bg-gray-0 rounded-lg border-2 border-neutral-2 hover:border-primary-3 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-primary-3 peer
            {{ $errors->has($name) ? 'bg-danger-0 border-danger-5 shake' : '' }} custom-input" />

    <label for="{{ $name }}" class="absolute text-md text-gray-9 dark:text-gray-400 duration-300 transform -translate-y-4 
            scale-75 top-2 z-10 origin-[0] bg-gray-0 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-neutral-9 
            peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
            peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 
            rtl:peer-focus:left-auto start-1 rounded-md {{ $errors->has($name) ? 'bg-danger-0 shake' : '' }} ">
        {{ $label }}
    </label>

    <div id="togleBtn" x-show="inputFilled" x-cloak>
        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
            <button type="button" class="text-gray-400 hover:text-gray-600 dark:text-gray-300 dark:hover:text-gray-500 focus:outline-none" @click="showPassword = !showPassword">
                <svg x-show="!showPassword" class="w-[18px] h-[18px] text-neutral-9 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
                >
                    <path fill-rule="evenodd" d="M5 7.8C6.7 6.3 9.2 5 12 5s5.3 1.3 7 2.8a12.7 12.7 0 0 1 2.7 3.2c.2.2.3.6.3 1s-.1.8-.3 1a2 2 0 0 1-.6 1 12.7 12.7 0 0 1-9.1 5c-2.8 0-5.3-1.3-7-2.8A12.7 12.7 0 0 1 2.3 13c-.2-.2-.3-.6-.3-1s.1-.8.3-1c.1-.4.3-.7.6-1 .5-.7 1.2-1.5 2.1-2.2Zm7 7.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                </svg>
                <svg x-show="showPassword" class="w-[18px] h-[18px] text-neutral-9 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
                fill="currentColor" viewBox="0 0 24 24">
                    <path d="m4 15.6 3-3V12a5 5 0 0 1 5-5h.5l1.8-1.7A9 9 0 0 0 12 5C6.6 5 2 10.3 2 12c.3 1.4 1 2.7 2 3.6Z" />
                    <path d="m14.7 10.7 5-5a1 1 0 1 0-1.4-1.4l-5 5A3 3 0 0 0 9 12.7l.2.6-5 5a1 1 0 1 0 1.4 1.4l5-5 .6.2a3 3 0 0 0 3.6-3.6 3 3 0 0 0-.2-.6Z" />
                    <path d="M19.8 8.6 17 11.5a5 5 0 0 1-5.6 5.5l-1.7 1.8 2.3.2c6.5 0 10-5.2 10-7 0-1.2-1.6-2.9-2.2-3.4Z" />
                </svg>
            </button>
        </div>
    </div>
</div>

@error($name)
<div class="mt-1">
    <span id="{{ $name }}-error" class="text-danger-7 text-sm">
        {{ $message }}
    </span>
</div>
@enderror
