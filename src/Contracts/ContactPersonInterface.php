<?php

namespace Sumer5020\ZohoBooks\Contracts;

use Sumer5020\ZohoBooks\DTOs\ContactPerson\CreateContactPersonDto;
use Sumer5020\ZohoBooks\DTOs\ContactPerson\GetContactPersonDto;
use Sumer5020\ZohoBooks\DTOs\ContactPerson\UpdateContactPersonDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;

interface ContactPersonInterface
{
    
    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param CreateContactPersonDto $createContactPersonDto
     *
     * @return array
     */
    public function create(string $accessToken, string $organizationId, CreateContactPersonDto $createContactPersonDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateContactPersonDto $updateContactPersonDto
     *
     * @return array
     */
    public function update(string $accessToken, string $organizationId, UpdateContactPersonDto $updateContactPersonDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactPersonId
     *
     * @return array
     */
    public function delete(string $accessToken, string $organizationId, string $contactPersonId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     * @param PaginationDto $paginationDto
     *
     * @return array
     */
    public function list(string $accessToken, string $organizationId, string $contactId, PaginationDto $paginationDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param GetContactPersonDto $getContactPersonDto
     *
     * @return array
     */
    public function get(string $accessToken, string $organizationId, GetContactPersonDto $getContactPersonDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactPersonId
     *
     * @return array
     */
    public function markAsPrimary(string $accessToken, string $organizationId, string $contactPersonId): array;
}
