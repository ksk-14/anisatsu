<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SelfController extends Controller
{
    public function getRoom($workId, $episodeId){
        dd($workId);
    }
}
