<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard;

use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function getHome()
    {
      return view('back.dashboard.dashboard.home');
    }
}
