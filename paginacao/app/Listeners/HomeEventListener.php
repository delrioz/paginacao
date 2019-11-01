<?php

namespace App\Listeners;

use App\Events\HomeEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Events\Login;

class HomeEventListener
{
  
    public function __construct()
    {
        //
    }
    

    public function handle(HomeEvent $event)
    {
        info("Entrou no home");
        info($event->text); 

        $email = "giovani@gplpm.com.br";

        Mail::to($email)
            ->send(new NovoContato($event->text));

    }
}
