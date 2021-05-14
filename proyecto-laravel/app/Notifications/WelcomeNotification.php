<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;

class WelcomeNotification extends Notification
{
    use Queueable;
    public $fromUser;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->nombre = $user;
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
        return (new MailMessage)
            ->subject('Bienvenido a '. config('app.name'))
            ->greeting('Hola, '.$this->nombre.'!')
            ->line('Estás recibiendo este correo porque te has registrado en '. config('app.name').' y te damos la bienvenida!')
            ->action('Ir a mi cuenta', url('/'))
            ->line('Si no realizaste el registro, no se requiere realizar ninguna otra acción.')
            ->salutation('Saludos, el equipo de '. config('app.name'));                 
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
