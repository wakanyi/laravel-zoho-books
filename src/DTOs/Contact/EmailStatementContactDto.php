<?php

namespace Sumer5020\ZohoBooks\DTOs\Contact;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class EmailStatementContactDto extends Dto
{
    use WithToArray;

    /** @var string ID of the contact */
    private string $contact_id;
    
    /** @var bool To trigger the email from the organization's email address */
    private bool $send_from_org_email_id;

    /** @var array Array of email address of the recipients */
    private array $to_mail_ids;

    /** @var array Array of email address of the recipients to be cced */
    private array $cc_mail_ids;

    /** @var string Subject of an email has to be sent */
    private string $subject;

    /** @var string Body of an email has to be sent */
    private string $body;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->contact_id = $data['contact_id'] ?? '';
        $this->send_from_org_email_id = $data['send_from_org_email_id'] ?? false;
        $this->to_mail_ids = $data['to_mail_ids'] ?? [];
        $this->cc_mail_ids = $data['cc_mail_ids'] ?? [];
        $this->subject = $data['subject'] ?? '';
        $this->body = $data['body'] ?? '';
    }

    public function getContactId(): string
    {
        return $this->contact_id;
    }

    public function isSendFromOrgEmailId(): bool
    {
        return $this->send_from_org_email_id;
    }

    public function getToMailIds(): array
    {
        return $this->to_mail_ids;
    }

    public function getCcMailIds(): array
    {
        return $this->cc_mail_ids;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getBody(): string
    {
        return $this->body;
    }
}
