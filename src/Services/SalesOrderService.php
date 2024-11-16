<?php

namespace Sumer5020\ZohoBooks\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Sumer5020\ZohoBooks\Contracts\SalesOrderInterface;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\AddAttachmentToSalesOrderQpDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\AddCommentSalesOrderDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\CreateSalesOrderDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\DeleteCommentSalesOrderDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\EmailSalesOrderDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\EmailSalesOrderQpDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\GetEmailContentSalesOrderDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\GetSalesOrderAttachmentQpDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\MarkAsVoidSalesOrderDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\SalesOrderFiltersDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\UpdateAddressSalesOrderDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\UpdateAttachmentPreferenceSalesOrderQpDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\UpdateCommentSalesOrderDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\UpdateCustomFieldSalesOrderDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\UpdateSalesOrderDto;
use Sumer5020\ZohoBooks\DTOs\SalesOrder\UpdateTemplateSalesOrderDto;
use Sumer5020\ZohoBooks\Rules\SalesOrderRule;
use Sumer5020\ZohoBooks\Traits\WithDataValidate;

class SalesOrderService implements SalesOrderInterface
{
    use WithDataValidate;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param CreateSalesOrderDto $createSalesOrderDto
     * @param SalesOrderFiltersDto $salesOrderQpDto
     *
     * @return array
     * @throws Exception
     */
    public function create(string $accessToken, string $organizationId, CreateSalesOrderDto $createSalesOrderDto, SalesOrderFiltersDto $salesOrderQpDto = new SalesOrderFiltersDto([])): array
    {
        try {
            $data = $createSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toCreate());
            $url = config('zohoBooks.url') . '/salesorders?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to create a sales order for your customer. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateSalesOrderDto $updateSalesOrderDto
     * @param SalesOrderFiltersDto $salesOrderQpDto
     *
     * @return array
     * @throws Exception
     */
    public function update(string $accessToken, string $organizationId, UpdateSalesOrderDto $updateSalesOrderDto, SalesOrderFiltersDto $salesOrderQpDto): array
    {
        try {
            $data = $updateSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toUpdate());
            $url = config('zohoBooks.url') . '/salesorders/' . $updateSalesOrderDto->getSalesorderId() . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update an existing sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateSalesOrderDto $updateSalesOrderDto
     * @param PaginationDto $paginationDto
     * @param SalesOrderFiltersDto $salesOrderQpDto
     *
     * @return array
     * @throws Exception
     */
    public function list(string $accessToken, string $organizationId, UpdateSalesOrderDto $updateSalesOrderDto, PaginationDto $paginationDto, SalesOrderFiltersDto $salesOrderQpDto): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders?organization_id=' . $organizationId . $paginationDto->toQueryString() . $salesOrderQpDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to list all sales orders. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     * @throws Exception
     */
    public function get(string $accessToken, string $organizationId, string $salesOrderId): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get the details of a sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     * @throws Exception
     */
    public function delete(string $accessToken, string $organizationId, string $salesOrderId): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->delete($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to delete an existing sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateCustomFieldSalesOrderDto $updateCustomFieldSalesOrderDto
     *
     * @return array
     * @throws Exception
     */
    public function updateCustomField(string $accessToken, string $organizationId, UpdateCustomFieldSalesOrderDto $updateCustomFieldSalesOrderDto): array
    {
        try {
            $data = $updateCustomFieldSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toUpdateCustomField());
            $url = config('zohoBooks.url') . '/salesorders/' . $updateCustomFieldSalesOrderDto->getSalesorderId() . '/customfields?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update the value of the custom field in existing salesorders. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     * @throws Exception
     */
    public function markAsOpen(string $accessToken, string $organizationId, string $salesOrderId): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '/status/open?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to mark a draft sales order as open. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param MarkAsVoidSalesOrderDto $markAsVoidSalesOrderDto
     *
     * @return array
     * @throws Exception
     */
    public function markAsVoid(string $accessToken, string $organizationId, MarkAsVoidSalesOrderDto $markAsVoidSalesOrderDto): array
    {
        try {
            $data = $markAsVoidSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toMarkAsVoid());
            $url = config('zohoBooks.url') . '/salesorders/' . $markAsVoidSalesOrderDto->getSalesorderId() . '/status/void?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to mark a sales order as void. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     * @throws Exception
     */
    public function updateSubStatus(string $accessToken, string $organizationId, string $salesOrderId): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '/substatus/cs_openshi?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update a sales order sub status. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param EmailSalesOrderDto $emailSalesOrderDto
     * @param EmailSalesOrderQpDto $emailSalesOrderQpDto
     *
     * @return array
     * @throws Exception
     */
    public function emailSalesOrder(string $accessToken, string $organizationId, EmailSalesOrderDto $emailSalesOrderDto, EmailSalesOrderQpDto $emailSalesOrderQpDto): array
    {
        try {
            $data = $emailSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toEmailSalesOrder());
            $url = config('zohoBooks.url') . '/salesorders/' . $emailSalesOrderDto->getSalesorderId() . '/email?organization_id=' . $organizationId . $emailSalesOrderQpDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to email a sales order to the customer. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param GetEmailContentSalesOrderDto $getEmailContentSalesOrderDto
     *
     * @return array
     * @throws Exception
     */
    public function getEmailContent(string $accessToken, string $organizationId, GetEmailContentSalesOrderDto $getEmailContentSalesOrderDto): array
    {
        try {
            $this->validate($getEmailContentSalesOrderDto->toArray(), SalesOrderRule::toGetEmailContentSalesOrder());
            $url = config('zohoBooks.url') . '/salesorders/' . $getEmailContentSalesOrderDto->getSalesorderId() . '/email?organization_id=' . $organizationId . $getEmailContentSalesOrderDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get the email content of a sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     * @throws Exception
     */
    public function submitForApproval(string $accessToken, string $organizationId, string $salesOrderId): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '/submit?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to submit a sales order for approval. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     * @throws Exception
     */
    public function approve(string $accessToken, string $organizationId, string $salesOrderId): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '/approve?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to approve a sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     *
     * @return array
     * @throws Exception
     */
    public function bulkExport(string $accessToken, string $organizationId): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/pdf?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to export sales orders to a single pdf. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     *
     * @return array
     * @throws Exception
     */
    public function bulkPrint(string $accessToken, string $organizationId): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/print?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to export sales orders as pdf and print them. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateAddressSalesOrderDto $updateAddressSalesOrderDto
     *
     * @return array
     * @throws Exception
     */
    public function updateBillingAddress(string $accessToken, string $organizationId, UpdateAddressSalesOrderDto $updateAddressSalesOrderDto): array
    {
        try {
            $data = $updateAddressSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toUpdateAddressSalesOrder());
            $url = config('zohoBooks.url') . '/salesorders/' . $updateAddressSalesOrderDto->getSalesorderId() . '/address/billing?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to updates the billing address for this sales order alone. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateAddressSalesOrderDto $updateAddressSalesOrderDto
     *
     * @return array
     * @throws Exception
     */
    public function updateShippingAddress(string $accessToken, string $organizationId, UpdateAddressSalesOrderDto $updateAddressSalesOrderDto): array
    {
        try {
            $data = $updateAddressSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toUpdateAddressSalesOrder());
            $url = config('zohoBooks.url') . '/salesorders/' . $updateAddressSalesOrderDto->getSalesorderId() . '/address/shipping?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to updates the shipping address for this sales order alone. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param PaginationDto $paginationDto
     *
     * @return array
     * @throws Exception
     */
    public function listTemplates(string $accessToken, string $organizationId, PaginationDto $paginationDto): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/templates?organization_id=' . $organizationId . $paginationDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get all sales order pdf templates. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateTemplateSalesOrderDto $updateTemplateSalesOrderDto
     *
     * @return array
     * @throws Exception
     */
    public function updateTemplate(string $accessToken, string $organizationId, UpdateTemplateSalesOrderDto $updateTemplateSalesOrderDto): array
    {
        try {
            $data = $updateTemplateSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toUpdateTemplateSalesOrder());
            $url = config('zohoBooks.url') . '/salesorders/' . $updateTemplateSalesOrderDto->getSalesorderId() . '/templates/' . $updateTemplateSalesOrderDto->getTemplateId() . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update the pdf template associated with the sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     * @param AddAttachmentToSalesOrderQpDto $addAttachmentToSalesOrderQpDto
     *
     * @return array
     * @throws Exception
     */
    public function addAttachmentToSalesOrder(string $accessToken, string $organizationId, string $salesOrderId, AddAttachmentToSalesOrderQpDto $addAttachmentToSalesOrderQpDto): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '/attachment?organization_id=' . $organizationId . $addAttachmentToSalesOrderQpDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to attach a file to a sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     * @param UpdateAttachmentPreferenceSalesOrderQpDto $updateAttachmentPreferenceSalesOrderQpDto
     *
     * @return array
     * @throws Exception
     */
    public function updateAttachmentPreference(string $accessToken, string $organizationId, string $salesOrderId, UpdateAttachmentPreferenceSalesOrderQpDto $updateAttachmentPreferenceSalesOrderQpDto): array
    {
        try {
            $this->validate(['can_send_in_mail' => $updateAttachmentPreferenceSalesOrderQpDto->isCanSendInMail()], SalesOrderRule::toUpdateAttachmentPreference());
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '/attachment?organization_id=' . $organizationId . $updateAttachmentPreferenceSalesOrderQpDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to set whether you want to send the attached file while emailing the sales. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     * @param GetSalesOrderAttachmentQpDto $getSalesOrderAttachmentQpDto
     *
     * @return array
     * @throws Exception
     */
    public function getSalesOrderAttachment(string $accessToken, string $organizationId, string $salesOrderId, GetSalesOrderAttachmentQpDto $getSalesOrderAttachmentQpDto): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '/attachment?organization_id=' . $organizationId . $getSalesOrderAttachmentQpDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get the file attached to the sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     * @throws Exception
     */
    public function deleteAttachment(string $accessToken, string $organizationId, string $salesOrderId): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '/attachment?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->delete($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to delete the file attached to the sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param AddCommentSalesOrderDto $addCommentSalesOrderDto
     *
     * @return array
     * @throws Exception
     */
    public function addComment(string $accessToken, string $organizationId, AddCommentSalesOrderDto $addCommentSalesOrderDto): array
    {
        try {
            $data = $addCommentSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toAddComment());
            $url = config('zohoBooks.url') . '/salesorders/' . $addCommentSalesOrderDto->getSalesorderId() . '/comments?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to add a comment for a sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     * @param PaginationDto $paginationDto
     *
     * @return array
     * @throws Exception
     */
    public function listCommentsAndHistory(string $accessToken, string $organizationId, string $salesOrderId, PaginationDto $paginationDto): array
    {
        try {
            $url = config('zohoBooks.url') . '/salesorders/' . $salesOrderId . '/comments?organization_id=' . $organizationId . $paginationDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get the complete history and comments of sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateCommentSalesOrderDto $updateCommentSalesOrderDto
     *
     * @return array
     * @throws Exception
     */
    public function updateComment(string $accessToken, string $organizationId, UpdateCommentSalesOrderDto $updateCommentSalesOrderDto): array
    {
        try {
            $data = $updateCommentSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toUpdateComment());
            $url = config('zohoBooks.url') . '/salesorders/' . $updateCommentSalesOrderDto->getSalesorderId() . '/comments' . $updateCommentSalesOrderDto->getCommentId() . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update existing comment of a sales order. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param DeleteCommentSalesOrderDto $deleteCommentSalesOrderDto
     *
     * @return array
     * @throws Exception
     */
    public function deleteComment(string $accessToken, string $organizationId, DeleteCommentSalesOrderDto $deleteCommentSalesOrderDto): array
    {
        try {
            $data = $deleteCommentSalesOrderDto->toArray();
            $this->validate($data, SalesOrderRule::toDeleteComment());
            $url = config('zohoBooks.url') . '/salesorders/' . $deleteCommentSalesOrderDto->getSalesorderId() . '/comments/' . $deleteCommentSalesOrderDto->getCommentId() . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->delete($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to delete a sales order comment. Response: ' . $e->getMessage());
        }
    }
}
