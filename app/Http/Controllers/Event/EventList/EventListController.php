<?php

namespace App\Http\Controllers\Event\EventList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventListController extends Controller
{
    public function __invoke(Request $request)
    {
        $page_data = [
            'breadcrumbItems' => [
                ['label' => 'Events', 'url' => route('create-event')],
                ['label' => 'Create Event'],
            ]
        ];
        
        return view('logged_in.event-list', compact('page_data'));
    }
}
