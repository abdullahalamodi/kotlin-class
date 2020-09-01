<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Innerdepartment extends Model
{

    public $table="innerdepartments";

      //belong to dep
      public function department(){
        return $this->belongsTo("App\Department");
    }

      //has user
      public function user(){
        return $this->hasOne("App\User");
    }

}
