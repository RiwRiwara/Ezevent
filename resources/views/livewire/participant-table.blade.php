<div x-data="{ quickApprove: false}">

    <div class="flex justify-end">

        <button @click="quickApprove=!quickApprove" :class="{ 'bg-green-500': quickApprove, 'bg-gray-500': !quickApprove }" class="text-white px-2 py-1 rounded-md my-1">
            <span class="ms-2">Quick Action</span>
        </button>
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-3 text-center">
                    #
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Role
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    State
                </th>

                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>


        <tbody>


            @forelse ($eventParticipants as $participant)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-3">
                    <div class="text-gray-900 dark:text-white">
                        {{ $loop->index + 1 }}
                    </div>
                </td>

                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">

                    <div class="ps-2">
                        <div class="text-base font-semibold">
                            {{ $participant['user']['first_name'] }} {{ $participant['user']['last_name'] }}
                        </div>
                        <div class="font-normal text-gray-500">
                            {{ $participant['user']['email'] }}
                        </div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    <div class="text-gray-900 dark:text-white text-center p-0.5 rounded-md
                    {{
                        $participant['role'] == 'Participant' ? 'text-neutral-8 bg-neutral-2' : 'text-primary-7 bg-primary-1'
                    }}
                    ">
                        {{ $participant['role'] }}
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-center
                    p-0.5 rounded-md
                    {{
                        $participant['status'] == 'Approved' ? 'text-green-800 bg-green-100' : ($participant['status'] == 'Rejected' ? 'text-red-500 bg-red-100' : 'text-yellow-500 bg-yellow-100')
                    }}">
                        {{ $participant['status'] }}
                    </div>
                </td>


                <td style="overflow-x: auto; max-width: 500px;" class="progress-scroller">
                    {!! $participant['stepperHtml'] !!}
                </td>


                <td class="px-6 py-4" x-show="!quickApprove">
                    <!-- Modal toggle -->
                    <a type="button" data-modal-target="form_modal_{{$participant['event_participant_id']}}" data-modal-show="form_modal_{{$participant['event_participant_id']}}" class="font-medium text-neutral-6 dark:text-neutral-5 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-list">
                            <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                            <path d="M12 11h4" />
                            <path d="M12 16h4" />
                            <path d="M8 11h.01" />
                            <path d="M8 16h.01" />
                        </svg>
                    </a>
                </td>

                <td>
                    <div x-show="quickApprove" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" class="flex flex-nowrap gap-2">

                        <button wire:click.prevent="changeProgress('{{ $participant['event_participant_id'] }}', '{{ \App\Models\EventParticipants::PROGRESS_IS_CHECK_IN }}')" wire:confirm="'Are you sure to check in this participant?'" type="button" class="p-2 text-sm text-nowrap text-white bg-green-500 rounded-lg hover:bg-green-600">
                            Check In
                        </button>



                        <button wire:click.prevent="changeProgress('{{ $participant['event_participant_id'] }}', , '{{ \App\Models\EventParticipants::PROGRESS_IS_CHECK_OUT }}')" wire:confirm="Are you sure to check out this participant?" type="button" class="p-2 text-sm text-nowrap text-white bg-red-500 rounded-lg hover:bg-red-600">
                            Check Out
                        </button>
                    </div>

                </td>



                <td>
                    <!-- Edit user modal -->
                    <div id="form_modal_{{$participant['event_participant_id']}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-3xl max-h-full bg-white p-4 rounded-md">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        {{$participant['event_participant_id']}}
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="form_modal_{{$participant['event_participant_id']}}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>

                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">



                                    <h1>Status</h1>
                                    <div class="flex flex-row gap-2">
                                        <button wire:click.prevent="changeStatus('{{ $participant['event_participant_id'] }}', '{{ \App\Models\EventParticipants::STATUS_NORMAL }}')" wire:confirm="Are you sure to check in this participant?" type="button" class="p-2 text-sm text-nowrap text-white bg-green-500 rounded-lg hover:bg-green-600" data-modal-hide="form_modal_{{$participant['event_participant_id']}}">
                                            Normal
                                        </button>
                                        <button wire:click.prevent="changeStatus('{{ $participant['event_participant_id'] }}', '{{ \App\Models\EventParticipants::STATUS_CANCELLED }}')" wire:confirm="Are you sure to check out this participant?" type="button" class="p-2 text-sm text-nowrap text-white bg-red-500 rounded-lg hover:bg-red-600" data-modal-hide="form_modal_{{$participant['event_participant_id']}}">
                                            Cancel
                                        </button>
                                        <button wire:click.prevent="changeStatus('{{ $participant['event_participant_id'] }}', '{{ \App\Models\EventParticipants::STATUS_REMOVED }}')" wire:confirm="Are you sure to review this participant?" type="button" class="p-2 text-sm text-nowrap text-white bg-blue-500 rounded-lg hover:bg-blue-600" data-modal-hide="form_modal_{{$participant['event_participant_id']}}">
                                            Removed
                                        </button>
               
                                    </div>
                          
                                    <h1>Progress</h1>
                                    <div class="flex flex-row gap-2">
                                        <button wire:click.prevent="changeProgress('{{ $participant['event_participant_id'] }}', '{{ \App\Models\EventParticipants::PROGRESS_IS_CHECK_IN }}')" wire:confirm="Are you sure to check in this participant?" type="button" class="p-2 text-sm text-nowrap text-white bg-green-500 rounded-lg hover:bg-green-600" data-modal-hide="form_modal_{{$participant['event_participant_id']}}">
                                            Check In
                                        </button>
                                        <button wire:click.prevent="changeProgress('{{ $participant['event_participant_id'] }}', '{{ \App\Models\EventParticipants::PROGRESS_IS_CHECK_OUT }}')" wire:confirm="Are you sure to check out this participant?" type="button" class="p-2 text-sm text-nowrap text-white bg-red-500 rounded-lg hover:bg-red-600" data-modal-hide="form_modal_{{$participant['event_participant_id']}}">
                                            Check Out
                                        </button>
                                        <button wire:click.prevent="changeProgress('{{ $participant['event_participant_id'] }}', '{{ \App\Models\EventParticipants::PROGRESS_IS_REVIEWED }}')" wire:confirm="Are you sure to review this participant?" type="button" class="p-2 text-sm text-nowrap text-white bg-blue-500 rounded-lg hover:bg-blue-600" data-modal-hide="form_modal_{{$participant['event_participant_id']}}">
                                            Review
                                        </button>
                                        <button wire:click.prevent="changeProgress('{{ $participant['event_participant_id'] }}', '{{ \App\Models\EventParticipants::PROGRESS_IS_COMPLETED }}')" wire:confirm="Are you sure to  complete this participant?" type="button" class="p-2 text-sm text-nowrap text-white bg-yellow-500 rounded-lg hover:bg-yellow-600" data-modal-hide="form_modal_{{$participant['event_participant_id']}}">
                                            Complete
                                        </button>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="5" class="text-center py-4 text-gray-500 dark:text-gray-400">
                    No participants found
                </td>
            </tr>

            @endforelse
        </tbody>
    </table>
</div>