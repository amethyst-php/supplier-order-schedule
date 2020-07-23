<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class SupplierOrderScheduleAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'supplier-order-schedule.create',
        Tokens::PERMISSION_UPDATE => 'supplier-order-schedule.update',
        Tokens::PERMISSION_SHOW   => 'supplier-order-schedule.show',
        Tokens::PERMISSION_REMOVE => 'supplier-order-schedule.remove',
    ];
}
