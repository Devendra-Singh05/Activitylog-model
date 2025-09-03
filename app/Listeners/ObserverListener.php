<?php

namespace App\Listeners;

use App\Events\ObserverEvent;
use App\Models\ActivityLogModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ObserverListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ObserverEvent $event): void
    {
         ActivityLogModel::create([
            'model_name' => get_class($event->modeldata),
    'model_id' => $event->modeldata->getKey(),
    'action' => $event->action,
    'model_data' => json_encode($event->modeldata->toArray()),
        ]); 
    }
}