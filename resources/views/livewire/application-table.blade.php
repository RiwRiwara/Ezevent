<div x-data="{ quickApprove: false, allowConfirm :true}">

    <div class="flex justify-end gap-2">


        <button @click="quickApprove=!quickApprove" :class="{ 'bg-green-500': quickApprove, 'bg-gray-500': !quickApprove }" class="text-white px-2 py-1 rounded-md my-1">
            <span class="ms-2">Quick Action</span>
        </button>

    </div>


    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Position
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Application date
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>

            </tr>
        </thead>

        <tbody>


            @forelse ($eventApplications as $application)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-3">
                    <div class="text-gray-900 dark:text-white">
                        {{ $loop->index + 1 }}
                    </div>
                </td>

                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">

                    <div class="ps-3">
                        <div class="text-base font-semibold">
                            {{ $application['user']['first_name'] }} {{ $application['user']['last_name'] }}
                        </div>
                        <div class="font-normal text-gray-500">
                            {{ $application['user']['email'] }}
                        </div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    <div class="text-gray-900 dark:text-white text-center p-0.5 rounded-md
                    {{
                        $application['type'] == 'Participant' ? 'text-neutral-8 bg-neutral-2' : 'text-primary-7 bg-primary-2'
                    }}
                    ">
                        {{ $application['type'] }}
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-center
                    p-0.5 rounded-md
                    {{
                        $application['status'] == 'Approved' ? 'text-green-800 bg-green-100' : ($application['status'] == 'Rejected' ? 'text-red-500 bg-red-100' : 'text-yellow-500 bg-yellow-100')
                    }}">
                        {{ $application['status'] }}
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-gray-900 dark:text-white text-nowrap">
                        {{ \Carbon\Carbon::parse($application['created_at'])->timezone('Asia/Bangkok')->format('M d, Y H:i') }}

                    </div>
                </td>
                <td class="px-6 py-4" x-show="! quickApprove">
                    <!-- Modal toggle -->
                    <a href="#" type="button" data-modal-target="form_modal_{{$application['application_id']}}" data-modal-show="form_modal_{{$application['application_id']}}" class="font-medium text-neutral-6 dark:text-neutral-5 hover:underline">
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
                        @if ($application['status'] == 'Approved')
                        <button disabled type="button" class="p-2 text-sm text-white bg-green-200 rounded-lg">
                            Approve
                        </button>
                        <button disabled type="button" class="p-2 text-sm text-white bg-red-200 rounded-lg">
                            Reject
                        </button>
                        @elseif ($application['status'] == 'Rejected')
                        <button wire:click.prevent="approved('{{ $application['application_id'] }}')" wire:confirm="Are you sure to approve this application?" type="button" class="p-2 text-sm text-white bg-green-500 rounded-lg hover:bg-green-600">
                            Approve
                        </button>
                        <button disabled type="button" class="p-2 text-sm text-white bg-red-200 rounded-lg">
                            Reject
                        </button>
                        @else
                        <button wire:click.prevent="approved('{{ $application['application_id'] }}')" wire:confirm="Are you sure to approve this application?" type="button" class="p-2 text-sm text-white bg-green-500 rounded-lg hover:bg-green-600">
                            Approve
                        </button>
                        <button wire:click.prevent="rejected('{{ $application['application_id'] }}')" wire:confirm="Are you sure to reject this application?" type="button" class="p-2 text-sm text-white bg-red-500 rounded-lg hover:bg-red-600">
                            Reject
                        </button>
                        @endif
                    </div>

                </td>



                <td>
                    <!-- Edit user modal -->
                    <div id="form_modal_{{$application['application_id']}}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-3xl max-h-full bg-white p-4 rounded-md">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        {{$application['application_id']}}
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="form_modal_{{$application['application_id']}}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>

                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">



                                    <!-- Approve and reject button -->
                                    <div class="flex justify-between gap-2">
                                        @if ($application['status'] == 'Approved')
                                        <button data-modal-hide="form_modal_{{$application['application_id']}}" disabled type="button" class="p-2 text-sm text-white bg-green-200 rounded-lg">
                                            Approve
                                        </button>
                                        <button data-modal-hide="form_modal_{{$application['application_id']}}" disabled type="button" class="p-2 text-sm text-white bg-red-200 rounded-lg">
                                            Reject
                                        </button>
                                        @else
                                        <button data-modal-hide="form_modal_{{$application['application_id']}}" wire:click.prevent="approved('{{ $application['application_id'] }}')" wire:confirm="Are you sure to approve this application?" type="button" class="p-2 text-sm text-white bg-green-500 rounded-lg hover:bg-green-600">
                                            Approve
                                        </button>
                                        <button data-modal-hide="form_modal_{{$application['application_id']}}" wire:click.prevent="rejected('{{ $application['application_id'] }}')" wire:confirm="Are you sure to reject this application?" type="button" class="p-2 text-sm text-white bg-red-500 rounded-lg hover:bg-red-600">
                                            Reject
                                        </button>

                                        @endif
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
                    No applications found
                </td>
            </tr>

            @endforelse
        </tbody>
    </table>
</div>