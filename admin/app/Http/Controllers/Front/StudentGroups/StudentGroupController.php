<?php

namespace MetodikaTI\Http\Controllers\Front\StudentGroups;

use MetodikaTI\Http\Controllers\Controller;

class StudentGroupController extends Controller
{
    public function getAssociations()
    {
        return view('front.student-life.student-groups.associations');
    }

    public function getBoardDirectior()
    {
        return view('front.student-life.student-groups.board-directors');
    }

    public function getStudentFederation()
    {
        return view('front.student-life.student-groups.student-federation');
    }
}
