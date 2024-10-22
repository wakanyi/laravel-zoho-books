<?php

namespace Sumer5020\ZohoBooks\Enums;

enum ResponseFormatEnum: string
{
    case ANY = "*/*";
    case PDF = "application/pdf";
    case CSV = "text/csv";
    case JSON = "application/json";

    # Get the URL based on the DataCenter case
    public function format(): string
    {
        return $this->value;
    }
}
