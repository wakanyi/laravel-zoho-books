<?php

namespace Sumer5020\ZohoBooks\Enums;

enum PlanEnum: int
{
    case FREE = 1;
    case STANDARD = 2;
    case PROFESSIONAL = 3;
    case PREMIUM = 4;
    case ELITE = 5;
    case ULTIMATE = 6;

    # Get call limit based on the PlanEnum case
    public function callLimit(): int
    {
        return match ($this) {
            self::FREE => 1000,
            self::STANDARD => 2000,
            self::PROFESSIONAL => 5000,
            self::PREMIUM, self::ELITE, self::ULTIMATE => 10000,
        };
    }

    # Get concurrent limit based on the PlanEnum case
    public function concurrentLimit(): int
    {
        return match ($this) {
            self::FREE => 1000,
            self::STANDARD, self::PROFESSIONAL, self::PREMIUM, self::ELITE, self::ULTIMATE => 2000,
        };
    }
}
