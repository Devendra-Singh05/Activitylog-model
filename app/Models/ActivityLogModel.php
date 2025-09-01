<?php

namespace App\Models;


use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Model;

class ActivityLogModel extends Model
{
    use UuidGenerator;
    protected $fillable=['model_data','action','model_id','model_name'];
}