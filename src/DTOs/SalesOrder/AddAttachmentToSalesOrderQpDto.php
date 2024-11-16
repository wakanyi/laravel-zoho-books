<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToQueryString;

class AddAttachmentToSalesOrderQpDto extends Dto
{
    use WithToQueryString;

    /** @var string The file that is to be added as an Attachment in the Sales Order */
    private string $attachments;

    /** @var bool Can the file be sent in mail */
    private bool $can_send_in_mail;

    /** @var string Document that is to be attached */
    private string $doc;

    /** @var string Total number of files */
    private string $totalFiles;

    /** @var string ID's of the document */
    private string $document_ids;


    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->attachments = $data['attachments'] ?? '';
        $this->can_send_in_mail = $data['can_send_in_mail'] ?? false;
        $this->doc = $data['doc'] ?? '';
        $this->totalFiles = $data['totalFiles'] ?? '';
        $this->document_ids = $data['document_ids'] ?? '';
    }
}
