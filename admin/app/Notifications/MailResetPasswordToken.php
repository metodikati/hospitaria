<?php

namespace MetodikaTI\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use MetodikaTI\PasswordResets;

class MailResetPasswordToken extends Notification
{
use Queueable;
 
    public $token;
 
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }
 
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }
 
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        $newtoken = PasswordResets::where('email', $notifiable->email)->first();

        $this->token = base64_encode($newtoken->token);

        return (new MailMessage)
                    ->subject("Recuperación de contraseña")
                    ->line("¿Olvidaste tu contraseña? Haz clic en el botón para crear una nueva.")
                    ->action('Crear Contraseña', url('admin/account/password/reset', $this->token))
                    ->line('Gracias');
    }
}
