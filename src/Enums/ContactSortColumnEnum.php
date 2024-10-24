<?php

namespace Sumer5020\ZohoBooks\Enums;

enum ContactSortColumnEnum: string
{
  case CONTACT_NAME = "contact_name";
  case FIRST_NAME = "first_name";
  case LAST_NAME = "last_name";
  case EMAIL = "email";
  case OUTSTANDING_RECEIVABLE_AMOUNT = "outstanding_receivable_amount";
  case CREATED_TIME = "created_time";
  case LAST_MODIFIED_TIME = "last_modified_time";
}
