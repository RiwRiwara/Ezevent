<?php

namespace App\Http\Controllers\Api\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Http\Resources\Api\Event\MyApplicationResource;
use App\Http\Resources\ApplicationResource;

class GetMyApplication extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke()
    {
        $this->getMyApplication();
    }


    public function getMyApplication()
    {
        $user_id = auth()->user()->user_id;
        $applications = Application::with('event')
            ->where('user_id', $user_id)
            ->orderBy('application_date', 'desc')
            ->paginate(10);

        if ($applications->count() == 0) {
            return response()->json([
                'message' => 'No applications found.',
                'success' => 'false'
            ], 404);
        } else {
            return response()->json([
                'message' => 'My applications found.',
                'success' => 'true',
                'applications' =>$applications->map(function ($application) {
                    return new MyApplicationResource($application);
                }),
            ], 200);
        }
    }
}
