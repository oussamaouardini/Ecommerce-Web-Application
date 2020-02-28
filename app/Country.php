<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $primaryKey = 'id';


    public function cities(){
        return $this->hasMany(City::class,'country_id','id');
    }

    public function states(){
        return $this->hasMany(State::class,'country_id','id');

    }

}
