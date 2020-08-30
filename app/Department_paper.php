<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department_paper extends Model
{
   public $table ="department_paper";
   public $timestamps = false;


   public function department(){
       return $this->belongsTo("App\Department");
   }

   public function paper(){
    return $this->belongsTo("App\Paper");
}

}
