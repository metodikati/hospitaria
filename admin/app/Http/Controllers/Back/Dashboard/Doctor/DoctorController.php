<?php
namespace MetodikaTI\Http\Controllers\Back\Dashboard\Doctor;
use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;
use MetodikaTI\Http\Requests\Back\Dashboard\Catalog\Doctor\EeventRequest;
use MetodikaTI\Specialties;
use MetodikaTI\Doctor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use DB;

class DoctorController extends Controller
{

    public function getHome()
    {
      $doctors = Doctor::orderBy('id')->get();

      return view('back.dashboard.doctor.home', ['doctors' => $doctors, 'centinel' => 1]);
    }
    /**
     * [getCreate description]
     * @return [type] [description]
     */

    public function getCreate()
    {

        $specialties = Specialties::orderBy('name')->get()->pluck('name', 'id');

        return view('back.dashboard.doctor.create', ['specialties' => $specialties]);
    }


        /**
     * [postCreate description]
     * @param  EventRequest $request [description]
     * @return [type]                [description]
     */
    public function postStore(Request $request)
    {
      $response;
      $doctors = new Doctor();

      $doctors->name = $request->nombre;
      $doctors->email = $request->email;
      $doctors->consulting_room = $request->consulting_room;
      $doctors->phone = $request->phone;
      $doctors->especialidades_id =  $request->especialidades_id;
      $doctors->save();

  DB::commit();
    return redirect()->intended('admin/dashboard/doctores');
    }


    /**
     * [getEdit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */


    public function getEdit($id)
    {
        $specialties = Specialties::get();
        $doctors = Doctor::find(base64_decode($id));
        if ($doctors != null) {
            return view('back.dashboard.doctor.edit', ['doctors' => $doctors, 'specialties' => $specialties]);
        } else {
            return redirect()->intended('back.dashboard.doctor.edit');
        }
    }
        /**
     * [postUpdate description]
     * @param  EeventRequest $request [description]
     * @param  [type]        $id      [description]
     * @return [type]                 [description]
     */
    public function postUpdate(Request $request, $id)
    {
      $response;
      $doctors = Doctor::find(base64_decode($id));
        $doctors->name = $request->name;
        $doctors->email = $request->email;
        $doctors->consulting_room = $request->consulting_room;
        $doctors->phone = $request->phone;
        $doctors->urgencias = $request->urgencias;
        $doctors->especialidades_id =  $request->especialidades_id;
        $doctors->update();
      return redirect()->intended('admin/dashboard/doctores');
    }


   public function getDelete($id)
    {
        DB::beginTransaction();
        
        $doctors = Doctor::find(base64_decode($id));
        
        $doctors->delete();

        DB::commit();
        
        return redirect()->intended('admin/dashboard/doctores');
    }

}
