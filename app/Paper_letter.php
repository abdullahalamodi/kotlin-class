<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper_letter extends Model
{
    public $table = "paper_letter";
    public $timestamp = false;

    public function paper(){
        return $this->belongsTo("App\Paper");
    }

    public function letter(){
        return $this->belongsTo("App\Letter");
    }
}
