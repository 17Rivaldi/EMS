<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'tbl_events';
    protected $fillable = [
        'id',
        'event_name',
        'event_date',
        'start_time',
        'event_location',
        'description',
        'event_image',
        'ticket_price',
        'organizer_id',
    ];

    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }
}
