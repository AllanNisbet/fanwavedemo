<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Model\TheSportsDB;


class TheSportDBController extends Controller
{
    public function getAllSports()
    {
        $allSportsUrl = 'https://www.thesportsdb.com/api/v1/json/2/all_sports.php';
        $collection = Http::post($allSportsUrl);
        return view('sports', ['collection'=>$collection['sports']]);
    }

    public function getAllLeagues()
    {
        $allLeaguesUrl = 'https://www.thesportsdb.com/api/v1/json/2/all_leagues.php';
        $collection = Http::post($allLeaguesUrl);
        return view('leagues', ['collection'=>$collection['leagues']]);
    }

    public function getAllTeamsInALeague(Request $request)
    {
        $teamsInLeagueUrl = sprintf(
            'https://www.thesportsdb.com/api/v1/json/2/search_all_teams.php?l=%s',
            $request->leagueName
        );
        $collection = Http::post($teamsInLeagueUrl);
        return view('leagues/teams', ['collection'=>$collection['leagues']]);
    }

    public function getPlayerByName(Request $request)
    {
        $playerSearchUrl = sprintf(
            'https://www.thesportsdb.com/api/v1/json/2/searchplayers.php?p=%s',
            $request->playerName
        );
        $collection = Http::post($playerSearchUrl);
        return view('search/player', ['collection'=>$collection['player']]);
    }
}
