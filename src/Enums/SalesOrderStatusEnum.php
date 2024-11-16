<?php

namespace Sumer5020\ZohoBooks\Enums;

enum SalesOrderStatusEnum: string
{
    case DRAFT = "draft";
    case OPEN = "open";
    case INVOICED = "invoiced";
    case PARTIALLY_INVOICED = "partially_invoiced";
    case VOID = "void";
    case OVER_DUE = "overdue";
}
