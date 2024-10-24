<?php

namespace Sumer5020\ZohoBooks\Enums;

enum AllowedContactLanguageEnum: string
{
    case DE = "de";
    case EN = "en";
    case ES = "es";
    case FR = "fr";
    case IT = "it";
    case JA = "ja";
    case NL = "nl";
    case PT = "pt";
    case SV = "sv";
    case ZH = "zh";
    case PT_BR = "pt_br";
    case EN_GB = "en_gb";

    # Get the code based on the Allowed Contact Language case
    public function code(): string
    {
        return $this->value;
    }
}
