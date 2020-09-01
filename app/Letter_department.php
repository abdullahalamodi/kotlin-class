<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter_department extends Model
{
    public $table = "letter_department";
    public $timestamp = false;

    public function department(){
        return $this->belongsTo("App\Department");
    }

    public function letter(){
        return $this->belongsTo("App\Letter");
    }


}
