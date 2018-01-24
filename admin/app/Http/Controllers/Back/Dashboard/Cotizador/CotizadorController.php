<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Cotizador;

use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;

use MetodikaTI\Http\Requests\Back\Dashboard\Catalog\Cotizador\EeventRequest;
use MetodikaTI\Cotizadorsdatos;
use MetodikaTI\Cotizador;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use DB;

class CotizadorController extends Controller 
{
    /**
     * [getHome description]
     * @return [type] [description]
     */
    public function getHome()
    {
      $cotizador = Cotizadorsdatos::orderBy('id')->get();

      return view('back.dashboard.cotizador.home', ['cotizador' => $cotizador, 'centinel' => 1]);
    }


     public function getCreate()
    {
       $categorias = Cotizador::orderBy('estudio')->get()->pluck('estudio', 'id');
        return view('back.dashboard.cotizador.create', ['categorias' => $categorias]);
    }

    public function postStore(Request $request)
    {
      $response;
   

      $cotizador = new Cotizadorsdatos();
      $cotizador->precio = $request->precio;
      $cotizador->incluye = $request->incluye;
      $cotizador->no_incluye = $request->no_incluye;
      $cotizador->descripcion = $request->descripcion;
      $cotizador->cotizador_id = $request->especialidades_id;
      $cotizador->save();


 	DB::commit();
    return redirect()->intended('admin/dashboard/cotizador');
    }
  /**
     * [getEdit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */


    public function getEdit($id)
    {
        $categorias = Cotizador::get();
        $cotizador = Cotizadorsdatos::find(base64_decode($id));
        if ($cotizador != null) {
            return view('back.dashboard.cotizador.edit', ['cotizador' => $cotizador, 'categorias' => $categorias]);
        } else {
            return redirect()->intended('back.dashboard.cotizador.edit');
        }
    }

    public function postUpdate(Request $request, $id)
    {
      $response;
        $cotizador = Cotizadorsdatos::find(base64_decode($id));
        $cotizador->cotizador_id = $request->especialidades_id;
        $cotizador->estudio_sub = $request->estudio;
        $cotizador->precio = $request->precio;
        $cotizador->incluye = $request->incluye;
        $cotizador->no_incluye = $request->no_incluye;
        $cotizador->descripcion = $request->descripcion;
        $cotizador->update();

      return redirect()->intended('admin/dashboard/cotizador');
    }

    public function getDelete($id)
    {
        DB::beginTransaction();
        
        $cotizador = Cotizadorsdatos::find(base64_decode($id));
        $cotizador->estatus = desactivado;
        $cotizador->update();

        DB::commit();
        
        return redirect()->intended('admin/dashboard/cotizador');
    }

    public function getActivar($id)
    {
        DB::beginTransaction();
        
        $cotizador = Cotizadorsdatos::find(base64_decode($id));
        $cotizador->estatus = 1;
        $cotizador->update();

        DB::commit();
        
        return redirect()->intended('admin/dashboard/cotizador');
    }


}
