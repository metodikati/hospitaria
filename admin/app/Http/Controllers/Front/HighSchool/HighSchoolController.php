<?php 

namespace MetodikaTI\Http\Controllers\Front\HighSchool;

use MetodikaTI\Http\Controllers\Controller;

class HighSchoolController extends Controller
{
    public function getBilingual()
    {
        return view('front.highschool.bilingual');
    }

    public function getIntercultural()
    {
        return view('front.highschool.intercultural');
    }

    public function getInternational()
    {
        return view('front.highschool.international');
    }

    public function getOnline()
    {
        return view('front.highschool.highschool-online');
    }

    public function getValleAlto()
    {
        return view('front.highschool.valle-alto');
    }
}