<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
protected $table ='users';
protected $guarded =[];
public $timestamps = false;


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = password_hash($value, PASSWORD_DEFAULT);
    }




}