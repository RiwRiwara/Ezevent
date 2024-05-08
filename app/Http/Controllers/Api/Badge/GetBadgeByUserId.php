<?php

namespace App\Http\Controllers\Api\Badge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GiveBadge;
use App\Models\Badge;

class GetBadgeByUserId extends Controller
{

    public function __invoke(Request $request)
    {
        return $this->getBadgeByUserId($request->user_id);
    }

    public function getBadgeByUserId(string $user_id)
    {
            $badges = GiveBadge::where('user_id', $user_id)->get();
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
                $badge_data[] = [
                    'event_id' => $badge->id,
                    'count' => $count,
                    'name_en' => $badge->name_en,
                    'name_th' => $badge->name_th,
                    'url' => $badge->url
                ];
            }
            return view('livewire.application-table', compact('badge_data'));
    }
}
    