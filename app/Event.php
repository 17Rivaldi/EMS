<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'id',
        'event_name',
        'event_date',
        'start_time',
        'event_location',
        'description',
        'event_image',
    ];
}
