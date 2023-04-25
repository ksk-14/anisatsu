<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AnnictClient;
use App\Http\Controllers\API\SelfController;


class AnnictController extends Controller
{
    private $annictClient;

    public function __construct(AnnictClient $annictClient)
    {
        $this->annictClient = $annictClient;
    }

    public function getIndex()
    {
        $params = array(
            "filter_season" => "2023-spring",
            "sort_watchers_count" => "desc",
            "per_page" => 15,
        );
        $works = $this->annictClient->getWorks($params);
        return $works;
    }

    public function getDetail($id)
    {
        $selfController = new SelfController();
        $rooms = $selfController->getRoom($id);
        $worksParams = array(
            "filter_ids" => $id,
        );
        $episodesParams = array(
            "filter_work_id" => $id,
            'sort_sort_number' => 'asc',
        );
        $worksResult = $this->annictClient->getWorks($worksParams);
        $episodesResult = $this->annictClient->getEpisodes($episodesParams);
        $works = $worksResult['works'][0];
        $episodes = $episodesResult['episodes'];
        // dd($rooms);
        return view('detail', compact('works', 'episodes', 'rooms'));
    }
}
