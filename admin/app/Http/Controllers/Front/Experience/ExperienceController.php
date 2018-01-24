<?php

namespace MetodikaTI\Http\Controllers\Front\Experience;

use MetodikaTI\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    public function getHistory()
    {
        return view('front.experience.history');
    }

    public function getNewPlaces()
    {
        return view('front.experience.new-places');
    }

    public function getAipi()
    {
        return view('front.experience.aipi');
    }

    public function getLabCity()
    {
        return view('front.experience.lab-city');
    }

    public function getUban()
    {
        return view('front.experience.urban');
    }

    public function getRadio()
    {
        return view('front.experience.radio');
    }

    public function getProfile()
    {
        return view('front.experience.profile');
    }

    public function getTour()
    {
        return view('front.experience.virtual-tour');
    }

    public function getWhatsapp()
    {
        return view('front.experience.whatsapp');
    }
}
