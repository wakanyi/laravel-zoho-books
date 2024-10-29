<?php

namespace Sumer5020\ZohoBooks\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Sumer5020\ZohoBooks\Contracts\ContactPersonInterface;
use Sumer5020\ZohoBooks\DTOs\ContactPerson\CreateContactPersonDto;
use Sumer5020\ZohoBooks\DTOs\ContactPerson\GetContactPersonDto;
use Sumer5020\ZohoBooks\DTOs\ContactPerson\UpdateContactPersonDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;
use Sumer5020\ZohoBooks\Rules\EstimateRule;
use Sumer5020\ZohoBooks\Traits\WithDataValidate;

class ContactPersonService implements ContactPersonInterface
{
    use WithDataValidate;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param CreateContactPersonDto $createContactPersonDto
     *
     * @return array
     * @throws Exception
     */
    public function create(string $accessToken, string $organizationId, CreateContactPersonDto $createContactPersonDto): array
    {
        try {
            $data = $createContactPersonDto->toArray();
            $this->validate($data, EstimateRule::toCreate());
            $url = config('zohoBooks.url') . '/contacts/contactpersons?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to create a contact person for contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateContactPersonDto $updateContactPersonDto
     *
     * @return array
     * @throws Exception
     */
    public function update(string $accessToken, string $organizationId, UpdateContactPersonDto $updateContactPersonDto): array
    {
        try {
            $data = $updateContactPersonDto->toArray();
            $this->validate($data, EstimateRule::toUpdate());
            $url = config('zohoBooks.url') . '/contacts/contactpersons/' . $updateContactPersonDto->getContactPersonId() . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update an existing contact person. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactPersonId
     *
     * @return array
     * @throws Exception
     */
    public function delete(string $accessToken, string $organizationId, string $contactPersonId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/contactpersons/' . $contactPersonId . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->delete($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to delete an existing contact person. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     * @param PaginationDto $paginationDto
     *
     * @return array
     * @throws Exception
     */
    public function list(string $accessToken, string $organizationId, string $contactId, PaginationDto $paginationDto = new PaginationDto([])): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . 'contactpersons?organization_id=' . $organizationId . $paginationDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to list all contacts with pagination. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param GetContactPersonDto $getContactPersonDto
     *
     * @return array
     * @throws Exception
     */
    public function get(string $accessToken, string $organizationId, GetContactPersonDto $getContactPersonDto): array
    {
        try {
            $this->validate($getContactPersonDto->toArray(), EstimateRule::toGet());
            $url = config('zohoBooks.url') . '/contacts/' . $getContactPersonDto->getContactId() . '/contactpersons/' . $getContactPersonDto->getContactPersonId() . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get the contact person details. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactPersonId
     *
     * @return array
     * @throws Exception
     */
    public function markAsPrimary(string $accessToken, string $organizationId, string $contactPersonId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/contactpersons/' . $contactPersonId . '/primary?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to mark a contact person as primary for the contact. Response: ' . $e->getMessage());
        }
    }
}
