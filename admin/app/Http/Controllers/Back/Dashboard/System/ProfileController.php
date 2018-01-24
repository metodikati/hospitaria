<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\System;

use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;
use MetodikaTI\Http\Requests\Back\Dashboard\System\Profile\ProfileRequest;
use MetodikaTI\Library\URI;
use MetodikaTI\Library\Pastora;
use MetodikaTI\UserProfile;
use MetodikaTI\User;
use MetodikaTI\SystemModule;
use Auth;

class ProfileController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getHome()
	{
		$data = UserProfile::where("id", "!=", 1)->get();
		$centinel = 1;

		return view('back.dashboard.system.profile.home', ['createButton' => Uri::printButton('create', '', 'Nuevo Perfil'),
												'permitions' => Uri::checkPermitions(),
												'data' => $data,
												'centinel' => $centinel] );
	}

	/**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {

        return view('back.dashboard.system.profile.create', ['modules' => Pastora::moduleTree()]);
    }


public function postStore(ProfileRequest $request)
	{

		$permissions = [
			'READ'   => 1,
			'CREATE' => 2,
			'UPDATE' => 4,
			'DELETE' => 8
		];

		$response = [
			'estatus' => true,
			'mensaje' => 'Se ha guardado con éxito el nuevo perfil.'
		];

		$json = [];

		foreach (array_keys($request->module) as $key => $value) {

			$json[$value] = 0;

			foreach ($request->module[$value] as $clave => $valor) {

				$json[$value] =  $json[$value] + $permissions[$valor];

			}

			//Se revisa si tiene papa el modulo
			$parent = SystemModule::where('id', '=', $value)->where('parent', '<>', 0);
			if ($parent->count() > 0) {
					
				$parent = $parent->first();
				if (!array_key_exists($parent->parent, $json)) {
					$json[$parent->parent] = 15;

				}

			}

		}
 

		$ok = new UserProfile;

		$ok->name = $request->nombre;
		$ok->permits = json_encode($json);

		$ok->save();

		return response()->json($response);
	}

}
