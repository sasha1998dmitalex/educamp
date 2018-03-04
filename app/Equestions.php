<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Equestions extends Model
{
    //

    protected $fillable = [
        'title', 'right_answer' ,
    ];

    public function users() {

        return $this->belongsToMany('App\User', 'equestion_user', 'equestion_id', 'user_id');

    }

}
