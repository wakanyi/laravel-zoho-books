<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToQueryString;

class UpdateAttachmentPreferenceSalesOrderQpDto extends Dto
{
    use WithToQueryString;

    /** @var bool Can the file be sent in mail */
    private bool $can_send_in_mail;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->can_send_in_mail = $data['can_send_in_mail'] ?? false;
    }

    public function isCanSendInMail(): bool
    {
        return $this->can_send_in_mail;
    }
}
