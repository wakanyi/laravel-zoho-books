<?php

namespace Sumer5020\ZohoBooks\Contracts;

use Sumer5020\ZohoBooks\DTOs\Arguments\ContactDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;
use Sumer5020\ZohoBooks\DTOs\QueryParameters\ContactFiltersQpDto;
use Sumer5020\ZohoBooks\DTOs\QueryParameters\ContactQpDto;

interface ContactInterface
{
    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param ContactDto $contactDto
     *
     * @return array
     */
    public function create(string $accessToken, string $organization_id, ContactDto $contactDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param ContactDto $contactDto
     *
     * @return array
     */
    public function update(string $accessToken, string $organization_id, ContactDto $contactDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param PaginationDto $paginationDto
     * @param ContactFiltersQpDto $contactFiltersDto
     *
     * @return array
     */
    public function list(string $accessToken, string $organization_id, PaginationDto $paginationDto, ContactFiltersQpDto $contactFiltersDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function get(string $accessToken, string $organization_id, string $contact_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function delete(string $accessToken, string $organization_id, string $contact_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function markAsActive(string $accessToken, string $organization_id, string $contact_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function markAsInactive(string $accessToken, string $organization_id, string $contact_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param array $contact_persons
     *
     * @return array
     */
    public function enablePortalAccess(string $accessToken, string $organization_id, string $contact_id, array $contact_persons): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function enablePaymentReminders(string $accessToken, string $organization_id, string $contact_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function disablePaymentReminders(string $accessToken, string $organization_id, string $contact_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param bool $send_from_org_email_id
     * @param array $to_mail_ids
     * @param array $cc_mail_ids
     * @param string $subject
     * @param string $body
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     */
    public function emailStatement(string $accessToken, string $organization_id, string $contact_id, bool $send_from_org_email_id, array $to_mail_ids, array $cc_mail_ids, string $subject, string $body, ContactQpDto $contactQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     */
    public function getStatementMailContent(string $accessToken, string $organization_id, string $contact_id, ContactQpDto $contactQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param array $to_mail_ids
     * @param string $subject
     * @param string $body
     * @param string $attachments
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     */
    public function emailContact(string $accessToken, string $organization_id, string $contact_id, array $to_mail_ids, string $subject, string $body, string $attachments, ContactQpDto $contactQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param PaginationDto $paginationDto
     * @param ContactFiltersQpDto $contactFiltersDto
     *
     * @return array
     */
    public function listComments(string $accessToken, string $organization_id, string $contact_id, PaginationDto $paginationDto, ContactFiltersQpDto $contactFiltersDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param string $attention
     * @param string $address
     * @param string $street2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     * @param string $fax
     * @param string $phone
     *
     * @return array
     */
    public function addAdditionalAddress(string $accessToken, string $organization_id, string $contact_id, string $attention, string $address, string $street2, string $city, string $state, string $zip, string $country, string $fax, string $phone): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function getContactAddresses(string $accessToken, string $organization_id, string $contact_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param string $attention
     * @param string $address
     * @param string $street2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     * @param string $fax
     * @param string $phone
     * @param string $address_id
     *
     * @return array
     */
    public function editAdditionalAddress(string $accessToken, string $organization_id, string $contact_id, string $attention, string $address, string $street2, string $city, string $state, string $zip, string $country, string $fax, string $phone, string $address_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param string $address_id
     *
     * @return array
     */
    public function deleteAdditionalAddress(string $accessToken, string $organization_id, string $contact_id, string $address_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function listRefunds(string $accessToken, string $organization_id, string $contact_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function track1099(string $accessToken, string $organization_id, string $contact_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function untrack1099(string $accessToken, string $organization_id, string $contact_id): array;
}
