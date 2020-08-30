<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $table="departments";
    public $timestamps = false;


    //create
    public function paper(){
        return $this->belongsToMany("App\Paper");
    }

  
    //is inner
    public function innerDepartment(){
        return $this->hasOne("App\Innerdepartment");
    }

    //is outter
    public function outterDepartment(){
        return $this->hasOne("App\Outterdepartment");
    }

    //  from dep to user  // I think not to user :) 
    // public function departmentUser(){
    //     return $this->hasOneThrough(
    //         "App\User",
    //         "App\Innerdepartment",
    //         "department_id",
    //         "innerDepartment_id",
    //         "id",
    //         "id"
    //     );
    // }
}
