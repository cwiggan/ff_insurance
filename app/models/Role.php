<?php

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    /**
     * @return Illuminate\Database\Eloquent\Model
     */
    public function permissions()
    {
        return $this->belongsToMany('Permission', 'permission_role');
    }
}