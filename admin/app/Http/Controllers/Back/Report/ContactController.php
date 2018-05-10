<?php

namespace MetodikaTI\Http\Controllers\Back\Report;

use Illuminate\Http\Request;
use MetodikaTI\Contact;
use MetodikaTI\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class ContactController extends Controller
{


    function getHome(){

        $dates = Contact::select(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') as create_at_format"))->groupBy("create_at_format")->orderBy("create_at_format", "ASC")->get();


        $graph = array();

        foreach ($dates as $key => $value){

            $date = Carbon::parse($value->create_at_format);
            $total_contact = Contact::whereDay('created_at', '=', $date->day)
                ->whereMonth('created_at', '=', $date->month)
                ->whereYear('created_at', '=', $date->year)->count();

            $graph[] = array(
                "label" => self::translate_date($date),
                "y" => $total_contact
            );

        }


        return view("back.report.contact_info.home", ["dates" => json_encode($graph), "start_date" => "", "end_date" => ""]);
    }

    function getHome_with_filter( $day_start, $month_start, $year_start, $day_finish, $month_finish, $year_finish ){

        $dates = Contact::select(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') as create_at_format"))

            ->whereDate('created_at', '>=', $year_start."-".$month_start."-".$day_start )
            ->whereDate('created_at', '<=', $year_finish."-".$month_finish."-".$day_finish)

            ->groupBy("create_at_format")
            ->orderBy("create_at_format", "ASC")
            ->get();

//        dd($dates);

        $graph = array();

        foreach ($dates as $key => $value){

            $date = Carbon::parse($value->create_at_format);
            $total_contact = Contact::whereDay('created_at', '=', $date->day)
                ->whereMonth('created_at', '=', $date->month)
                ->whereYear('created_at', '=', $date->year)->count();

            $graph[] = array(
                "label" => self::translate_date($date),
                "y" => $total_contact
            );

        }


        return view("back.report.contact_info.home", ["dates" => json_encode($graph), "start_date" => ($day_start."/".$month_start."/".$year_start), "end_date" => ($day_finish."/".$month_finish."/".$year_finish)]);
    }

    public function translate_date($date){



        switch ($date->month) {
            case 1:
                $mes = 'Enero';
                break;
            case 2:
                $mes = 'Febrero';
                break;
            case 3:
                $mes = 'Marzo';
                break;
            case 4:
                $mes = 'Abril';
                break;
            case 5:
                $mes = 'Mayo';
                break;
            case 6:
                $mes = 'Junio';
                break;
            case 7:
                $mes = 'Julio';
                break;
            case 8:
                $mes = 'Agosto';
                break;
            case 9:
                $mes = 'Septiembre';
                break;
            case 10:
                $mes = 'Octubre';
                break;
            case 11:
                $mes = 'Noviembre';
                break;
            case 12:
                $mes = 'Diciembre';
                break;
        }


        return $date->day . "-" . $mes . "-" . $date->year;
    }



    public function getHome_list()
    {
        $emails = Contact::orderBy('name')->get();
        return view('back.product.email.home', ['emails' => $emails, 'centinel' => 1]);
    }

    public function postStore(Request $request)
    {

        $response = [];
        $emails = new Contact();
        $emails->inicio = $request->fechaInicio;
        $emails->fin = $request->fechaFin;
        $emails->reportes = $request->reportes;

        if ($emails->reportes == 'excel') {
            dd("Esto es un Excel");
        }else{
            $pdf = Contact::all();

            dd($pdf);
        }







        return view('back.product.email.home', ['emails' => $emails, 'centinel' => 1]);
    }




}
