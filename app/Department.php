<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $table="departments";
    public $timestamps = false;


    //to paper
    public function papers(){
        return $this->belongsToMany("App\Paper");
    }

    //create paper
    public function department_paper(){
        return $this->hasMany("App\Department_paper");
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
