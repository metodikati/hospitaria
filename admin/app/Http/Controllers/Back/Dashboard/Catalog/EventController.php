<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\Catalog;

use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;

use MetodikaTI\Http\Requests\Back\Dashboard\Catalog\Event\EeventRequest;

use MetodikaTI\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * [getHome description]
     * @return [type] [description]
     */
    public function getHome()
    {
      $events = Event::orderBy('start_date')->get();

      return view('back.dashboard.catalog.event.home', ['events' => $events, 'centinel' => 1]);
    }

    /**
     * [getCreate description]
     * @return [type] [description]
     */
    public function getCreate()
    {
      return view('back.dashboard.catalog.event.create');
    }

    /**
     * [postCreate description]
     * @param  EventRequest $request [description]
     * @return [type]                [description]
     */
    public function postStore(EeventRequest $request)
    {
      $response;

      $imageSave = false;

      $event = new Event();

      $event->title = $request->titulo;
      $event->description = $request->descripcion;
      $event->start_date = $request->fechaInicio;
      $event->end_date = $request->fechaTermino;

      if ($request->has('altDeImagen')) {
        $event->image_alt = $request->altDeImagen;
      }

      //Save image
    	if ($request->hasFile('imagen')) {
    		$imageName = Carbon::now()->timestamp.'.'.$request->file('imagen')->getClientOriginalExtension();

    		if (Storage::disk('public')->putFileAs('uploads/event', $request->file('imagen'), $imageName)) {
            $event->image = $imageName;
            $imageSave = true;
        }
    	}

      if ($event->save() && $imageSave == true) {
        $response = [
          'status' => true,
          'message' => 'Se ha guardado con éxito el evento '.$request->titulo,
          'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin').'/catalog/event'
        ];
      } else {
        $response = [
          'status' => false,
          'message' => 'No se ha podido guardar el evento.'
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
      $event = Event::find(base64_decode($id));

      if ($event == null) {
        return redirect()->intended(\URL::to('/').'/'.\Config::get('app.base_url_admin').'/catalog/event');
      } else {
        return view('back.dashboard.catalog.event.edit', ['event' => $event]);
      }
    }

    /**
     * [postUpdate description]
     * @param  EeventRequest $request [description]
     * @param  [type]        $id      [description]
     * @return [type]                 [description]
     */
    public function postUpdate(EeventRequest $request, $id)
    {
      $response;

      $event = Event::find(base64_decode($id));

      if ($event == null) {
        $response = [
          'status' => false,
          'message' => 'El evento ingresado no esta en la base de datos.'
        ];
      } else {
        $event->title = $request->titulo;
        $event->description = $request->descripcion;
        $event->start_date = $request->fechaInicio;
        $event->end_date = $request->fechaTermino;

        if ($request->has('altDeImagen')) {
          $event->image_alt = $request->altDeImagen;
        }

        //Save image
      	if ($request->hasFile('imagen')) {
      		$imageName = Carbon::now()->timestamp.'.'.$request->file('imagen')->getClientOriginalExtension();

      		if (Storage::disk('public')->putFileAs('uploads/event', $request->file('imagen'), $imageName)) {
              $event->image = $imageName;
          }
      	}

        if ($event->save()) {
          $response = [
            'status' => true,
            'message' => 'Se ha actualizado con éxito el evento.',
            'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin').'/catalog/event'
          ];
        } else {
          $response = [
            'status' => false,
            'message' => 'No se ha podido actualizar el evento.'
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

      $event = Event::find(base64_decode($id));

      if ($event == null) {
        $response = [
          'status' => false,
          'message' => 'El evento ingresado no existe'
        ];
      } else {
        if ($event->delete()) {
          $response = [
            'status' => true,
            'message' => 'Se ha eliminado con éxito el evento',
            'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin').'/catalog/event'
          ];
        } else {
          $response = [
            'status' => false,
            'message' => 'No se ha podido eliminar el evento.'
          ];
        }
      }

      return response()->json($response);
    }
}
