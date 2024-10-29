<?php

namespace Sumer5020\ZohoBooks\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Sumer5020\ZohoBooks\Contracts\EstimateInterface;
use Sumer5020\ZohoBooks\DTOs\Estimate\AddCommentsEstimateDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\CreateEstimateDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\DeleteCommentEstimateDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\EmailEstimateDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\EstimateFiltersDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\EstimateQpDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\GetEstimateEmailContentEstimateDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\UpdateAddressEstimateDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\UpdateCommentEstimateDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\UpdateCustomFieldEstimateDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\UpdateEstimateDto;
use Sumer5020\ZohoBooks\DTOs\Estimate\UpdateEstimateTemplateEstimateDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;
use Sumer5020\ZohoBooks\Rules\EstimateRule;
use Sumer5020\ZohoBooks\Traits\WithDataValidate;

class EstimateService implements EstimateInterface
{
    use WithDataValidate;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param CreateEstimateDto $createEstimateDto
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     * @throws Exception
     */
    public function create(string $accessToken, string $organizationId, CreateEstimateDto $createEstimateDto, EstimateQpDto $estimateQpDto = new EstimateQpDto([])): array
    {
        try {
            $data = $createEstimateDto->toArray();
            $this->validate($data, EstimateRule::toCreate());
            $url = config('zohoBooks.url') . '/estimates?organization_id=' . $organizationId . $estimateQpDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to create an estimate for your customer. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateEstimateDto $updateEstimateDto
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     * @throws Exception
     */
    public function update(string $accessToken, string $organizationId, UpdateEstimateDto $updateEstimateDto, EstimateQpDto $estimateQpDto = new EstimateQpDto([])): array
    {
        try {
            $data = $updateEstimateDto->toArray();
            $this->validate($data, EstimateRule::toUpdate());
            $url = config('zohoBooks.url') . '/estimates/' . $updateEstimateDto->getEstimateId() . '?organization_id=' . $organizationId . $estimateQpDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to create an estimate for your customer. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param PaginationDto $paginationDto
     * @param EstimateFiltersDto $estimateFiltersDto
     *
     * @return array
     * @throws Exception
     */
    public function list(string $accessToken, string $organizationId, PaginationDto $paginationDto, EstimateFiltersDto $estimateFiltersDto): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates?organization_id=' . $organizationId . $paginationDto->toQueryString() . $estimateFiltersDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to list all estimates with pagination. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     * @throws Exception
     */
    public function get(string $accessToken, string $organizationId, string $estimateId, EstimateQpDto $estimateQpDto): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/' . $estimateId . '?organization_id=' . $organizationId . $estimateQpDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get the details of an estimate. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     * @throws Exception
     */
    public function delete(string $accessToken, string $organizationId, string $estimateId): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/' . $estimateId . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->delete($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to delete an existing estimate. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateCustomFieldEstimateDto $updateCustomFieldEstimateDto
     *
     * @return array
     * @throws Exception
     */
    public function updateCustomField(string $accessToken, string $organizationId, UpdateCustomFieldEstimateDto $updateCustomFieldEstimateDto): array
    {
        try {
            $data = $updateCustomFieldEstimateDto->toArray();
            $this->validate($data, EstimateRule::toUpdateCustomField());
            $url = config('zohoBooks.url') . '/estimates/' . $updateCustomFieldEstimateDto->getEstimateId() . '/customfields?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update the value of the custom field in existing estimates. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     * @throws Exception
     */
    public function markAsSent(string $accessToken, string $organizationId, string $estimateId): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/' . $estimateId . '/status/sent?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to mark a draft estimate as sent. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     * @throws Exception
     */
    public function markAsAccepted(string $accessToken, string $organizationId, string $estimateId): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/' . $estimateId . '/status/accepted?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to mark a sent estimate as accepted if the customer has accepted it. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     * @throws Exception
     */
    public function markAsDeclined(string $accessToken, string $organizationId, string $estimateId): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/' . $estimateId . '/status/declined?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to mark a sent estimate as declined if the customer has rejected it. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     * @throws Exception
     */
    public function submitForApproval(string $accessToken, string $organizationId, string $estimateId): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/' . $estimateId . '/submit?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to submit an estimate for approval. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     * @throws Exception
     */
    public function approve(string $accessToken, string $organizationId, string $estimateId): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/' . $estimateId . '/approve?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to approve an estimate. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param EmailEstimateDto $emailEstimateDto
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     * @throws Exception
     */
    public function emailEstimate(string $accessToken, string $organizationId, EmailEstimateDto $emailEstimateDto, EstimateQpDto $estimateQpDto = new EstimateQpDto([])): array
    {
        try {
            $data = $emailEstimateDto->toArray();
            $this->validate($data, EstimateRule::toEmail());
            $url = config('zohoBooks.url') . '/estimates/' . $emailEstimateDto->getEstimateId() . '/email?organization_id=' . $organizationId . $estimateQpDto->toQueryString();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to email an estimate to the customer. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param GetEstimateEmailContentEstimateDto $getEstimateEmailContentEstimateDto
     *
     * @return array
     * @throws Exception
     */
    public function getEstimateEmailContent(string $accessToken, string $organizationId, GetEstimateEmailContentEstimateDto $getEstimateEmailContentEstimateDto): array
    {
        try {
            $this->validate($getEstimateEmailContentEstimateDto->toArray(), EstimateRule::toGetEstimateEmailContent());
            $url = config('zohoBooks.url') . '/estimates/' . $getEstimateEmailContentEstimateDto->getEstimateId() . '/email?organization_id=' . $organizationId . '&email_template_id=' . $getEstimateEmailContentEstimateDto->getEmailTemplateId();

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get the email content of an estimate. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateIds
     *
     * @return array
     * @throws Exception
     */
    public function emailMultipleEstimates(string $accessToken, string $organizationId, string $estimateIds): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/email?organization_id=' . $organizationId . '&estimate_ids=' . $estimateIds;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to send estimates to your customers by email. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateIds
     *
     * @return array
     * @throws Exception
     */
    public function bulkExportEstimates(string $accessToken, string $organizationId, string $estimateIds): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/pdf?organization_id=' . $organizationId . '&estimate_ids=' . $estimateIds;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to exported estimates in a pdf. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateIds
     *
     * @return array
     * @throws Exception
     */
    public function bulkPrintEstimates(string $accessToken, string $organizationId, string $estimateIds): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/print?organization_id=' . $organizationId . '&estimate_ids=' . $estimateIds;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to export estimates as pdf and print them. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateAddressEstimateDto $updateBillingAddressEstimateDto
     *
     * @return array
     * @throws Exception
     */
    public function updateBillingAddress(string $accessToken, string $organizationId, UpdateAddressEstimateDto $updateBillingAddressEstimateDto): array
    {
        try {
            $data = $updateBillingAddressEstimateDto->toArray();
            $this->validate($data, EstimateRule::toUpdateAddress());
            $url = config('zohoBooks.url') . '/estimates/' . $updateBillingAddressEstimateDto->getEstimateId() . '/address/billing?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to updates the billing address for this estimate alone. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateAddressEstimateDto $updateShippingAddressEstimateDto
     *
     * @return array
     * @throws Exception
     */
    public function updateShippingAddress(string $accessToken, string $organizationId, UpdateAddressEstimateDto $updateShippingAddressEstimateDto): array
    {
        try {
            $data = $updateShippingAddressEstimateDto->toArray();
            $this->validate($data, EstimateRule::toUpdateAddress());
            $url = config('zohoBooks.url') . '/estimates/' . $updateShippingAddressEstimateDto->getEstimateId() . '/address/shipping?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to updates the shipping address for an existing estimate alone. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     *
     * @return array
     * @throws Exception
     */
    public function listEstimateTemplate(string $accessToken, string $organizationId): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/templates?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get all estimate pdf templates. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateEstimateTemplateEstimateDto $updateEstimateTemplateEstimateDto
     *
     * @return array
     * @throws Exception
     */
    public function updateEstimateTemplate(string $accessToken, string $organizationId, UpdateEstimateTemplateEstimateDto $updateEstimateTemplateEstimateDto): array
    {
        try {
            $this->validate($updateEstimateTemplateEstimateDto->toArray(), EstimateRule::toUpdateEstimateTemplate());
            $url = config('zohoBooks.url') . '/estimates/' . $updateEstimateTemplateEstimateDto->getEstimateId() . '/templates/' . $updateEstimateTemplateEstimateDto->getTemplateId() . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update the pdf template associated with the estimate. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param AddCommentsEstimateDto $addCommentsEstimateDto
     *
     * @return array
     * @throws Exception
     */
    public function addComments(string $accessToken, string $organizationId, AddCommentsEstimateDto $addCommentsEstimateDto): array
    {
        try {
            $data = $addCommentsEstimateDto->toArray();
            $this->validate($data, EstimateRule::toAddComments());
            $url = config('zohoBooks.url') . '/estimates/' . $addCommentsEstimateDto->getEstimateId() . '/comments?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to add a comment for an estimate. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     * @throws Exception
     */
    public function listEstimateCommentsAndHistory(string $accessToken, string $organizationId, string $estimateId): array
    {
        try {
            $url = config('zohoBooks.url') . '/estimates/' . $estimateId . '/comments?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
                'Accept' => config('zohoBooks.response_format'),
            ])->get($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to get the complete history and comments of an estimate. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateCommentEstimateDto $updateCommentEstimateDto
     *
     * @return array
     * @throws Exception
     */
    public function updateComment(string $accessToken, string $organizationId, UpdateCommentEstimateDto $updateCommentEstimateDto): array
    {
        try {
            $data = $updateCommentEstimateDto->toArray();
            $this->validate($data, EstimateRule::toUpdateComment());
            $url = config('zohoBooks.url') . '/estimates/' . $updateCommentEstimateDto->getEstimateId() . '/comments/' . $updateCommentEstimateDto->getCommentId() . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to update an existing comment of an estimate. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param DeleteCommentEstimateDto $deleteCommentEstimateDto
     *
     * @return array
     * @throws Exception
     */
    public function deleteComment(string $accessToken, string $organizationId, DeleteCommentEstimateDto $deleteCommentEstimateDto): array
    {
        try {
            $this->validate($deleteCommentEstimateDto->toArray(), EstimateRule::toDeleteComment());
            $url = config('zohoBooks.url') . '/estimates/' . $deleteCommentEstimateDto->getEstimateId() . '/comments/' . $deleteCommentEstimateDto->getCommentId() . '?organization_id=' . $organizationId;

            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->delete($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to delete an estimate comment. Response: ' . $e->getMessage());
        }
    }
}
