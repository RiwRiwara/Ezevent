<div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
    <h1 class="text-2xl text-center font-bold mb-4 mt-2 text-neutral-8">
        Rule
    </h1>

    <div class="flex flex-col gap-4">

        <div class="p-3 rounded-lg my-5 border-2 border-gray-1">
            <a class="text-lg font-bold text-neutral-9 mb-3">
                Age Restriction
            </a>
            <p>Restrict attendees age to be at least</p>
            <div class="mt-3 flex flex-col gap-3">
                <livewire:event-editable-field inputType="number" fieldName="age_require" label_show="{{__('event.age_require')}}" oldValue="{{$event->age_require}}" item_id="{{$event->event_id}}" />

            </div>
        </div>

        <div class="p-3 rounded-lg my-5 border-2 border-gray-1">
            <a class="text-lg font-bold text-neutral-9 mb-3">
                Limit Participant
            </a>
            <p>Restrict attendees age to be at least</p>
            <div class="mt-3 flex flex-col gap-3">
                <livewire:event-editable-field inputType="number" fieldName="limit_participant" label_show="{{__('event.limit_participant')}}" oldValue="{{$event->limit_participant}}" item_id="{{$event->event_id}}" />

            </div>
        </div>

    </div>
</div>