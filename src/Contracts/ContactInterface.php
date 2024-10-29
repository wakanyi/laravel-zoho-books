<?php

namespace Sumer5020\ZohoBooks\Contracts;

use Sumer5020\ZohoBooks\DTOs\Contact\AddAdditionalAddressContactDto;
use Sumer5020\ZohoBooks\DTOs\Contact\ContactFiltersDto;
use Sumer5020\ZohoBooks\DTOs\Contact\ContactQpDto;
use Sumer5020\ZohoBooks\DTOs\Contact\CreateContactDto;
use Sumer5020\ZohoBooks\DTOs\Contact\DeleteAdditionalAddressContactDto;
use Sumer5020\ZohoBooks\DTOs\Contact\EditAdditionalAddressContactDto;
use Sumer5020\ZohoBooks\DTOs\Contact\EmailContactContactDto;
use Sumer5020\ZohoBooks\DTOs\Contact\EmailStatementContactDto;
use Sumer5020\ZohoBooks\DTOs\Contact\EnablePortalAccessContactDto;
use Sumer5020\ZohoBooks\DTOs\Contact\UpdateContactDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;

interface ContactInterface
{
    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param CreateContactDto $createContactDto
     *
     * @return array
     */
    public function create(string $accessToken, string $organizationId, CreateContactDto $createContactDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateContactDto $updateContactDto
     *
     * @return array
     */
    public function update(string $accessToken, string $organizationId, UpdateContactDto $updateContactDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param PaginationDto $paginationDto
     * @param ContactFiltersDto $contactFiltersDto
     *
     * @return array
     */
    public function list(string $accessToken, string $organizationId, PaginationDto $paginationDto, ContactFiltersDto $contactFiltersDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     */
    public function get(string $accessToken, string $organizationId, string $contactId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     */
    public function delete(string $accessToken, string $organizationId, string $contactId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     */
    public function markAsActive(string $accessToken, string $organizationId, string $contactId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     */
    public function markAsInactive(string $accessToken, string $organizationId, string $contactId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param EnablePortalAccessContactDto $enablePortalAccessContactDto
     *
     * @return array
     */
    public function enablePortalAccess(string $accessToken, string $organizationId, EnablePortalAccessContactDto $enablePortalAccessContactDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     */
    public function enablePaymentReminders(string $accessToken, string $organizationId, string $contactId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     */
    public function disablePaymentReminders(string $accessToken, string $organizationId, string $contactId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param EmailStatementContactDto $emailStatementContactDto
     *
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     */
    public function emailStatement(string $accessToken, string $organizationId, EmailStatementContactDto $emailStatementContactDto, ContactQpDto $contactQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     */
    public function getStatementMailContent(string $accessToken, string $organizationId, string $contactId, ContactQpDto $contactQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param EmailContactContactDto $emailContactContactDto
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     */
    public function emailContact(string $accessToken, string $organizationId, EmailContactContactDto $emailContactContactDto, ContactQpDto $contactQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     * @param PaginationDto $paginationDto
     * @param ContactFiltersDto $contactFiltersDto
     *
     * @return array
     */
    public function listComments(string $accessToken, string $organizationId, string $contactId, PaginationDto $paginationDto, ContactFiltersDto $contactFiltersDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param AddAdditionalAddressContactDto $addAdditionalAddressContactDto
     *
     * @return array
     */
    public function addAdditionalAddress(string $accessToken, string $organizationId, AddAdditionalAddressContactDto $addAdditionalAddressContactDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     */
    public function getContactAddresses(string $accessToken, string $organizationId, string $contactId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param EditAdditionalAddressContactDto $editAdditionalAddressContactDto
     * @return array
     */
    public function editAdditionalAddress(string $accessToken, string $organizationId, EditAdditionalAddressContactDto $editAdditionalAddressContactDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param DeleteAdditionalAddressContactDto $deleteAdditionalAddressContactDto
     *
     * @return array
     */
    public function deleteAdditionalAddress(string $accessToken, string $organizationId, DeleteAdditionalAddressContactDto $deleteAdditionalAddressContactDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     */
    public function listRefunds(string $accessToken, string $organizationId, string $contactId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     */
    public function track1099(string $accessToken, string $organizationId, string $contactId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     */
    public function untrack1099(string $accessToken, string $organizationId, string $contactId): array;
}
