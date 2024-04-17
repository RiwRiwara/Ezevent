<x-slot name="title">
    {{__('page.event_detail')}}
</x-slot>

<x-slot name="header">
    <div class="flex justify-center">
        <x-breadcrumb :items="$page_data['breadcrumbItems']" />
    </div>
</x-slot>

@if ($event->event_status == 'Draft')
<div class="p-4 mb-4 text-lg text-yellow-800 text-center bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
    <span class="font-medium">สถานะ {{ __('event.status.'.$event->event_status) }}</span>
</div>
@else

<div class="p-4 mb-4 text-lg text-green-800 text-center bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    <span class="font-medium">
        {{ __('event.phase.'.$event->event_phase) }}

    </span>
</div>

@endif

<div class="max-w-full bg-neutral-9 shadow-inner border-b-8 border-neutral-8">

    <div class="col-span-12 flex justify-end p-2">
        <div class="text-muted text-xs text-gray-200 font-medium">{{$event->event_id}}</div>
    </div>

    <div class="max-w-7xl px-2 md:py-8 mx-auto sm:px-10 lg:px-8">
        <div class=" grid-cols-12 grid">
            <div class="col-span-6 flex flex-row gap-4 justify-start">
                <img class="w-32 h-36 rounded-lg border-4 border-neutral-2 p-1 object-cover" src="{{$event->getThumbnail()}}" alt="">
                <div class="flex flex-col gap-2">
                    <div class="flex flex-row gap-2">
                        <div class="text-2xl font-bold text-white overflow-hidden overflow-ellipsis whitespace-normal break-words max-w-[350px] max-h-[3.5em] line-clamp-3" id="event-name-show">{{$event->event_name}}</div>

                    </div>

                    <div class="text-md text-gray-2 font-semibold text-nowrap"> {{$event->getDateStart()}} - {{$event->getDateEnd()}}</div>
                    <div class="text-md text-gray-2 font-semibold text-nowrap"> {{$event->venue}}</div>
                </div>
            </div>


            <div class="col-span-6 flex flex-col gap-4 ">
                @if ($event->event_status == 'Draft')
                <form class="flex justify-end" action="{{route('published-event', ['event_id' => $event->event_id])}}" method="POST" onsubmit="return confirm('Are you sure you want to publish this event?')">
                    @csrf
                    <x-button.btn-common name="published" type="submit">
                        {{__('page.published')}}
                    </x-button.btn-common>
                </form>
                @else

                <form class="flex justify-end" action="{{ route('change-phase-event', ['event_id' => $event->event_id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to change the phase of this event?')">
                    @csrf
                    <div class="w-25 flex flex-col gap-2">
                        <select id="phaseChange" name="phase" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-neutral-5 focus:border-neutral-5 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-5 dark:focus:border-neutral-5">
                            <option value="Upcoming" {{$event->event_phase == 'Upcoming' ? 'selected' : ''}}>Upcoming</option>
                            <option value="Ongoing" {{$event->event_phase == 'Ongoing' ? 'selected' : ''}}>Ongoing</option>
                            <option value="Reviewing" {{$event->event_phase == 'Reviewing' ? 'selected' : ''}}>Reviewing</option>
                            <option value="Complete" {{$event->event_phase == 'Complete' ? 'selected' : ''}}>Complete</option>
                            <option value="Archived" {{$event->event_phase == 'Archived' ? 'selected' : ''}}>Archived</option>
                        </select>
                        <button class="text-sm bg-neutral-2 p-2 rounded-md" type="submit">Change </button>
                    </div>
                </form>

                @endif
            </div>

        </div>
    </div>
</div>