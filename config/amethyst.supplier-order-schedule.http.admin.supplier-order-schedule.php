<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\SupplierOrderSchedulesController::class,
    'router'     => [
        'as'     => 'supplier-order-schedule.',
        'prefix' => '/supplier-order-schedules',
    ],
];
