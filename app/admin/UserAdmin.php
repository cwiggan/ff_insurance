<?php

use KraftHaus\Bauhaus\Admin;

class UserAdmin extends Admin
{

    public function configureList($mapper)
    {
        $mapper->identifier('email');
        $mapper->string('username');
    }

    public function configureForm($mapper)
    {
        $mapper->text('username');
        $mapper->text('email');
        $mapper->password('password');
        $mapper->password('password_confirmation')->label('Confirm Password');;
       // $mapper->belongsToMany('roles')->display('name');
    }

    public function configureFilters($mapper)
    {
        // ...
    }

}