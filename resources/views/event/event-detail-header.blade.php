<x-slot name="title">
    {{__('page.event_detail')}}
</x-slot>

<x-slot name="header">
    <div class="flex justify-center">
        <x-breadcrumb :items="$page_data['breadcrumbItems']" />
    </div>
</x-slot>


<div class="flex justify-center items-center py-4" x-data="{ 
    eventPhases: [
        { number: 1, title: '{{ __('event.phase.Initial') }}', key: 'Initial'},
        { number: 2, title: '{{ __('event.phase.Upcoming') }}', key: 'Upcoming'},
        { number: 3, title: '{{ __('event.phase.Ongoing') }}', key: 'Ongoing'},
        { number: 4, title: '{{ __('event.phase.Reviewing') }}', key: 'Reviewing'},
        { number: 5, title: '{{ __('event.phase.Complete') }}', key: 'Complete'},
        { number: 6, title: '{{ __('event.phase.Archived') }}', key: 'Archived'}
    ],
    currentPhase: '{{ $event->event_phase }}'
}">
    <div>
        <ol class="items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 rtl:space-x-reverse">
            <template x-for="(phase, index) in eventPhases" :key="index">
                <li :class="{ 
                        'text-yellow-500 dark:text-neutral-5 animate-pulse': phase.key === currentPhase, 
                        'text-green-500 dark:text-neutral-5': phase.key !== currentPhase && eventPhases.findIndex(p => p.title === currentPhase) > index,
                        'text-gray-300 dark:text-gray-600': phase.key !== currentPhase && eventPhases.findIndex(p => p.title === currentPhase) < index
                    }" 
                    class="flex items-center space-x-2.5 rtl:space-x-reverse">
                    <span :class="{ 
                            'bg-yellow-100 border-yellow-500 animate-pulse': phase.key === currentPhase, 
                            'bg-green-100 border-green-500': phase.key !== currentPhase && eventPhases.findIndex(p => p.title === currentPhase) > index,
                            'bg-gray-0 dark:bg-gray-600': phase.key !== currentPhase && eventPhases.findIndex(p => p.title === currentPhase) < index
                        }" 
                        class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        <span x-text="phase.number"></span>
                    </span>
                    <span :class="{ 'font-bold': phase.key === currentPhase, 'font-medium': phase.key !== currentPhase }" x-text="phase.title" class="leading-tight"></span>
                    <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                    </svg>
                </li>
            </template>
        </ol>
    </div>
</div>





<div class="max-w-full bg-neutral-9 shadow-inner border-b-8 border-neutral-8">

    @if ($event->event_status == 'Draft')
    <div class=" p-2 text-xs flex gap-4 justify-center text-yellow-900 font-semibold text-center bg-yellow-50 " role="alert">
        <div class="">[{{ __('event.status.'.$event->event_status) }}]</div>
        <div class="">{{ __('event.status.'.$event->event_status."-desc") }}</div>
    </div>
    @else

    @endif

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
                            <option value="Upcoming" {{$event->event_phase == 'Upcoming' ? 'selected' : ''}}>2 Upcoming</option>
                            <option value="Ongoing" {{$event->event_phase == 'Ongoing' ? 'selected' : ''}}>3 Ongoing</option>
                            <option value="Reviewing" {{$event->event_phase == 'Reviewing' ? 'selected' : ''}}>4 Reviewing</option>
                            <option value="Completed" {{$event->event_phase == 'Completed' ? 'selected' : ''}}>5 Completed</option>
                            <option value="Archived" {{$event->event_phase == 'Archived' ? 'selected' : ''}}>6 Archived</option>
                        </select>
                        <button class="text-sm bg-neutral-2 p-2 rounded-md" type="submit">Change </button>
                    </div>
                </form>

                @endif
            </div>

        </div>
    </div>
</div>