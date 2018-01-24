<?php

namespace MetodikaTI\Http\Controllers\Back;

use Illuminate\Http\Request;
use MetodikaTI\Http\Controllers\Controller;

use MetodikaTI\Http\Requests\Back\Account\LoginRequest;
use MetodikaTI\Http\Requests\Back\Account\ResetPasswordRequest;
use Illuminate\Foundation\Auth\ResetsPasswords;


use Auth;
use Session;
use MetodikaTI\User;
use MetodikaTI\PasswordResets;
use Mail;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;


class AccountController extends Controller
{
  use ResetsPasswords;
  protected $tokens;

  public function __construct(Guard $auth, PasswordBroker $passwords)
    {
        $this->auth = $auth;
        $this->passwords = $passwords;
        $this->subject = 'Recuperación de contraseña';
        //$this->middleware('guest');
    }

    /**
     * [getHome description]
     * @return [type] [description]
     */
    public function getHome()
    {
      return view('back.account.home');
    }

    /**
     * [postLogin description]
     * @param  LoginRequest $request [description]
     * @return [type]                [description]
     */
    public function postLogin(LoginRequest $request)
    {
      $credentials = [
        'email' => $request->email,
        'password' => $request->password
      ];
      if (Auth::attempt($credentials)) {
        return redirect()->intended('admin/dashboard');
      } else {
        Session::flash('loginError', true);
        Session::flash('loginMsg', 'El nombre de usuario o la contraseña no son validos.');
        return redirect()->intended('admin');
      }
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect()->intended('admin');
    }    

    public function getRecovery()
    {
      return view('back.account.recovery');
    }


    public function postRecovery(Request $request)
    {

      $request;

      $this->validate($request, ['email' => 'required']);
      

      $response = $this->passwords->sendResetLink($request->only('email'), function($message)
      {
        $message->subject('Recordatorio de contraseña');
      });

    switch ($response)
    {
        case PasswordBroker::RESET_LINK_SENT:
            //return redirect()->back()->with('status', trans($response));
           $request = [
            'status' => true,
            'message' => 'Se ha enviado un correo electrónico con una liga para que reestablezca su contraseña.',
            'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin')
          ];  
          return response()->json($request);

        break;

        case PasswordBroker::INVALID_USER:
            //return redirect()->back()->withErrors(['email' => trans($response)]);
           $request = [
            'status' => false,
            'message' => 'El correo electrónico no se encuentra registrado en el sistema.',
          ];
          return response()->json($request);
    }
  }
    

  public function getReset(Request $request, $token = null)
  {

    $user = PasswordResets::where('token', base64_decode($token))->first();

    if (!is_null($user)) {

      if ($user->count() > 0) {
        return view('back.account.reset')->with(['token' => $token]);
      } else {
        Session::flash('loginError', false);
        Session::flash('loginMsg', 'La solicitud de renovación de contraseña ya no es valida.');
        return redirect()->intended('admin');
      }
    } else {
        Session::flash('loginError', true);
        Session::flash('loginMsg', 'La solicitud de renovación de contraseña ya no es valida.');
        return redirect()->intended('admin');
    }
  }

  public function postReset(ResetPasswordRequest $request)
  {

    $require = [
      'status' => true,
      'message' => 'El usuario no existe en el sistema.',
      'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin')
      ];

    $user = PasswordResets::where('token', base64_decode($request->token))->first();


    if ($user != null) {

      if ($user->count() > 0) {
        $user = User::where('email', $user->email)->first();

        if ($user != null) {
          if ($user->count() > '') {
            $user->password = bcrypt($request->password);
            $user->save();
          }
        }

        $delete = PasswordResets::where('email', $user->email)->delete();

        $require = [
          'status' => true,
          'message' => 'La contraseña ha sido actualizada, vuelva a ingresar.',
          'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin')
          ];
               
        } else {
        $require = [
          'status' => false,
          'message' => 'La contraseña no pudo ser actualizada, la solicitud de recuperación ya no es válida.',
          'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin')
          ];
      }
    } else {
        $require = [
          'status' => false,
          'message' => 'La contraseña no pudo ser actualizada, la solicitud de recuperación ya no es válida.',
          'url' => \URL::to('/').'/'.\Config::get('app.base_url_admin')
          ];
    }


    return response()->json($require); 


  }
}
