<?php

namespace Sumer5020\ZohoBooks\DTOs\Contact;

use Sumer5020\ZohoBooks\DTOs\Dto;
use Sumer5020\ZohoBooks\Traits\WithToArray;

class EmailContactContactDto extends Dto
{
    use WithToArray;

    /** @var string ID of the contact */
    private string $contact_id;

    /** @var array Array of email address of the recipients */
    private array $to_mail_ids;

    /** @var string Subject of an email has to be sent */
    private string $subject;

    /** @var string Body of an email has to be sent */
    private string $body;

    /** @var string Files to be attached to the email */
    private string $attachments;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setKeys($data);
        $this->contact_id = $data['contact_id'] ?? '';
        $this->to_mail_ids = $data['to_mail_ids'] ?? [];
        $this->subject = $data['subject'] ?? '';
        $this->body = $data['body'] ?? '';
        $this->attachments = $data['attachments'] ?? '';
    }

    public function getContactId(): string
    {
        return $this->contact_id;
    }

    public function getToMailIds(): array
    {
        return $this->to_mail_ids;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getAttachments(): string
    {
        return $this->attachments;
    }
}
