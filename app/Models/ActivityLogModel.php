<?php

namespace App\Models;

use App\Traits\ActivityLogObserverCaller;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Model;

class ActivityLogModel extends Model
{
    use UuidGenerator,ActivityLogObserverCaller;
    protected $fillable=['model_id','model_name','action','model_data'];
    
}