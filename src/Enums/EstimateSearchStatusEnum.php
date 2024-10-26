<?php

namespace Sumer5020\ZohoBooks\Enums;

enum EstimateSearchStatusEnum: string
{
    case DRAFT = "draft";
    case SENT = "sent";
    case INVOICED = "invoiced";
    case ACCEPTED = "accepted";
    case DECLINED = "declined";
    case EXPIRED = "expired";
}
