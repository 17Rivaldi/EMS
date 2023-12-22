<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'tbl_transactions';
    protected $fillable = [
        'event_id', 'name', 'email', 'alamat', 'phone', 'quantity', 'total_payment',
    ];

    // Jika diperlukan, definisikan relasi dengan model Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
