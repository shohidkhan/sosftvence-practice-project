<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Singage extends Model
{
    //

    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
    function signageType(){
        return $this->belongsTo(SingageType::class);
    }

    
}
