<?php

namespace App\Models;
use App\Traits\ActivityLogObserverCaller;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use ActivityLogObserverCaller,HasUuids;
    protected $fillable=['name','price'];
}