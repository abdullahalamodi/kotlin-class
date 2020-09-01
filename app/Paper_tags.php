<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper_tags extends Model
{
    public $table = "paper_tags";
    public $timestamp = false;

    public function paper(){
        return $this->belongsTo("App\Paper");
    }

    public function tag(){
        return $this->belongsTo("App\Tag");
    }
}
