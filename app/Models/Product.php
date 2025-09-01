<?php

namespace App\Models;

use App\Traits\ActivityLogObserverCaller;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use UuidGenerator,ActivityLogObserverCaller;
    protected $fillable=['name','price'];
}