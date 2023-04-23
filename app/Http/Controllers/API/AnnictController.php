<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AnnictClient;


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
        // dd($works);
        return $works;
    }

    public function getDetail($id)
    {
        $params = array(
            "filter_ids" => $id,
        );
        $works = $this->annictClient->getWorks($params);
        return $works;
    }
}
