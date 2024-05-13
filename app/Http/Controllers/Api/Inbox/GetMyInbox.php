<?php

namespace App\Http\Controllers\Api\Inbox;

use App\Http\Controllers\Controller;
use App\Http\Resources\InboxResource;
use Illuminate\Http\Request;
use App\Models\Inbox;

class GetMyInbox extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(Request $request)
    {
        return $this->getMyInbox($request);
    }

    public function getMyInbox(Request $request)
    {
        $inbox = Inbox::where('user_recieve_id', auth()->user()->user_id)->get();
        return response()->json([
            'message' => 'Inbox found !!!',
            'data' => InboxResource::collection($inbox)
        ]);
    }
}
