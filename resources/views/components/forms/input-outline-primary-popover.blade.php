@props([
'name' => 'input',
'label' => 'input',
'type' => 'text',
'value' => old($name, ''),
'placeholder' => '',
'attributes' => '',
'autocomplete' => 'off',
'isDisabled' => false,
'classinput' => ''
])


<div class="relative">
    <input data-popover-target="popover_input_{{ $name }}" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}" aria-describedby="{{ $name }}-error" placeholder="{{ $placeholder }}" {{$attributes}} autocomplete="{{$autocomplete}}" class=" block px-2.5 pb-2.5 pt-2 w-full text-md text-gray-9 bg-gray-0
                    rounded-lg border-2 border-neutral-2 hover:border-primary-3 appearance-none dark:text-white 
                    dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
                    focus:ring-0 focus:border-primary-3 peer custom-input {{$classinput}}" 
                    
                     />

    <label for="{{ $name }}" class=" absolute text-md text-gray-9 dark:text-gray-400 duration-300 transform -translate-y-4 
                scale-90 top-2 z-10 origin-[0] bg-gray-0 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-neutral-9 
                peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
                peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 
                rtl:peer-focus:left-auto start-1 rounded-md  ">
        {{ $label }}
    </label>
</div>


<div data-popover id="popover_input_{{ $name }}" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 ease-in
    transition-opacity duration-300 bg-white border border-gray-1 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
    <div class="px-3 py-2 bg-primary-2 border-b border-gray-0 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
        <h3 class="font-semibold text-primary-9 dark:text-white">{{__('field_name.update')}} {{ $label }}</h3>
    </div>
    <div class="px-3 py-2">
        <form action="{{route('profile.update.field')}}" method="POST">
            @csrf
            <div class="flex flex-row gap-2">
                <x-forms.input-outline-primary name="edit_{{ $name }}" label="" type="text" require value="{{ $value }}" />
                <button type="submit">
                    <svg class="w-[21px] h-[21px] text-success-4 dark:text-white hover:text-success-7 hover:animate-bounce" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </button>
                <button id="cancelButton_{{ $name }}" type="button" onclick="undo_update('edit_{{ $name }}', '{{ $name }}')">
                    <svg class="w-[21px] h-[21px] text-gray-3 dark:text-white hover:text-gray-7 hover:animate-bounce" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4" />
                    </svg>
                </button>

            </div>

        </form>
    </div>
    <div data-popper-arrow></div>

</div>