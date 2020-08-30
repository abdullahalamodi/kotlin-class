<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outterdepartment extends Model
{
    public $table="outterdepartments";

      //belong to dep
      public function department(){
        return $this->belongsTo("App\Department");
    }
}
