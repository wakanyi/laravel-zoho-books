<?php

namespace Sumer5020\ZohoBooks\Facades;

use Illuminate\Support\Facades\Facade;

/**
 *
 */
class ZohoBooksFacade extends Facade
{
  /**
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return 'zohoBooks';
  }
}
