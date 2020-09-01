<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper_user extends Model
{
    public $table = "paper_user";
    public $timestamp = false;

    public function paper(){
        return $this->belongsTo("App\Paper");
    }

    public function user(){
        return $this->belongsTo("App\User");
    }
}
