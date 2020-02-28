<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSupport extends Model
{
    protected $fillable = [
      'title','message','support_type_id','user_id','order_id','status'
    ];

    public function supporttype(){
        return $this->hasOne(SupportType::class,'id','support_type_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }


}
