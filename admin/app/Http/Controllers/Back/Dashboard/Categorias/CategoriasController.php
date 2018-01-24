<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Categorias;

use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;

use MetodikaTI\Http\Requests\Back\Dashboard\Catalog\Categorias\EeventRequest;
use MetodikaTI\Cotizadorsdatos;
use MetodikaTI\Cotizador;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use DB;

class CategoriasController extends Controller
{
    public function getHome()
    {
      $categorias = Cotizador::orderBy('id')->get();

      return view('back.dashboard.categorias.home', ['categorias' => $categorias, 'centinel' => 1]);
    }
    public function getCreate()
    {
		return view('back.dashboard.categorias.create');
    }
    public function postStore(Request $request)
    {
      $response;

      //$request['estudio'];
      $categorias = new Cotizador();
      $categorias->estudio = $request->estudio;
      $categorias->estatus = 1;
      $categorias->save();


 	DB::commit();
    return redirect()->intended('admin/dashboard/categorias');
    }

    public function getEdit($id)
    {
        $categorias = Cotizador::find(base64_decode($id));
        if ($categorias != null) {
            return view('back.dashboard.categorias.edit', [ 'categorias' => $categorias]);
        } else {
            return redirect()->intended('back.dashboard.categorias.edit');
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
      $categorias = Cotizador::find(base64_decode($id));
      	$categorias->estudio = $request->estudio;
      	$categorias->update();
      return redirect()->intended('admin/dashboard/categorias');
    }
    /**
     * [getEdit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getDelete($id)
    {
        DB::beginTransaction();
        
        $categorias = Cotizador::find(base64_decode($id));
        $categorias->estatus = desactivado;
        $categorias->update();

        DB::commit();
        
        return redirect()->intended('admin/dashboard/categorias');
    }
    public function getActivar($id)
    {
        DB::beginTransaction();
        
        $categorias = Cotizador::find(base64_decode($id));
        $categorias->estatus = 1;
        $categorias->update();

        DB::commit();
        
        return redirect()->intended('admin/dashboard/categorias');
    }
}
