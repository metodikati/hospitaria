<?php

namespace MetodikaTI\Http\Controllers\Front\Sport;

use MetodikaTI\Http\Controllers\Controller;

class SportController extends Controller
{
    public function getVolleyball()
    {
        return view('front.student-life.sport.volleyball');
    }

    public function getBeachVolleyball()
    {
        return view('front.student-life.sport.beach-volleyball');
    }

    public function getBaseball()
    {
        return view('front.student-life.sport.baseball');
    }

    public function getBasketball()
    {
        return view('front.student-life.sport.basketball');
    }

    public function getSoccer()
    {
        return view('front.student-life.sport.soccer');
    }

    public function getTaekwondo()
    {
        return view('front.student-life.sport.taekwondo');
    }

}
