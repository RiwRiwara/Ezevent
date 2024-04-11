<?php

namespace App\Livewire;

use App\Models\EventParticipants;
use App\Models\Application;
use Livewire\Component;

class ApplicationTable extends Component
{
    public $eventApplications;
    public $loop;

    public function mount($eventApplications = null)
    {
        $this->eventApplications = $eventApplications;
    }



    public function render()
    {
        return view('livewire.application-table');
    }

    public function approved($applicationId)
    {
        //  Update application status to approved
        $application = Application::where('application_id', $applicationId)->firstOrFail();
        $application->update([
            'status' => Application::APPLICATION_STATUS_APPROVED,
            'approved_date' => now()
        ]);


        // Create event participant status to approved
        $eventParticipant = EventParticipants::create([
            'event_participant_id' => uniqid('event_participant_'),
            'event_id' => $application->event_id,
            'user_id' => $application->user_id,
            'role' => $application->type,
            'position' => null,
            'status' => EventParticipants::STATUS_NORMAL,
            'created_by' => auth()->user()->user_id
        ]);
     

        for ($i = 0; $i < count($this->eventApplications); $i++) {
            if ($this->eventApplications[$i]['application_id'] == $applicationId) {
                $this->eventApplications[$i]['status'] = Application::APPLICATION_STATUS_APPROVED;
                break;
            }
        }


        toastr()->addSuccess('Application approved');
    }

    public function rejected($applicationId)
    {
        $application = Application::where('application_id', $applicationId)->firstOrFail();
        $application->update([
            'status' => Application::APPLICATION_STATUS_REJECTED,
            'approved_date' => now()
        ]);

        for ($i = 0; $i < count($this->eventApplications); $i++) {
            if ($this->eventApplications[$i]['application_id'] == $applicationId) {
                $this->eventApplications[$i]['status'] = Application::APPLICATION_STATUS_REJECTED;
                break;
            }
        }


        toastr()->addWarning('Application rejected');
    }

}
