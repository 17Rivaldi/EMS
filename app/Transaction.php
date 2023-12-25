<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Transaction extends Model
{
    protected $table = 'tbl_transactions';
    protected $fillable = [
        'event_id', 'user_id', 'name', 'email', 'alamat', 'phone', 'quantity', 'total_payment', 'uuid'
    ];

    // Jika diperlukan, definisikan relasi dengan model Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function users() 
    {
        return $this->belongsTo(User::class);
    }

    //generate uuid untuk qr
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
