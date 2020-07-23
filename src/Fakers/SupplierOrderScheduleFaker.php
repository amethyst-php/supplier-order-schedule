<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;


class SupplierOrderScheduleFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('request_cron', '0 12 * * 1');
        $bag->set('delivery_cron', '0 12 * * 1');
        $bag->set('shipment_day', '1,2');
        $bag->set('supplier', SupplierFaker::make()->parameters()->toArray());

        return $bag;
    }
}
