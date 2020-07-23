<?php

return [
    'table'      => 'amethyst_supplier_order_schedules',
    'comment'    => 'SupplierOrderSchedule',
    'model'      => Amethyst\Models\SupplierOrderSchedule::class,
    'schema'     => Amethyst\Schemas\SupplierOrderScheduleSchema::class,
    'repository' => Amethyst\Repositories\SupplierOrderScheduleRepository::class,
    'serializer' => Amethyst\Serializers\SupplierOrderScheduleSerializer::class,
    'validator'  => Amethyst\Validators\SupplierOrderScheduleValidator::class,
    'authorizer' => Amethyst\Authorizers\SupplierOrderScheduleAuthorizer::class,
    'faker'      => Amethyst\Fakers\SupplierOrderScheduleFaker::class,
    'manager'    => Amethyst\Managers\SupplierOrderScheduleManager::class,
];
