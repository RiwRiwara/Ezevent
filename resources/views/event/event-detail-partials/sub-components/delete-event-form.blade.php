<form action="{{ route('event-delete', $event->event_id) }}" id="delete-form" method="POST" class="p-3 rounded-lg my-5 border-2 border-gray-1">
    @csrf
    @method('DELETE')

    <h1 class="text-lg font-bold text-neutral-9 mb-3">{{__('event.eventdetail_page.delete_event')}}</h1>
    <div class="mt-3 flex flex-col gap-3">
        <p>
            {{__('event.eventdetail_page.delete_desc')}}
        </p>
        <div class="flex justify-end mt-3">
            <x-button.btn-neutral type="button" btnType="danger" data-modal-target="delete-event-modal" data-modal-toggle="delete-event-modal">
                {{__('event.delete')}}
            </x-button.btn-neutral>
        </div>
    </div>




    <div id="delete-event-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{__('event.eventdetail_page.delete_info')}}                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-event-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{__('event.eventdetail_page.delete_info1')}}  
                    </p>
                    <p>
                    {{__('event.eventdetail_page.delete_info2')}}  <span class="font-bold text-neutral-9">
                            {{ $event->event_name }}
                        </span> {{__('event.eventdetail_page.delete_info3')}}  
                    </p>

                    <x-forms.input-outline-primary name="confirm_name" label="{{__('event.eventdetail_page.enter_name')}}" type="text" required />

                </div>
                <!-- Modal footer -->
                <div class="flex justify-end items-center gap-3 p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                    <x-button.btn-neutral type="submit" btnType="danger" >
                        {{__('event.delete')}}
                    </x-button.btn-neutral>

                    <x-button.btn-neutral type="button" btnType="secondary" data-modal-hide="delete-event-modal">
                        {{__('event.decline')}}
                    </x-button.btn-neutral>
                </div>
            </div>
        </div>
    </div>

</form>