<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedCity extends Model{
    //
    protected $table = 'saved_cities';

    public function users(){
        return $this->belongsTo('App\User', 'user_id','id');
    }
}
