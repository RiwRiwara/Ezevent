<?php

namespace App\Http\Controllers\Api\Badge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiveBadge;
use App\Models\Badge;

class GetMyBadges extends Controller
{

    public function __invoke(Request $request)
    {
        return $this->getMyBadges($request);
    }

    public function getMyBadges(Request $request)
    {

        $user = $request->user();
        $badges = GiveBadge::where('user_id', $user->id)->get();
        $badges = $badges->map(function ($badge) {
            $badge->badge = Badge::find($badge->badge_id);
            return $badge;
        });

        $allBadges = Badge::all();
        $result = [];
        foreach ($allBadges as $badge) {
            $count = 0;
            foreach ($badges as $myBadge) {
                if ($badge->id == $myBadge->badge_id) {
                    $count++;
                }
            }
            $result[] = [
                'event_id' => $badge->id,
                'count' => $count,
                'name_en' => $badge->name_en,
                'name_th' => $badge->name_th,
                'url' => $badge->url
            ];
        }


        return response()->json([
            'message' => 'Get my badges',
            'myBadges' => $result,
            'success' => 'true'
        ], 200);
    }
}
