<?php

namespace Sumer5020\ZohoBooks\Enums;

enum SalesOrderSortColumnEnum: string
{
    case CUSTOMER_NAME = "customer_name";
    case SALESORDER_NUMBER = "salesorder_number";
    case SHIPMENT_DATE = "shipment_date";
    case LAST_MODIFIED_TIME = "last_modified_time";
    case REFERENCE_NUMBER = "reference_number";
    case TOTAL = "total";
    case DATE = "date";
    case CREATED_TIME = "created_time";
}
