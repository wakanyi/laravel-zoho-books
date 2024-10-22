<?php

namespace Sumer5020\ZohoBooks\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Sumer5020\ZohoBooks\Contracts\ContactInterface;
use Sumer5020\ZohoBooks\DTOs\ContactDto;

class ContactService implements ContactInterface
{
    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param ContactDto $contactDto
     *
     * @return array $response
     * @throws Exception
     */
    public function create(string $accessToken, string $organization_id, ContactDto $contactDto): array
    {
        $url = config('zohoBooks.url') . '/contacts?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->post($url, $contactDto->toArray())->json();
        } catch (Exception $e) {
            throw new Exception('Failed to create contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param ContactDto $contactDto
     *
     * @return array $response
     * @throws Exception
     */
    public function update(string $accessToken, string $organization_id, ContactDto $contactDto): array
    {
        $url = config('zohoBooks.url') . '/contacts?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->put($url, $contactDto->toArray())->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update contact. Response: ' . $e->getMessage());
        }
    }
}
