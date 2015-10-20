<?php

namespace Kalnoy\Cruddy\Service\Permissions;

use Kalnoy\Cruddy\Contracts\Permissions;
use Kalnoy\Cruddy\Entity;
use Zizaco\Entrust\HasRole;

/**
 * Stub permissions.
 *
 * This type of permissions will just allow all operations.
 *
 * @since 1.0.0
 */
class Itrust implements Permissions {

    /**
     * {@inheritdoc}
     */
    public function isPermitted($action, Entity $entity)
    {
        $role = Auth::user()->hasRole('user');
        dd($role);
        return true;
    }

}