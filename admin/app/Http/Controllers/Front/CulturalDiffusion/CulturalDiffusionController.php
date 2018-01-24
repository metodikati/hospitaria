<?php

namespace MetodikaTI\Http\Controllers\Front\CulturalDiffusion;

use MetodikaTI\Http\Controllers\Controller;

class CulturalDiffusionController extends Controller
{
    public function getGroupWorkshops()
    {
        return view('front.student-life.cultural-diffusion.group-workshops');
    }

    public function getIndividualWorkshops()
    {
        return view('front.student-life.cultural-diffusion.individual-workshops');
    }

    public function getRepresentativeGroup()
    {
        return view('front.student-life.cultural-diffusion.representative-group');
    }
}
