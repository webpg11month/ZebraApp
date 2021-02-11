<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_tb';

    protected $fillable = [
        'user_name',
        'email',
        'contact_text'
    ];
}
