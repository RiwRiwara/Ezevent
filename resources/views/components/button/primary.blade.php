@props([ 'name' => 'input',
'type' => 'button',
'innerHtml' => '',
'attributes' => '', ])
<button type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $name }}"
    {{$attributes}}
    class=" flex w-full justify-center rounded-md bg-neutral-9 px-3 py-1.5 t
            ext-xl font-semibold leading-6 text-white shadow-sm hover:bg-neutral-8
            focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 
            focus-visible:outline-neutral-7"
    >
    {{ $innerHtml }}
</button>