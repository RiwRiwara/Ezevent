<?php

namespace App\Http\Controllers\Api\Badge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Badge;
use App\Http\Resources\APi\BadgeResource;

class GetBadgeById extends Controller
{
    public function __construct()
    {
        //
    }

    public function __invoke(Request $request)
    {
        return $this->getBadgeById($request);
    }

    public function getBadgeById(string $id)
    {
        $badge = Badge::where('id', $id)->first();
        if ($badge) {
            return response()->json([
                'message' => 'Badge found',
                'badge' => new BadgeResource($badge),
                'success' => 'true'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Badge not found...'
            ], 404);
        }
    }
}
