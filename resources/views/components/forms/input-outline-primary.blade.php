@props([
    'name'          => 'input',
    'label'         => 'input',
    'type'          => 'text',
    'value'         => old($name, ''),
    'placeholder'   => '',
    'attributes'    => '',
    'autocomplete'  => 'off',
    'isDisabled'    => false,
    'classinput'    => '',
    'isHighlight'   => false,
    'isHaveReset'   => false,
    'isDisable'    => false,
])


<div class="relative w-full" x-data="{ inputValue: '{{ $value }}' }"> 
    <input 
        x-model="inputValue"
        type="{{ $type }}" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        value="{{ $value }}" 
        aria-describedby="{{ $name }}-error"
        placeholder="{{ $placeholder }}" 
        {{$attributes}} 
        autocomplete="{{$autocomplete}}" 
        class=" block px-2.5 pb-2.5 pt-2 w-full text-md border-2
                    {{ $isDisable ? 'bg-gray-1' : 'bg-white' }}
                    {{ $isDisable ? 'text-gray-6' : 'text-gray-900' }}
                    rounded-lg  {{$isHighlight ? 'border-neutral-6 hover:border-neutral-7 border-2' : 'border-neutral-3 hover:border-primary-3'}}  appearance-none dark:text-white 
                    dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
                    focus:ring-0 peer {{ $classinput }}
                    {{ $errors->has($name) ? 'bg-danger-0 border-danger-5 shake' : '' }} custom-input {{$isDisabled ? '' : ''}}" 
                    @if($isDisabled) disabled @endif
    />

    @if($isHaveReset)
    <button type="button" class="absolute inset-y-0 right-0 px-3 py-2 text-gray-600" x-on:click="inputValue = ''" >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    @endif
    
    <label 
        for="{{ $name }}" 
        class=" absolute text-md text-gray-9 dark:text-gray-400 duration-300 transform -translate-y-4 
                scale-75 top-2 z-10 origin-[0] bg-gray-0 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-neutral-9 
                peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
                peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 
                rtl:peer-focus:left-auto start-1 rounded-md {{ $errors->has($name) ? 'bg-danger-0 shake' : '' }} ">
        {{ $label }}
    </label>
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