<?php

namespace MetodikaTI\Http\Controllers\Front\Postgraduate;

use MetodikaTI\Http\Controllers\Controller;

class HumanityController extends Controller
{
	    /*Humanidades*/
    public function getMasteryCommunication()
    {
        return view('front.postgraduate.humanity.mastery-communication');
    }
    public function getLawCompany()
    {
        return view('front.postgraduate.humanity.derecho-empresa');
    }
    public function getLawFiscal()
    {
        return view('front.postgraduate.humanity.derecho-fiscal');
    }
    public function getLawFiscalOnline()
    {
        return view('front.postgraduate.humanity.derecho-fiscal-online');
    }
    public function getLawLaboral()
    {
        return view('front.postgraduate.humanity.derecho-laboral');
    }
    public function getLawPrivate()
    {
        return view('front.postgraduate.humanity.derecho-privado');
    }
    public function getEducationalMastery()
    {
        return view('front.postgraduate.humanity.maestria-educativa');
    }
    public function getPsychology()
    {
        return view('front.postgraduate.humanity.maestria-psicologia');
    }
    public function  getManagementOfInstitutions()
    {
        return view('front.postgraduate.humanity.management-intitutions');
    }
}