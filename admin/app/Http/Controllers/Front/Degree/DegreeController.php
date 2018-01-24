<?php

namespace MetodikaTI\Http\Controllers\Front\Degree;

use MetodikaTI\Http\Controllers\Controller; 

class DegreeController extends Controller
{
//    humanity
    public function getPsychology()
    {
        return view('front.professional.humanity.psychology');
    }

//    engineering
    public function getArchitecture()
    {
        return view('front.professional.engineering.architecture');
    }

    public function getCivilEngineering()
    {
        return view('front.professional.engineering.civil-engineering');
    }

    public function getElectricalEngineering()
    {
        return view('front.professional.engineering.electrical-engineering');
    }

    public function getEngineeringSustainableEnergy()
    {
        return view('front.professional.engineering.engineering-sustainable-energy');
    }

    public function getEngineeringmechatronics()
    {
        return view('front.professional.engineering.mechatronics');
    }
    public function getComputationalTechnologies()
    {
        return view('front.professional.engineering.computational-technologies');
    }
    public function getIndustrialSystems()
    {
        return view('front.professional.engineering.industrial-system');
    }
    public function getIndustrialSystemsOnline()
    {
        return view('front.professional.engineering.industrial-system-online');
    }
    public function getIndustrialMechanic()
    {
        return view('front.professional.engineering.industrial-mechanic');
    }
    public function getMechanicalElectrical()
    {
        return view('front.professional.engineering.mechanical-electrical');
    }
    public function getPetrochemicalEngineering()
    {
        return view('front.professional.engineering.petrochemical-engineering');
    }
    public function getDigitalAnimation()
    {
        return view('front.professional.engineering.digital-animation');
    }

    public function getGraphicDesign()
    {
        return view('front.professional.engineering.graphic-design');
    }
}