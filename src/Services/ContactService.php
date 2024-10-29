<?php

namespace Sumer5020\ZohoBooks\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Sumer5020\ZohoBooks\Contracts\ContactInterface;
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
use Sumer5020\ZohoBooks\Rules\ContactRule;
use Sumer5020\ZohoBooks\Traits\WithDataValidate;

class ContactService implements ContactInterface
{
    use WithDataValidate;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param CreateContactDto $createContactDto
     *
     * @return array $response
     * @throws Exception
     */
    public function create(string $accessToken, string $organizationId, CreateContactDto $createContactDto): array
    {
        try {
            $data = $createContactDto->toArray();
            $this->validate($data, ContactRule::toCreate());
            $url = config('zohoBooks.url') . '/contacts?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to create contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateContactDto $updateContactDto
     *
     * @return array $response
     * @throws Exception
     */
    public function update(string $accessToken, string $organizationId, UpdateContactDto $updateContactDto): array
    {
        try {
            $data = $updateContactDto->toArray();
            $this->validate($data, ContactRule::toUpdate());
            $url = config('zohoBooks.url') . '/contacts?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param PaginationDto $paginationDto
     * @param ContactFiltersDto $contactFiltersDto
     *
     * @return array
     * @throws Exception
     */
    public function list(string $accessToken, string $organizationId, PaginationDto $paginationDto = new PaginationDto([]), ContactFiltersDto $contactFiltersDto = new ContactFiltersDto([])): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts?organization_id=' . $organizationId . $paginationDto->toQueryString() . $contactFiltersDto->toQueryString();

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
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     * @throws Exception
     */
    public function get(string $accessToken, string $organizationId, string $contactId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     * @throws Exception
     */
    public function delete(string $accessToken, string $organizationId, string $contactId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     * @throws Exception
     */
    public function markAsActive(string $accessToken, string $organizationId, string $contactId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '/active?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     * @throws Exception
     */
    public function markAsInactive(string $accessToken, string $organizationId, string $contactId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '/inactive?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param EnablePortalAccessContactDto $enablePortalAccessContactDto
     *
     * @return array
     * @throws Exception
     */
    public function enablePortalAccess(string $accessToken, string $organizationId, EnablePortalAccessContactDto $enablePortalAccessContactDto): array
    {
        try {
            $this->validate($enablePortalAccessContactDto->toArray(), ContactRule::toEnablePortalAccess());
            $url = config('zohoBooks.url') . '/contacts/' . $enablePortalAccessContactDto->getContactId() . '/portal/enable?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, ['contact_persons' => $enablePortalAccessContactDto->getContactPersons()])->json();
        } catch (Exception $e) {
            throw new Exception('Failed to enable portal access for the contact. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     * @throws Exception
     */
    public function enablePaymentReminders(string $accessToken, string $organizationId, string $contactId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '/paymentreminder/enable?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     * @throws Exception
     */
    public function disablePaymentReminders(string $accessToken, string $organizationId, string $contactId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '/paymentreminder/disable?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param EmailStatementContactDto $emailStatementContactDto
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     * @throws Exception
     */
    public function emailStatement(string $accessToken, string $organizationId, EmailStatementContactDto $emailStatementContactDto, ContactQpDto $contactQpDto = new ContactQpDto([])): array
    {
        try {
            $data = $emailStatementContactDto->toArray();
            $this->validate($data, ContactRule::toEmailStatement());
            $url = config('zohoBooks.url') . '/contacts/' . $emailStatementContactDto->getContactId() . '/statements/email?organization_id=' . $organizationId . $contactQpDto->toQueryString();

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
     * @param string $organizationId
     * @param string $contactId
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     * @throws Exception
     */
    public function getStatementMailContent(string $accessToken, string $organizationId, string $contactId, ContactQpDto $contactQpDto): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '/statements/email?organization_id=' . $organizationId . $contactQpDto->toQueryString();

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
     * @param string $organizationId
     * @param EmailContactContactDto $emailContactContactDto
     * @param ContactQpDto $contactQpDto
     *
     * @return array
     * @throws Exception
     */
    public function emailContact(string $accessToken, string $organizationId, EmailContactContactDto $emailContactContactDto, ContactQpDto $contactQpDto): array
    {
        try {
            $data = $emailContactContactDto->toArray();
            $this->validate($data, ContactRule::toEmail());
            $url = config('zohoBooks.url') . '/contacts/' . $emailContactContactDto->getContactId() . '/email?organization_id=' . $organizationId . $contactQpDto->toQueryString();

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
     * @param string $organizationId
     * @param string $contactId
     * @param PaginationDto $paginationDto
     * @param ContactFiltersDto $contactFiltersDto
     *
     * @return array
     * @throws Exception
     */
    public function listComments(string $accessToken, string $organizationId, string $contactId, PaginationDto $paginationDto = new PaginationDto([]), ContactFiltersDto $contactFiltersDto = new ContactFiltersDto([])): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '/comments?organization_id=' . $organizationId . $paginationDto->toQueryString();

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
     * @param string $organizationId
     * @param AddAdditionalAddressContactDto $addAdditionalAddressContactDto
     *
     * @return array
     * @throws Exception
     */
    public function addAdditionalAddress(string $accessToken, string $organizationId, AddAdditionalAddressContactDto $addAdditionalAddressContactDto): array
    {
        try {
            $data = $addAdditionalAddressContactDto->toArray();
            $this->validate($data, ContactRule::toAddAdditionalAddress());
            $url = config('zohoBooks.url') . '/contacts/' . $addAdditionalAddressContactDto->getContactId() . '/address?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     * @throws Exception
     */
    public function getContactAddresses(string $accessToken, string $organizationId, string $contactId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '/address?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param EditAdditionalAddressContactDto $editAdditionalAddressContactDto
     *
     * @return array
     * @throws Exception
     */
    public function editAdditionalAddress(string $accessToken, string $organizationId, EditAdditionalAddressContactDto $editAdditionalAddressContactDto): array
    {
        try {
            $data = $editAdditionalAddressContactDto->toArray();
            $this->validate($data, ContactRule::toEditAdditionalAddress());
            $url = config('zohoBooks.url') . '/contacts/' . $editAdditionalAddressContactDto->getContactId() . '/address/' . $editAdditionalAddressContactDto->getAddressId() . '?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param DeleteAdditionalAddressContactDto $deleteAdditionalAddressContactDto
     *
     * @return array
     * @throws Exception
     */
    public function deleteAdditionalAddress(string $accessToken, string $organizationId, DeleteAdditionalAddressContactDto $deleteAdditionalAddressContactDto): array
    {
        try {
            $this->validate($deleteAdditionalAddressContactDto->toArray(), ContactRule::toDeleteAdditionalAddress());
            $url = config('zohoBooks.url') . '/contacts/' . $deleteAdditionalAddressContactDto->getContactId() . '/address/' . $deleteAdditionalAddressContactDto->getAddressId() . '?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     * @throws Exception
     */
    public function listRefunds(string $accessToken, string $organizationId, string $contactId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '/refunds?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     * @throws Exception
     */
    public function track1099(string $accessToken, string $organizationId, string $contactId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '/track1099?organization_id=' . $organizationId;

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
     * @param string $organizationId
     * @param string $contactId
     *
     * @return array
     * @throws Exception
     */
    public function untrack1099(string $accessToken, string $organizationId, string $contactId): array
    {
        try {
            $url = config('zohoBooks.url') . '/contacts/' . $contactId . '/untrack1099?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to stop tracking payments to a vendor for 1099 reporting. Response: ' . $e->getMessage());
        }
    }
}
