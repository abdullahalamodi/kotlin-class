<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    public $table="letters";
    public $timestamp = false;

    //direct letter
    public function letter_department(){
        return $this->hasMany("App\Letter_department");
    }

    //attachmnet
    public function paper_letter(){
        return $this->hasMany("App\Paper_letter");
    }



    //for many to many --atachments
    public function papers(){
        return $this->belongsToMany("App\Paper");
    }

    //for one to one --inhertance
    public function paper(){
        return $this->belongsTo("App\Paper");
    }

  
    public function department(){
        return $this->belongsToMany("App\Department");
    }
}
