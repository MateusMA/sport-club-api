<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description', 'day', 'start', 'end', 'recurrence'];

    protected $dates = ['deleted_at'];
    
}
