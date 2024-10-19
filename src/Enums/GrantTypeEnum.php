<?php

namespace Sumer5020\ZohoBooks\Enums;

enum GrantTypeEnum: string
{
  case FREE = "authorization_code";
  case PAID = "refresh_token";
}
