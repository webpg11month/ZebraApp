<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'page_tb';

    protected $fillable = [
        'page_id',
        'text',
        'images',
        'flg',
        'etc'
    ];
}
