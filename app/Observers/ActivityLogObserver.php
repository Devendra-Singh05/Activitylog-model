<?php

namespace App\Observers;

use App\Models\ActivityLogModel;
use Illuminate\Database\Eloquent\Model;

class ActivityLogObserver
{
     public function created( Model $model): void
    {
    
self::ObserverAction('created',$model);
   }


    public function updated($model): void
    {
self::ObserverAction('update',$model);
        
    }


    public function deleted($model): void
    {
self::ObserverAction('delete',$model);
        
    }

    protected static function ObserverAction(string $event,Model $model){
        ActivityLogModel::create([
            'model_name' => get_class($model),
    'model_id' => $model->getKey(),
    'action' => $event,
    'model_data' => json_encode($model->toArray()),
        ]);
    }
}