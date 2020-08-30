<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    public $table="papers";
    public $timestamps = false;

    //paper tags
    public function tags(){
        return $this->belongsToMany("App\Tag");
    }

    //create
    public function department(){
        return $this->belongsToMany("App\Department");
    }

    public function department_paper(){
        return $this->hasMany("App\Department_paper");
    }

    //attachment
    public function letter(){
        return $this->belongsToMany("App\Letter");
    }

    //privileges
    public function user(){
        return $this->belongsToMany("App\User");
    }
}
