<?php
namespace App\Traits;

use App\Observers\ActivityLogObserver;

trait ActivityLogObserverCaller
{
    protected static function bootActivityLogObserverCaller(){
        static::observe(ActivityLogObserver::class);
    }
}
?>