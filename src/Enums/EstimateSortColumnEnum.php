<?php

namespace Sumer5020\ZohoBooks\Enums;

enum EstimateSortColumnEnum: string
{
    case CUSTOMER_NAME = "customer_name";
    case ESTIMATE_NUMBER = "estimate_number";
    case DATE = "date";
    case TOTAL = "total";
    case CREATED_TIME = "created_time";
}
