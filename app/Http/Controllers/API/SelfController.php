<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\AnnictController;
use Illuminate\Http\Request;
use App\Models\Room;

class SelfController extends Controller
{
    public function getRooms($workId, $episodeId=null){
        if ($episodeId === null) {
            $rooms = Room::where('anime_id', $workId)->get();
        } else {
            $rooms = Room::where('anime_id', $workId)->where('episode', $episodeId)->get();
        }
        return $rooms;
    }

    public function getRoom($room_id){
        $annictController = new AnnictController();
        $room = Room::where('id', $room_id)->first();
        $works = $annictController->getThreadWork($room['anime_id']);

        return view('thread', compact('works', 'room'));
    }
}
