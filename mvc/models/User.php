<?php

class User extends \Illuminate\Database\Eloquent\Model
{

    public $timestamps = false;

    public static function findUser($username,$password)
    {
        return User::where('name', '=', $username)->Where('password', '=', $password)->get();
    }
}