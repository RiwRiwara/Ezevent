@props(['name',
'defaultValue' => '#000',
'target_id' => 'sssss',
'from' => 'text-bg-color'
])

<div x-data="{ selectedColor: '{{$defaultValue}}' }">
    <!-- Color Picker Button -->
    <div class="relative inline-block">
        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="$refs.colorInput.click()">
            <span class="w-5 h-5 rounded-full" :style="'background-color: ' + selectedColor"></span>
            <span class="ml-1 text-sm font-medium" x-text="selectedColor"></span>
        </button>

        <input 
        x-ref="colorInput" 
        type="color" 
        class="absolute inset-0 opacity-0 z-10"
         name="{{$name}}" 
         id="{{$name}}" 
         x-model="selectedColor" 
         @input="selectedColor = $event.target.value"
         oninput="handleColorChange('{{$from}}','{{$target_id}}', this.value)"
         >
        </input>
    </div>
</div>
