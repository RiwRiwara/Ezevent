@props([
'nameShow' => 'input',
'label_show' => 'input',
'actionName' => 'input',
])
<div x-data="{ show_{{ $nameShow }}: false }" >
    <div x-show="!show_{{ $nameShow }}">
        {{ $slot1 }}
    </div>
    <div x-show="show_{{ $nameShow }}"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        >

        <form action="{{route($actionName)}}" method="POST" >
            @csrf
            <div class="flex flex-row gap-2 " >
                <input hidden name="updatedField" value="{{ $nameShow }}">
                <input hidden name="label_show" value="{{ $label_show }}">

                {{ $slot2 }}
                <button type="submit">
                    <svg class="w-[21px] h-[21px] text-success-4 dark:text-white hover:text-success-7 hover:scale-110 duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </button>
                <button id="cancelButton_{{ $nameShow }}" type="button" @click="show_{{ $nameShow }} = !show_{{ $nameShow }}">
                    <svg class="w-[21px] h-[21px] text-gray-3 dark:text-white hover:text-gray-7 hover:scale-110 duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4" />
                    </svg>
                </button>

            </div>

        </form>
    </div>
</div>