@props([
    'name'          => 'input',
    'label'         => 'input',
    'value'         => old($name, ''),
    'placeholder'   => '',
    'attributes'    => '',
    'autocomplete'  => 'off',
    'id'           => null
])


<label 
        for="{{$name}}"
        class="text-md text-gray-9">{{$label}} 
    </label>
<textarea 
    {{$attributes}} 
    autocomplete="{{$autocomplete}}" 
    id="{{$id ?? $name }}"
    placeholder="{{ $placeholder }}"  
    rows="4" 
    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-0 rounded-lg border-2 border-neutral-2 hover:border-primary-3
            focus:ring-0
            focus:border-0dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-0
            dark:focus:border-0{{ $errors->has($name) ? 'bg-danger-0 border-danger-5' : '' }}">
</textarea>


@error($name)
<div class="mt-1">
    <span 
        id="{{ $name }}-error" 
        class="text-danger-7 text-sm">
        {{ $message }}
    </span>
</div>
@enderror
