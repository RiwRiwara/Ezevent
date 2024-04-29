<?php

namespace App\Http\Controllers\Api\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;

class GetMyApplication extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(Request $request)
    {
        $this->getMyApplication($request);
    }


    public function getMyApplication(Request $request)
    {
        $user_id = auth()->user()->user_id;

        $applications = Application::with('event')
            ->where('user_id', $user_id)
            ->orderBy('application_date', 'desc')
            ->paginate(10);

        if ($applications->count() == 0) {
            return response()->json([
                'message' => 'No applications found !!!',
                'success' => 'false'
            ]);
        } else {
            return response()->json([
                'message' => 'My applications found !!!',
                'event_application' => $applications,
                'success' => 'true'
            ]);
        }
    }
}
