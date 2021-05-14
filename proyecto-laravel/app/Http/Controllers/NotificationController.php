<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller{


public function __construct()
{
    $this->middleware('auth');
}

public function index()
{
    $user = \Auth::user();
    $nombre = $user->name.' '.$user->surname;
    //$user->notify(new WelcomeNotification());
    // send notification using the "Notification" facade
    Notification::send($user, new WelcomeNotification($nombre));
    return redirect()->route('config')->with(['message'=>'Bienvenido a OhPhoto!, si deseas puedes actualizar tus datos y foto!']);
}
}