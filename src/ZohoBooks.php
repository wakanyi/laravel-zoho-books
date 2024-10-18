<?php

namespace Sumer5020\ZohoBooks;

class ZohoBooks
{
    protected $app;

    /**
     * Application instance for lazy loading services
     *
     * @param $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }
}
