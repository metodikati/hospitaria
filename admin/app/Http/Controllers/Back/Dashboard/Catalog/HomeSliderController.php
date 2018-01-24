<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Catalog;

use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;

use MetodikaTI\Http\Requests\Back\Dashboard\Catalog\HomeSlider\CreateRequest;
use MetodikaTI\Http\Requests\Back\Dashboard\Catalog\HomeSlider\EditRequest;

use MetodikaTI\Slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class HomeSliderController extends Controller
{
    /**
     * [getHome description]
     * @return [type] [description]
     */
    public function getHome()
    {
      $sliders = Slider::orderBy('order', 'ASC')->get();

      return view('back.dashboard.catalog.home-slider.home', ['sliders' => $sliders, 'centinel' => 1]);
    }

    /**
     * [getCreate description]
     * @return [type] [description]
     */
    public function getCreate()
    {
      $lastSlide = Slider::orderBy('order', 'DESC')->first();

      $initialNumber = ($lastSlide == null) ? 1: $lastSlide->order + 1;

      return view('back.dashboard.catalog.home-slider.create', ['initialNumber' => $initialNumber]);
    }

    /**
     * [postCreate description]
     * @param  CreateRequest $request [description]
     * @return [type]                 [description]
     */
    public function postStore(CreateRequest $request)
    {
      $response = [];

      $slider = new Slider();

      $imageSave = false;

      $slider->order = $request->orden;
      $slider->alt = $request->etiquetaAlt;

      //Save image
    	if ($request->hasFile('slider')) {
    		$imageName = Carbon::now()->timestamp.'.'.$request->file('slider')->getClientOriginalExtension();

    		if (Storage::disk('public')->putFileAs('uploads/home-slider', $request->file('slider'), $imageName)) {
            $slider->url = $imageName;
            $imageSave = true;
        }
    	}

      if ($slider->save() && $imageSave) {
        $response = [
          'status' => true,
          'message' => 'Se ha guardado con éxito el nuevo slider',
          'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin').'/catalog/home-slider'
        ];
      } else {
        $response = [
          'status' => false,
          'message' => 'No se ha podido guardar el slider'
        ];
      }

      return response()->json($response);
    }

    /**
     * [getEdit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getEdit($id)
    {
      $slider = Slider::find(base64_decode($id));

      if ($slider == null) {
        return redirect()->intended(\URL::to('/').'/'.\Config::get('app.base_url_admin').'/catalog/home-slider');
      } else {
        return view('back.dashboard.catalog.home-slider.edit', ['slider' => $slider]);
      }
    }

    public function postUpdate(EditRequest $request, $id)
    {
      $response = [];

    	$slider = Slider::find(base64_decode($id));

    	if ($slider == null) {
    		$response = [
    			'status' => false,
    			'message' => 'El slider ingresado no existe en el sistema'
    		];
    	} else {
    		$slider->order = $request->orden;
        $slider->alt = $request->etiquetaAlt;

    		$deleteFile = "";

	    	//Save image
	    	if ($request->hasFile('slider')) {
	    		$imageName = Carbon::now()->timestamp.'.'.$request->file('slider')->getClientOriginalExtension();

	    		if (Storage::disk('public')->putFileAs('uploads/home-slider', $request->file('slider'), $imageName)) {
	    			$deleteFile = $slider->url;
            $slider->url = $imageName;
	        }
	    	}

	    	if ($slider->save()) {
	    		if ($deleteFile != "") {
	    			Storage::delete('storage/uploads/home-slider/'.$deleteFile);

	    			$haber = "Entra";
	    		}

	    		$response = [
	    			'status' => true,
	    			'message' => 'Se ha actualizado con éxito el nuevo slider '.$deleteFile,
	    			'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin').'/catalog/home-slider'
	    		];
	    	} else {
	    		$response = [
	    			'status' => false,
	    			'message' => 'No se ha podido actualizar el slider'
	    		];
	    	}
    	}

    	return response()->json($response);
    }

    /**
     * [getDelete description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getDelete($id)
    {
      $response;

      $slider = Slider::find(base64_decode($id));

      if ($slider == null) {
        $response = [
          'status' => false,
          'message' => 'El slider a borrar no existe en el sistema'
        ];
      } else {
        if ($slider->delete()) {
          $response = [
            'status' => true,
            'message' => 'Se ha eliminado con éxito el slider.',
            'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin').'/catalog/home-slider'
          ];
        } else {
          $response = [
            'status' => false,
            'message' => 'No se ha podido eliminar el slider.'
          ];
        }
      }

      return response()->json($response);
    }
}
