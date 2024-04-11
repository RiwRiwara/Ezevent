<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\EventParticipants;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;


class ParticipantTable extends Component
{
    public $eventParticipants;
    public $loop;

    public function mount($eventParticipants)
    {
        $this->eventParticipants = $eventParticipants;
        for ($i = 0; $i < count($this->eventParticipants); $i++) {
            $this->eventParticipants[$i]['stepperHtml'] = $this->setStepper($this->eventParticipants[$i]);
        }
    }

    public function render()
    {
        return view('livewire.participant-table');
    }



    public function changeProgress($eventParticipantId, $progress)
    {
        EventParticipants::changeProgress($eventParticipantId, $progress);
        $this->refreshRow($eventParticipantId);
        toastr()->addSuccess('Progress changed to ' . $progress . '!!!');
    }

    public function changeStatus($eventParticipantId, $status)
    {
        EventParticipants::changeStatus($eventParticipantId, $status);
        $this->refreshStatus($eventParticipantId);
        toastr()->addSuccess('Status changed!!!');
    }

    public function setStepper($currentParticipant)
    {


        $checkInTime = $currentParticipant['check_in_time'] ? //if
            '<span class="flex items-center  justify-center w-5 h-5 me-2 text-xs border border-green-600 bg-green-100 text-green-600 rounded-full shrink-0 dark:border-white">
                    1
                </span>'
            . '<div class="text-green-500">' . 'Check in' . '</div>'
            // else
            :
            '<span class="flex items-center  justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    1
                </span>'
            . 'Check In';

        $checkOutTime = $currentParticipant['check_out_time'] ? //if
            '<span class="flex items-center  justify-center w-5 h-5 me-2 text-xs border border-green-600 bg-green-100 text-green-600 rounded-full shrink-0 dark:border-white">
                2
            </span>'
            . '<div class="text-green-500">' . 'Check out' . '</div>'
            // else
            :
            '<span class="flex items-center  justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    2
                </span>'
            . 'Check Out';

        $reviewTime = $currentParticipant['review_time'] ? //if
            '<span class="flex items-center  justify-center w-5 h-5 me-2 text-xs border border-green-600 bg-green-100 text-green-600 rounded-full shrink-0 dark:border-white">
                    3
                </span>'
            . '<div class="text-green-500">' . 'Review' . '</div>'
            // else
            :
            '<span class="flex items-center  justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    3
                </span>'
            . 'Review';

        $completedTime = $currentParticipant['completed_time'] ? //if
            '<span class="flex items center  justify-center w-5 h-5 me-2 text-xs border border-green-600 bg-green-100 text-green-600 rounded-full shrink-0 dark:border-white">
                    4
                </span>'
            . '<div class="text-green-500">' . 'Complete' . '</div>'
            // else
            :
            '<span class="flex items
                center  justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    4
                </span>'
            . 'Complete';





        return '<div class="flex items-center text-xs w-full p-3 space-x-2  font-medium text-center text-nowrap text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
                <div class="flex items-center text-xs  dark:text-neutral-5">
                        ' . $checkInTime . '
                    <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                    </svg>

                </div>
                <div class="flex items-center text-xs">
                        ' . $checkOutTime . '
                    <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                    </svg>
                </div>
                <div class="flex items-center text-xs">
                    ' . $reviewTime . '
                    <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                    </svg>
                </div>
                <div class="flex items-center text-xs">
                    ' . $completedTime . '
                </div>
            </div>';
    }

    public function refreshRow($eventParticipantId)
    {
        for ($i = 0; $i < count($this->eventParticipants); $i++) {
            if ($this->eventParticipants[$i]['event_participant_id'] == $eventParticipantId) {
                $this->eventParticipants[$i]['stepperHtml'] = $this->setStepper(EventParticipants::where('event_participant_id', $eventParticipantId)->first());
                break;
            }
        }
    }

    public function refreshStatus($eventParticipantId)
    {
        for ($i = 0; $i < count($this->eventParticipants); $i++) {
            if ($this->eventParticipants[$i]['event_participant_id'] == $eventParticipantId) {
                $this->eventParticipants[$i]['status'] = EventParticipants::where('event_participant_id', $eventParticipantId)->first()->status;
                break;
            }
        }
    }
}
