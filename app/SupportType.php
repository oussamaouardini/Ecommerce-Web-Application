<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportType extends Model
{
    protected $fillable = [
        'type',
    ];
    public function contactsupport(){
        return $this->hasMany(ContactSupport::class );
    }
}
