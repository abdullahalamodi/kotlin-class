<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $table="tags";

    public function papers(){
        return $this->belongsToMany("App\Paper");
    }
}
