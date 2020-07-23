<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\SupplierOrderScheduleFaker;
use Amethyst\Managers\SupplierOrderScheduleManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class SupplierOrderScheduleTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = SupplierOrderScheduleManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = SupplierOrderScheduleFaker::class;
}
