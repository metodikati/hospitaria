<?php

namespace MetodikaTI\Http\Controllers\Front\Experience\NewPlaces;

use MetodikaTI\Http\Controllers\Controller;

class NewPlaceController extends Controller
{
    public function getSocialArea()
    {
        return view('front.experience.new-places.social-area');
    }

    public function getBoutique()
    {
        return view('front.experience.new-places.boutique');
    }

    public function getCafeteria()
    {
        return view('front.experience.new-places.cafeteria');
    }

    public function getField()
    {
        return view('front.experience.new-places.field');
    }

    public function getHealtly()
    {
        return view('front.experience.new-places.healthy');
    }

    public function getColoreteado()
    {
        return view('front.experience.new-places.coloreteado');
    }

    public function getActivationLab()
    {
        return view('front.experience.new-places.activation-lab');
    }

    public function getLearningLab()
    {
        return view('front.experience.new-places.learning-lab');
    }

    public function getLearningLab01()
    {
        return view('front.experience.new-places.learning-lab-01');
    }

    public function getLearningLab03()
    {
        return view('front.experience.new-places.learning-lab-03');
    }

    public function getLearningLab03_2()
    {
        return view('front.experience.new-places.learning-lab-03-2');
    }

    public function getCisco()
    {
        return view('front.experience.new-places.cisco');
    }

    public function getSnack()
    {
        return view('front.experience.new-places.snack01');
    }
}