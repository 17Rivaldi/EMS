<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'tbl_contacts';
    protected $fillable = [
        'sender_name',
        'sender_email',
        'message_text',
        'message_date'
    ];
}
