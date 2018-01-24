<?php

namespace MetodikaTI\Http\Controllers\Front\Postgraduate;

use MetodikaTI\Http\Controllers\Controller;

class EngineeringController extends Controller
{
    function getIndustrialProcesses() {
        return view('front.postgraduate.engineering.m-industrial-processes');
    }

    function getIndustrialProcessesOnline() {
        return view('front.postgraduate.engineering.m-industrial-processes-online');
    }

    function getSecurityHealth(){
        return view('front.postgraduate.engineering.m-security-health');
    }

    function getMasteryLogistics(){
        return view('front.postgraduate.engineering.m-mastery-logistics');
    }

    function getMasteryLogisticsOnline(){
        return view('front.postgraduate.engineering.m-mastery-logistics-online');
    }

    function getSocialResponsibility(){
        return view('front.postgraduate.engineering.m-social-responsibility');
    }

    function getSocialResponsibilityOnline(){
        return view('front.postgraduate.engineering.m-social-responsibility-online');
    }

    function getInformationTechnology(){
        return view('front.postgraduate.engineering.m-information-technology');
    }

}