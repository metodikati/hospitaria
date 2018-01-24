<?php

namespace MetodikaTI\Http\Controllers\Front\Degree;

use MetodikaTI\Http\Controllers\Controller;

class HumanityController extends Controller
{
    public function getBilingual()
    {
        return view('front.professional.humanity.bilingual-education');
    }

    public function getLegalSciences()
    {
        return view('front.professional.humanity.legal-sciences');
    }

    public function getComunication()
    {
        return view('front.professional.humanity.social-comunication');
    }
}