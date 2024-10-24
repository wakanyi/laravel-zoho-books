<?php

namespace Sumer5020\ZohoBooks\Facades;

use Illuminate\Support\Facades\Facade;

class ZohoBooksFacade extends Facade
{
    protected static function getFacadeAccessor() : string
  {
    return 'zohoBooks';
  }
}
