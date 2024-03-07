@props([
'name' => 'time_input',
'id' => null,
'placeholder' => 'เลือกเวลา'
])

<div class="relative w-full">
    <input type="time" id="{{$id ?? $name}}" name="{{$name}}" type="text" class="rounded-lg focus:ring-0 hover:border-primary-3 bg-gray-0 border-2 border-neutral-3 text-neutral-9 text-sm focus:border-neutral-5 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 custom-input dark:focus:border-neutral-5" placeholder="{{$placeholder}}">
</div>