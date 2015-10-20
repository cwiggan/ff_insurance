<?php

use KraftHaus\Bauhaus\Admin;

class CategoryAdmin extends Admin
{

    public function configureList($mapper)
    {
        $mapper->identifier('name');
    }

    public function configureForm($mapper)
    {
        $mapper->text('name');
    }

    public function configureFilters($mapper)
    {
        // ...
    }

}