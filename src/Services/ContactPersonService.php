<?php

namespace Sumer5020\ZohoBooks\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Sumer5020\ZohoBooks\Contracts\ContactPersonInterface;
use Sumer5020\ZohoBooks\DTOs\Arguments\ContactPersonDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;

class ContactPersonService implements ContactPersonInterface {
    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param ContactPersonDto $contactPersonDto
     *
     * @return array
     * @throws Exception
     */
    public function create(string $accessToken, string $organization_id, ContactPersonDto $contactPersonDto): array
    {
        $url = config('zohoBooks.url') . '/contacts/contactpersons?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $contactPersonDto->toArray())->json();
        } catch (Exception $e) {
            throw new Exception('Failed to create a contact person for contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_person_id
     * @param ContactPersonDto $contactPersonDto
     *
     * @return array
     * @throws Exception
     */
    public function update(string $accessToken, string $organization_id, string $contact_person_id, ContactPersonDto $contactPersonDto): array
    {
        $url = config('zohoBooks.url') . '/contacts/contactpersons/'.$contact_person_id.'/?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $contactPersonDto->toArray())->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update an existing contact person. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_person_id
     *
     * @return array
     * @throws Exception
     */
    public function delete(string $accessToken, string $organization_id, string $contact_person_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/contactpersons/'.$contact_person_id.'?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $contact_id
     * @param PaginationDto $paginationDto
     *
     * @return array
     * @throws Exception
     */
    public function list(string $accessToken, string $organization_id, string $contact_id, PaginationDto $paginationDto = new PaginationDto([])): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'contactpersons?organization_id=' . $organization_id . $paginationDto->toQueryString();

        try {
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
     * @param string $organization_id
     * @param string $contact_id
     * @param string $contact_person_id
     *
     * @return array
     * @throws Exception
     */
    public function get(string $accessToken, string $organization_id, string $contact_id, string $contact_person_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/contactpersons/'.$contact_person_id.'?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $contact_person_id
     *
     * @return array
     * @throws Exception
     */
    public function markAsPrimary(string $accessToken, string $organization_id, string $contact_person_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/contactpersons/'.$contact_person_id.'primary?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to mark a contact person as primary for the contact. Response: ' . $e->getMessage());
        }
    }
}
