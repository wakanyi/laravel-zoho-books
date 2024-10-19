<?php

namespace Sumer5020\ZohoBooks\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Sumer5020\ZohoBooks\Contracts\AuthenticationInterface authentications()
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
