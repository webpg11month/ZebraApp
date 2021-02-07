<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class IncrementText extends Model
{
    public function incrementText($i)
    {
        for($i =0; $i<30;$i++){
           $string = 'dumy'.$i;
           $$string = sprintf('%01d',$i);

        }
        return $$string;
    }
}
