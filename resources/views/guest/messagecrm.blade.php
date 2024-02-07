<x-app-layout>
    <h1 class="text-3xl px-20 py-5 text-left text-primary-5">Ezevent</h1>
    <h2 class="text-2xl px-20 py-5 text-left text-gray-9">Junior Architecture CRM</h2>
    <!-- ใส่ Nav Bar ตรงเน้ -->

    <div class="relative overflow-x-auto px-20">
        <div class="grid grid-cols-2 py-10">
            <h3 class="text-2xl text-gray-9">Create Message</h3>
        </div>
        <x-forms.input-outline-primary name="email" label="{{__('Topic')}}" type="email" />
        <div class="py-10">
            <x-forms.textarea-outline-primary name="address" label="{{__('')}}" placeholder="{{__('Description')}}" />
        </div>
        <div class="flex justify-between flex-col sm:flex-row">
            <div class="flex flex-row">
                <div class="flex flex-row">
                    <x-forms.checkbox id="all" name="all" />
                    <label for="all" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">All</label>
                </div>
                <div class="flex flex-row">
                    <x-forms.checkbox id="staff" name="staff" />
                    <label for="staff" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Staff</label>
                </div>
                <div class="flex flex-row">
                    <x-forms.checkbox id="participants" name="participants" />
                    <label for="participants" class="w-full py-3 ms-2 text-sm font-medium text-gray-9 dark:text-gray-6">Participants</label>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="">
                    <button type="submit" class="block sm:w-80 w-60 border border-neutral-9 rounded-md bg-gray-0 text-center text-xl font-semibold text-neutral-9 shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send</button>
                </div>
                <div class="">
                    <button type="submit" class="block sm:w-80 w-60 rounded-md bg-neutral-8 text-center text-xl font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
```