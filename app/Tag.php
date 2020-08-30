<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $table="tags";

    public function paper(){
        return $this->belongsToMany("App\Paper");
    }
}
