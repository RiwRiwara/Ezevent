@props([
    'name' => 'input',
    'id' => null,
    'label' => null,
    'icon' => null,
    'group' => null,
    'check' => false,
])

<div x-data="{ checked: {{ $check ? 'true' : 'false' }} }" 
     x-on:click="checked = !checked; $dispatch('checkbox-checked', { checked: checked, icon: '{{ $icon }}' })"
     x-bind:class="{ 'animate-check': checked, 'bg-primary-2': checked, 'bg-neutral-0': !checked }"
     class="flex items-center p-2  bg-neutral-0 hover:bg-primary-2 cursor-pointer transition duration-300 rounded-md hover:shadow-md justify-between "
    id = "div_{{$name}}"
>
<div>
    <input 
        id="{{$id ?? $name}}"
        name="{{$name}}"
        x-bind:id="'{{$id ?? $name}}'" 
        x-bind:name="'{{$name}}'" 
        type="checkbox" 
        x-bind:checked="checked"
        value="{{$id}}" 
        class="w-4 h-4 text-primary-4 bg-gray-0 border-neutral-3 shadow-neutral-6 shadow-sm  rounded-md focus:ring-primary-4 duration-200
        dark:focus:ring-neutral-6 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 {{$group}}"
    >
    <label 
    x-on:click="checked = !checked"
    x-bind:class="{'text-primary-9': checked, 'text-neutral-9': !checked }"
    for="{{$id ?? $name}}"
    class="ml-2 text-sm text-neutral-9 font-bold text-primary-11 dark:text-neutral-0 cursor-pointer ">

    {{ucfirst($label ?? $name)}}</label>
</div>

<i class="{{$icon}}"
    x-bind:class="{'text-primary-9': checked, 'text-neutral-9': !checked }"
    ></i>

</div>
