<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    protected $fillable = ['name', 'level', 'xp', 'email', 'email_verified_at', 'password'];
    public function users(){
        return $this->hasMany('App\Food');

    }
}
