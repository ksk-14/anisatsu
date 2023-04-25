<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class SelfController extends Controller
{
    public function getRoom($workId, $episodeId=null){
        if ($episodeId === null) {
            $rooms = Room::where('anime_id', $workId)->get();
        } else {
            $rooms = Room::where('anime_id', $workId)->where('episode', $episodeId)->get();
        }
        return $rooms;
    }
}
