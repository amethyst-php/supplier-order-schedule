<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class SupplierOrderScheduleServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\SupplierServiceProvider::class);
   	}
}
