<?php

namespace Sumer5020\ZohoBooks\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Sumer5020\ZohoBooks\Contracts\ContactInterface;
use Sumer5020\ZohoBooks\DTOs\Arguments\ContactDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;
use Sumer5020\ZohoBooks\DTOs\QueryParameters\ContactFiltersQpDto;
use Sumer5020\ZohoBooks\DTOs\QueryParameters\ContactQpDto;

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
            ])->put($url, $contactDto->toArray())->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param PaginationDto $paginationDto
     * @param ContactFiltersQpDto $contactFiltersDto
     *
     * @return array
     * @throws Exception
     */
    public function list(string $accessToken, string $organization_id, PaginationDto $paginationDto = new PaginationDto([]), ContactFiltersQpDto $contactFiltersDto = new ContactFiltersQpDto([])): array
    {
        $url = config('zohoBooks.url') . '/contacts?organization_id=' . $organization_id . $paginationDto->toQueryString() . $contactFiltersDto->toQueryString();

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get contacts. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     * @throws Exception
     */
    public function get(string $accessToken, string $organization_id, string $contact_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get contact details. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     * @throws Exception
     */
    public function delete(string $accessToken, string $organization_id, string $contact_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->delete($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to delete contact details. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     * @throws Exception
     */
    public function markAsActive(string $accessToken, string $organization_id, string $contact_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/active?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to mark the contact as active. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     * @throws Exception
     */
    public function markAsInactive(string $accessToken, string $organization_id, string $contact_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/inactive?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to mark the contact as inactive. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param array $contact_persons
     *
     * @return array
     * @throws Exception
     */
    public function enablePortalAccess(string $accessToken, string $organization_id, string $contact_id, array $contact_persons): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/portal/enable?organization_id=' . $organization_id;
        $data = [
            'contact_persons' => $contact_persons,
        ];

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to enable portal access for the contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     * @throws Exception
     */
    public function enablePaymentReminders(string $accessToken, string $organization_id, string $contact_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/paymentreminder/enable?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to enable automated payment reminders for a contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     * @throws Exception
     */
    public function disablePaymentReminders(string $accessToken, string $organization_id, string $contact_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/paymentreminder/disable?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to disable automated payment reminders for a contact. Response: ' . $e->getMessage());
        }
    }

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
     * @throws Exception
     */
    public function emailStatement(string $accessToken, string $organization_id, string $contact_id, bool $send_from_org_email_id, array $to_mail_ids, array $cc_mail_ids, string $subject, string $body, ContactQpDto $contactQpDto = new ContactQpDto([])): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/statements/email?organization_id=' . $organization_id . $contactQpDto->toQueryString();
        $data = [
            'send_from_org_email_id' => $send_from_org_email_id,
            'to_mail_ids' => $to_mail_ids,
            'cc_mail_ids' => $cc_mail_ids,
            'subject' => $subject,
            'body' => $body,
        ];

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Email statement to the contact failed. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     * @throws Exception
     */
    public function getStatementMailContent(string $accessToken, string $organization_id, string $contact_id, ContactQpDto $contactQpDto): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/statements/email?organization_id=' . $organization_id . $contactQpDto->toQueryString();

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get statement mail content. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param array $to_mail_ids
     * @param string $subject
     * @param string $body
     * @param string $attachments Binary
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     * @throws Exception
     */
    public function emailContact(string $accessToken, string $organization_id, string $contact_id, array $to_mail_ids, string $subject, string $body, string $attachments, ContactQpDto $contactQpDto): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/email?organization_id=' . $organization_id . $contactQpDto->toQueryString();
        $data = [
            'to_mail_ids' => $to_mail_ids,
            'subject' => $subject,
            'body' => $body,
            'attachments' => $attachments
        ];

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to send email to contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param PaginationDto $paginationDto
     * @param ContactFiltersQpDto $contactFiltersDto
     *
     * @return array
     * @throws Exception
     */
    public function listComments(string $accessToken, string $organization_id, string $contact_id, PaginationDto $paginationDto = new PaginationDto([]), ContactFiltersQpDto $contactFiltersDto = new ContactFiltersQpDto([])): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/comments?organization_id=' . $organization_id . $paginationDto->toQueryString();

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get recent activities of a contact. Response: ' . $e->getMessage());
        }
    }

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
     * @throws Exception
     */
    public function addAdditionalAddress(string $accessToken, string $organization_id, string $contact_id, string $attention, string $address, string $street2, string $city, string $state, string $zip, string $country, string $fax, string $phone): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/address?organization_id=' . $organization_id;
        $data = [
            'attention' => $attention,
            'address' => $address,
            'street2' => $street2,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
            'country' => $country,
            'fax' => $fax,
            'phone' => $phone
        ];

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to add an additional address for a contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     * @throws Exception
     */
    public function getContactAddresses(string $accessToken, string $organization_id, string $contact_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/address?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get addresses of a contact. Response: ' . $e->getMessage());
        }
    }

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
     * @throws Exception
     */
    public function editAdditionalAddress(string $accessToken, string $organization_id, string $contact_id, string $attention, string $address, string $street2, string $city, string $state, string $zip, string $country, string $fax, string $phone, string $address_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/address/'.$address_id.'?organization_id=' . $organization_id;
        $data = [
            'attention' => $attention,
            'address' => $address,
            'street2' => $street2,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
            'country' => $country,
            'fax' => $fax,
            'phone' => $phone,
            'address_id' => $address_id
        ];

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to edit the additional address of a contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     * @param string $address_id
     *
     * @return array
     * @throws Exception
     */
    public function deleteAdditionalAddress(string $accessToken, string $organization_id, string $contact_id, string $address_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/address/'.$address_id.'?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->delete($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to delete the additional address of a contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     * @throws Exception
     */
    public function listRefunds(string $accessToken, string $organization_id, string $contact_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/refunds?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to list the refund history of a contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     * @throws Exception
     */
    public function track1099(string $accessToken, string $organization_id, string $contact_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/track1099?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to track a contact for 1099 reporting. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $contact_id
     *
     * @return array
     * @throws Exception
     */
    public function untrack1099(string $accessToken, string $organization_id, string $contact_id): array
    {
        $url = config('zohoBooks.url') . '/contacts/'.$contact_id.'/untrack1099?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to stop tracking payments to a vendor for 1099 reporting. Response: ' . $e->getMessage());
        }
    }
}
