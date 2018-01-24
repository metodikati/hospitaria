<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Specialties;

use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;

use MetodikaTI\Http\Requests\Back\Dashboard\Catalog\Specialties\EeventRequest;

use MetodikaTI\Specialties;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use DB;

class SpecialtiesController extends Controller
{
    /**
     * [getHome description]
     * @return [type] [description]
     */
    public function getHome()
    {
     // $events = Specialties::orderBy('id')->get();
      $events = Specialties::orderBy('id')->get();
 

      return view('back.dashboard.specialties.home', ['events' => $events, 'centinel' => 1]);
    }

     /**
     * [getCreate description]
     * @return [type] [description]
     */
    public function getCreate()
    {
        return view('back.dashboard.specialties.create');
    }
    /**
     * [postCreate description]
     * @param  EventRequest $request [description]
     * @return [type]                [description]
     */
    public function postStore(Request $request)
    {

      $response;

      $events = new Specialties();

      $events->name = $request->name;
      $events->estatus = 'Activo';
      $events->save();

 	DB::commit();
    return redirect()->intended('admin/dashboard/especialidades');
    }
    /**
     * [getEdit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */


    public function getEdit($id)
    {
        $events = Specialties::find(base64_decode($id));
        if ($events != null) {
            return view('back.dashboard.specialties.edit', [ 'events' => $events]);
        } else {
            return redirect()->intended('back.dashboard.especialidades.edit');
        }
    }
    /**
     * [getEdit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */


    public function postUpdate(Request $request, $id)
    {
      $response;
      $events = Specialties::find(base64_decode($id));
      	$events->name = $request->name;
      	$events->update();
      return redirect()->intended('admin/dashboard/especialidades');
    }

    public function getDelete($id)
    {
        DB::beginTransaction();
        
        $events = Specialties::find(base64_decode($id));
        $events->estatus = 'Desactivado';
        $events->update();

        DB::commit();
        
        return redirect()->intended('admin/dashboard/especialidades');
    }

    public function getActivar($id)
    {
        DB::beginTransaction();
        
        $events = Specialties::find(base64_decode($id));
        $events->estatus = 'Activo';
        $events->update();

        DB::commit();
        
        return redirect()->intended('admin/dashboard/especialidades');
    }

}
