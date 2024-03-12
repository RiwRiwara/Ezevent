<div x-data="{ show: false }" @click.away="show = false">

    <div x-show="!show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
    >
        <!-- Display the current value -->
        <x-forms.input-outline-primary 
        value="{{ $value_show }}"
        @click="show = !show" name="{{ $fieldName }}" wire:model="value_show" classinput="cursor-pointer" readonly label="{{ $label_show }}" type="text" />
    </div>
    <div x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-trap="show"
    >
        <!-- Editable dropdown -->
        <form wire:submit="save">
            @csrf
            <div class="flex flex-row gap-2">
                
                <!-- Dropdown -->
                <select name="edit_{{ $fieldName }}" wire:model="newValue" class="w-full border border-gray-300 rounded-md focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="">{{ __('Select') }}</option>    
                @foreach ($optionsObject as $option)
                        <option value="{{ $option['id'] }}">{{ $option['name_th'] }}</option>
                    @endforeach
                </select>
                <button type="submit" @click="show = !show">
                    <svg class="w-[21px] h-[21px] text-success-4 dark:text-white hover:text-success-7 hover:scale-110 duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </button>
                <button id="cancelButton_{{ $fieldName }}" type="button" @click="show = !show">
                    <svg class="w-[21px] h-[21px] text-gray-3 dark:text-white hover:text-gray-7 hover:scale-110 duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>
