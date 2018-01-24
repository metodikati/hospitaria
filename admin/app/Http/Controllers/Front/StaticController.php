<?php

namespace MetodikaTI\Http\Controllers\Front;

use Carbon\Carbon;
use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;

class StaticController extends Controller
{
    public function getHome()
    {
        $now = Carbon::now()->format('Y-m-d');
        return view('front.index', ['back_to_school' => $now]);
    }

    public function getOffer()
    {
        return view('front.offer');
    }

    public function getAccess()
    {
        return view('front.access');
    }

    public function getStudentLife()
    {
        return view('front.student-life.student-life');
    }

    public function getStudentGroups()
    {
        return view('front.student-life.student-groups');
    }

    public function getSports()
    {
        return view('front.student-life.sports');
    }

    public function getCulturalDiffusion()
    {
        return view('front.student-life.cultural-diffusion');
    }

    public function getSchoolChange()
    {
        return view('front.student-life.school-exchange');
    }

    public function getEmployability()
    {
        return view('front.student-life.employability');
    }

    public function getLibrary()
    {
        return view('front.student-life.library');
    }

    public function getExperience()
    {
        return view('front.experience.experience');
    }

    public function getProfessional()
    {
        return view('front.professional.professional');
    }

    public function getHighSchool()
    {
        return view('front.highschool.highschool');
    }

    public function getPostgraduate()
    {
        return view('front.postgraduate.postgraduate');
    }

    public function getContinuousEducation()
    {
        return view('front.continuous-education.continuous-education');
    }

    public function getContact()
    {
        return view('front.contact');
    }

    public function getCalendar()
    {
        return view('front.calendar');
    }

    public function getNews()
    {
        return view('front.news');
    }
}
