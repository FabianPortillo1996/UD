<?php


namespace App\Observer;


use App\DataCenter\UserMovement;
use App\Events\UserMoventEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UserMovementObserver
{

    public function created(UserMovement $userMovement)
    {
        $to_name = 'PRUEBA_SISTEMAS_DISTRIBUIDOS';
        $to_email = 'fabianportillo97@gmail.com';
        $data = array('name' => "Fabian Portillo Moreno", "body" => "Verificación de cambio");

        Mail::send('emails.mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Artisans Web Testing Mail');
            $message->from('fabianportillo97@gmail.com', 'PRUEBA_SISTEMAS_DISTRIBUIDOS');
        });


        broadcast(new UserMoventEvent($userMovement->user_id, $userMovement->id));
    }

}