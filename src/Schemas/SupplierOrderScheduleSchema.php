<?php

namespace Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;
use Amethyst\Managers\SupplierManager;
use Railken\Lem\Contracts\EntityContract;

class SupplierOrderScheduleSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\LongTextAttribute::make('description'),
            Attributes\TextAttribute::make('request_cron')
                ->setValidator(function (EntityContract $entity, $value) {
                    return \Cron\CronExpression::isValidExpression($value);
                })
                ->setRequired(true),
            Attributes\TextAttribute::make('delivery_cron')
                ->setValidator(function (EntityContract $entity, $value) {
                    return \Cron\CronExpression::isValidExpression($value);
                })
                ->setRequired(true),
            Attributes\TextAttribute::make('shipment_day')
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('supplier_id')
                ->setRelationName('supplier')
                ->setRelationManager(SupplierManager::class),

            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
