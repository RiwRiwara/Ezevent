@props([ 'name' => 'input',
'type' => 'button',
'id' => null,
'innerHtml' => '',
'attributes' => '', ])


<style>
    .custom-button {
        transition: background-color 0.5s ease, border-color 0.5s ease; 
        border: 2px solid transparent; 
    }
    .custom-button:hover {
        border-color: #ffffff;
    }
</style>

<button type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $id ?? $name }}"
    {{$attributes}}
    class=" flex w-full justify-center rounded-md bg-neutral-9 px-3 py-2 
            text-lg font-semibold leading-6 text-white shadow-sm hover:bg-neutral-8
            focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 
            focus-visible:outline-neutral-7 custom-button"
    >
    {{ $innerHtml }}
</button>