<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Zizaco\Entrust\HasRole;


class User extends Eloquent implements ConfideUserInterface
{
    use ConfideUser;
    use HasRole; // Add this trait to your user model


    protected $fillable = ['username', 'email','password'];

    public function roles()
    {
        return $this->belongsToMany('Role', 'assigned_roles');
    }
    public function profile()
    {
        return $this->hasOne('Profile');
    }
}

