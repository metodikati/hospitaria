<?php

namespace MetodikaTI\Http\Controllers\Front\Information;

use MetodikaTI\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InformationController extends Controller
{
    public function getInformation()
    {
        return view('front.information.information');
    }

    public function getResources()
    {
        return view('front.information.resources');
    }

    public function getSchool()
    {
        return view('front.information.school');
    }

    public function getCeneval()
    {
        return view('front.information.ceneval');
    }

    public function getCertificate()
    {
        return view('front.information.certificate');
    }

    public function getExAlumnos()
    {
        return view('front.information.ex-student');
    }

    public function getNoticeprivacy()
    {
        return view('front.information.notice-of-privacy');
    }

    public function getEstablishment()
    {
        return view('front.information.establishment');
    }

    public function getBecas()
    {
        return view('front.information.becas');
    }

    /**
     * ---------------------------
     * otras-actividades
     * ---------------------------
     */

    public function getOtherActivities()
    {
        return view('front.information.other-activities');
    }

    public function getRevalidation()
    {
        return view('front.information.another-ativities.revalidation');
    }

    public function getPaaAndPaep()
    {
        return view('front.information.another-ativities.paa-paep');
    }

    public function getToefl()
    {
        return view('front.information.another-ativities.toefl');
    }

    public function getVocationalOrientation()
    {
        return view('front.information.another-ativities.vocational-orientation');
    }

    public function getGuidedVisits()
    {
        return view('front.information.another-ativities.guided-visits');
    }
}