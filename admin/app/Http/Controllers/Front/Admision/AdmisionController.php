<?php
namespace MetodikaTI\Http\Controllers\Front\Admision;
use MetodikaTI\Http\Controllers\Controller;

class AdmisionController extends Controller
{
    public function getAdmision()
    {
        return view('front.admision.admision');
    }
}
