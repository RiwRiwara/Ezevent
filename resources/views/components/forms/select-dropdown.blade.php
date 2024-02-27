@props([
    'name'          => 'input',
    'label'         => 'input',
    'attributes'    => '',
    'options'       => [],
    'selected'      => '',
    'id'           => null,
    'aria'         => "Default select example",
    'val_key' => "name_th"
])

<div>
    <label 
        for="{{$name}}"
        class="text-md text-gray-9">{{$label}} 
    </label>
    <select 
        {{$attributes}} 
        class=" bg-gray-0 border-2 border-neutral-2 text-neutral-9 text-sm rounded-lg focus:ring-0 
                hover:border-primary-3
                focus:border-primary-4 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                dark:placeholder-gray-400 dark:text-white dark:focus:ring-0 dark:focus:border-blue-500 custom-input" 
        aria-label="{{$aria}}" id="{{$id ?? $name }}" name="{{$name}}" 
    >
        @foreach ($options as $option)
            <option 
                value="{{$option['id']}}" 3
                {{ $selected == $option['id'] ? 'selected' : '' }}
                class="text-md"
                > {{$option[$val_key]}}</option>
        @endforeach
    </select>
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