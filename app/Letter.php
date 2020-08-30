<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    public $table="letters";

    //attachment
    public function paper(){
        return $this->belongsToMany("App\Paper");
    }

    //directing
    public function department(){
        return $this->belongsToMany("App\Department");
    }
}
