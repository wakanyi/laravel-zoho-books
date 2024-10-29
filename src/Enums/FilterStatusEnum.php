<?php

namespace Sumer5020\ZohoBooks\Enums;

enum FilterStatusEnum: string
{
    case ALL = "Status.All";
    case ACTIVE = "Status.Active";
    case INACTIVE = "Status.Inactive";
    case DUPLICATE = "Status.Duplicate";
    case CRM = "Status.Crm";
}
