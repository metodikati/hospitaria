<?php

namespace MetodikaTI\Http\Controllers\Front\Degree;

use MetodikaTI\Http\Controllers\Controller;

class BusinessController extends Controller
{
    public function getBusiness()
    {
        return view('front.professional.business.business-administration');
    }
    public function getTourist()
    {
        return view('front.professional.business.tourist-companies');
    }
    public function getGastronomic()
    {
        return view('front.professional.business.gastronomic-administration');
    }
    public function getAccountant()
    {
        return view('front.professional.business.strategic-accountant');
    }
    public function getEconomy()
    {
        return view('front.professional.business.lic-economy');
    }
    public function getFinance()
    {
        return view('front.professional.business.finance');
    }
    public function getMarketing()
    {
        return view('front.professional.business.marketing');
    }
    public function getInternationalBusiness()
    {
        return view('front.professional.business.international-business');
    }
}