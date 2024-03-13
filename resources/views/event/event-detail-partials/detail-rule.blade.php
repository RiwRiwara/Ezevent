<div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
    <h1 class="text-2xl text-center font-bold mb-4 mt-2 text-neutral-8">
    {{__("event.menu-event.menu-event3")}}
    </h1>

    <div class="flex flex-col gap-4">

        <div class="p-3 rounded-lg my-3 border-2 border-gray-1">
            <a class="text-lg font-bold text-neutral-9 mb-3">
                {{__("event.rule_page.age_restriction")}}
            </a>
            <p>{{__("event.rule_page.age_info")}}</p>
            <div class="mt-3 flex flex-col gap-3">
                <livewire:event-editable-field inputType="number" fieldName="age_require" label_show="{{__('event.rule_page.age_require')}}" oldValue="{{$event->age_require}}" item_id="{{$event->event_id}}" />

            </div>
        </div>

        <div class="p-3 rounded-lg my-3 border-2 border-gray-1">
            <a class="text-lg font-bold text-neutral-9 mb-3">
            {{__("event.rule_page.limit_participants")}}
            </a>
            <p>{{__("event.rule_page.limit_info_part")}}</p>
            <div class="mt-3 flex flex-col gap-3">
                <livewire:event-editable-field inputType="number" fieldName="limit_participant" label_show="{{__('event.rule_page.num_participant')}}" oldValue="{{$event->limit_participant}}" item_id="{{$event->event_id}}" />
            </div>
        </div>


        <div class="p-3 rounded-lg my-3 border-2 border-gray-1" >
            <a class="text-lg font-bold text-neutral-9 mb-3">
                {{__("event.rule_page.limit_staff")}}
            </a>
            <p>{{__("event.rule_page.limit_info_staff")}}</p>
            <div class="mt-3 flex flex-col gap-3">
                <livewire:event-editable-field inputType="number" fieldName="limit_staff" label_show="{{__('event.rule_page.num_staff')}}" oldValue="{{$event->limit_staff}}" item_id="{{$event->event_id}}" />
            </div>
        </div>

    </div>
</div>