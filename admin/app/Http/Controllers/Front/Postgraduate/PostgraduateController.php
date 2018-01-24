<?php

namespace MetodikaTI\Http\Controllers\Front\Postgraduate;

use MetodikaTI\Http\Controllers\Controller;

class PostgraduateController extends Controller
{
    public function getMarketing()
    {
        return view('front.postgraduate.business.mbamercadotecnia');
    }
    public function getFinanceAdministration()
    {
        return view('front.postgraduate.business.mbafinanzas');
    }
    public function getInternationalBusiness()
    {
        return view('front.postgraduate.business.mbanegocios-internacionales');
    }
    public function getOrganizationalDevelopment()
    {
        return view('front.postgraduate.business.mbadesarrollo-organizacional');
    }
    public function getGlobalManagement()
    {
        return view('front.postgraduate.business.mbagerencia-global');
    }
    public function getHumanResources()
    {
        return view('front.postgraduate.business.mbarecursos-humanos');
    }
    public function getHumanCapital()
    {
        return view('front.postgraduate.business.mbacapital-humano');
    }
    public function getHumanCapitalOnline()
    {
        return view('front.postgraduate.business.mbacapital-humano-online');
    }
    public function getInsurances()
    {
        return view('front.postgraduate.business.insurance-online');
    }
}
