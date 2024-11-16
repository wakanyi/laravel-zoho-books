<?php

namespace Sumer5020\ZohoBooks\DTOs\SalesOrder;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class EmailSalesOrderDto extends Dto
{
    use WithToArray;

    /** @var string ID of the Sales Order */
    private string $salesorder_id;

    /** @var string From Address of the Email Address */
    private string $from_address_id;

    /** @var bool Boolean to trigger the email from the organization's email address */
    private bool $send_from_org_email_id;

    /** @var array Array of email address of the recipients */
    private array $to_mail_ids;

    /** @var array Array of email address of the recipients to be CC ed */
    private array $cc_mail_ids;

    /** @var array Array of email address of the recipients to be BCC ed */
    private array $bcc_mail_ids;

    /** @var string Subject of the mail */
    private string $subject;

    /** @var string Documents of the Sales Order */
    private string $documents;

    /** @var string ID of the invoice */
    private string $invoice_id;

    /** @var string Body of the mail */
    private string $body;


    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->salesorder_id = $data['salesorder_id'] ?? '';
        $this->from_address_id = $data['from_address_id'] ?? '';
        $this->send_from_org_email_id = $data['send_from_org_email_id'] ?? false;
        $this->to_mail_ids = $data['to_mail_ids'] ?? [];
        $this->cc_mail_ids = $data['cc_mail_ids'] ?? [];
        $this->bcc_mail_ids = $data['bcc_mail_ids'] ?? [];
        $this->subject = $data['subject'] ?? '';
        $this->documents = $data['documents'] ?? '';
        $this->invoice_id = $data['invoice_id'] ?? '';
        $this->body = $data['body'] ?? '';
    }

    public function getSalesorderId(): string
    {
        return $this->salesorder_id;
    }
}
