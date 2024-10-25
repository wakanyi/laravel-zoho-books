<?php

namespace Sumer5020\ZohoBooks\Contracts;

use Sumer5020\ZohoBooks\DTOs\Arguments\ContactPersonDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;

interface ContactPersonInterface {
    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param ContactPersonDto $contactPersonDto
     *
     * @return array
     */
    public function create(string $accessToken, string $organization_id, ContactPersonDto $contactPersonDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param ContactPersonDto $contactPersonDto
     *
     * @return array
     */
    public function update(string $accessToken, string $organization_id, string $contact_person_id, ContactPersonDto $contactPersonDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_person_id
     *
     * @return array
     */
    public function delete(string $accessToken, string $organization_id, string $contact_person_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     */
    public function list(string $accessToken, string $organization_id, string $contact_id, PaginationDto $paginationDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param string $contact_person_id
     *
     * @return array
     */
    public function get(string $accessToken, string $organization_id, string $contact_id, string $contact_person_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_person_id
     *
     * @return array
     */
    public function markAsPrimary(string $accessToken, string $organization_id, string $contact_person_id): array;
}
