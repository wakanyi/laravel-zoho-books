<?php

namespace Sumer5020\ZohoBooks\Enums;

enum SalesOrderFilterStatusEnum: string
{
    case ALL = "Status.All";
    case OPEN = "Status.Open";
    case DRAFT = "Status.Draft";
    case OVER_DUE = "Status.OverDue";
    case PARTIALLY_INVOICED = "Status.PartiallyInvoiced";
    case INVOICED = "Status.Invoiced";
    case VOID = "Status.Void";
    case CLOSED = "Status.Closed";
}
