<?php

namespace MetodikaTI;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use MetodikaTI\Notifications\MailResetPasswordToken;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordToken($token));
    }

    /**
     * Metodo que devuelve el perfil de usuario del usuario
     * seleccionado
     *
     * @return Array
     */
    public function userProfile()
    {
        return $this->belongsTo('MetodikaTI\UserProfile', 'user_profile_id');
    }
}
