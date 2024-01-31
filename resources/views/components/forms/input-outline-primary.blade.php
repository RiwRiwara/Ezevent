@props([ 'name' => 'input', 'label' => 'input', 'type' => 'text', 'value' => '',
'placeholder' => '', 'attributes' => '', ])

<div class="relative">
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-9 bg-transparent rounded-lg border-1 border-gray-9 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-neutral-9 peer"
        value="{{ old($name, $value) }}"
        aria-describedby="{{ $name }}-error"
        placeholder=""
        {{
        $attributes
        }}
    />
    <label
        for="{{ $name }}"
        class="absolute text-sm text-gray-9 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-neutral-9 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1"
    >
        {{ $label }}
    </label>
</div>

@error($name)
<span id="{{ $name }}-error" class="text-danger">{{ $message }}</span>
@enderror
