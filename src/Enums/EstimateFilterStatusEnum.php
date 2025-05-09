<?php

namespace Sumer5020\ZohoBooks\Enums;

enum EstimateFilterStatusEnum: string
{
    case ALL = "Status.All";
    case SENT = "Status.Sent";
    case DRAFT = "Status.Draft";
    case INVOICED = "Status.Invoiced";
    case ACCEPTED = "Status.Accepted";
    case DECLINED = "Status.Declined";
    case EXPIRED = "Status.Expired";
}
