<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class ActivityLogModel extends Model
{
    use HasUuids;
    protected $fillable=['model_data','action','model_id','model_name'];
}