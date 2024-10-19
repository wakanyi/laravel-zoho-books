<?php

namespace Sumer5020\ZohoBooks;

use Sumer5020\ZohoBooks\Contracts\AuthenticationInterface;

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

    /**
     * @return AuthenticationInterface
     */
    public function authentications(): AuthenticationInterface
    {
        return $this->app->make(AuthenticationInterface::class);
    }
}
