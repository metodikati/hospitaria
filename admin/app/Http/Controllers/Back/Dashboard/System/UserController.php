<?php

namespace MetodikaTI\Http\Controllers\Back\Dashboard\System;

use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;
use MetodikaTI\Http\Requests\Back\Dashboard\System\User\CreateRequest;
use MetodikaTI\Http\Requests\Back\Dashboard\System\User\EditRequest;
use MetodikaTI\User;
use test\base;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getHome()
    {
        $users = User::get();

        return view('back.dashboard.system.user.home', ['users' => $users, 'centinel' => 1]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        return view('back.dashboard.system.user.create');
    }

    /**
     * @param CreateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postStore(CreateRequest $request)
    {
        $response = [];

        $user = new User();

        $user->name = $request->nombre;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user_profile_id = 1;
        $user->save();


    return redirect()->intended('admin/dashboard/system/user');
   
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function getEdit($id)
    {
        $user = User::find(base64_decode($id));

        if ($user != null) {
            return view('back.dashboard.system.user.edit', ['user' => $user]);
        } else {
            return redirect()->intended('admin/dashboard/system/user');
        }
    }

    /**
     * @param EditRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function postUpdate(EditRequest $request, $id)
    {
        $response = [];

        $user = User::find(base64_decode($id));

        $user->name = $request->nombre;
        $user->email = $request->email;

        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        if ($user->save()) {
            $response = [
                'status' => true,
                'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin').'/system/user'
            ];
        } else {
            $response = [
                'status' => false
            ];
        }

        
        return response()->json($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDelete($id)
    {
        $response = [];

        $user = User::find(base64_decode($id));

        if ($user != null) {
            if ($user->delete()) {
                $response = [
                    'status' => true,
                    'message' => 'El usuario ha sido eliminado correctamente.',
                    'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin').'/system/user'
                ];
            } else {
                $response = [
                    'message' => 'El usuario no se encuentra dado de alta en el sistema.',                
                    'status' => false
                ];
            }
        } else {
            $response = [
                'message' => 'El usuario no se encuentra dado de alta en el sistema.',
                'status' => false
            ];


            
        }
        return response()->json($response);
    }
}
