<?php

namespace Sumer5020\ZohoBooks\Services;

use Exception;
use Illuminate\Support\Facades\Http;
use Sumer5020\ZohoBooks\Contracts\EstimateInterface;
use Sumer5020\ZohoBooks\DTOs\Arguments\EstimateDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;
use Sumer5020\ZohoBooks\DTOs\QueryParameters\EstimateFiltersQpDto;
use Sumer5020\ZohoBooks\DTOs\QueryParameters\EstimateQpDto;

class EstimateService implements EstimateInterface {
    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param EstimateDto $estimateDto
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     * @throws Exception
     */
    public function create(string $accessToken, string $organization_id, EstimateDto $estimateDto, EstimateQpDto $estimateQpDto = new EstimateQpDto([])): array
    {
        $url = config('zohoBooks.url') . '/estimates?organization_id=' . $organization_id . $estimateQpDto->toQueryString();

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->post($url, $estimateDto->toArray())->json();
        } catch (Exception $e) {
            throw new Exception('Failed to create an estimate for your customer. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     * @param EstimateDto $estimateDto
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     * @throws Exception
     */
    public function update(string $accessToken, string $organization_id,string $estimate_id, EstimateDto $estimateDto, EstimateQpDto $estimateQpDto = new EstimateQpDto([])): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'?organization_id=' . $organization_id . $estimateQpDto->toQueryString();

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->put($url, $estimateDto->toArray())->json();
        } catch (Exception $e) {
            throw new Exception('Failed to create an estimate for your customer. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param PaginationDto $paginationDto
     * @param EstimateFiltersQpDto $estimateFiltersDto
     *
     * @return array
     * @throws Exception
     */
    public function list(string $accessToken, string $organization_id, PaginationDto $paginationDto, EstimateFiltersQpDto $estimateFiltersDto): array
    {
        $url = config('zohoBooks.url') . '/estimates?organization_id=' . $organization_id . $paginationDto->toQueryString() . $estimateFiltersDto->toQueryString();

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     * @throws Exception
     */
    public function get(string $accessToken, string $organization_id, string $estimate_id, EstimateQpDto $estimateQpDto): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'?organization_id=' . $organization_id.$estimateQpDto->toQueryString();

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     * @throws Exception
     */
    public function delete(string $accessToken, string $organization_id, string $estimate_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $customfield_id
     * @param string $value
     *
     * @return array
     * @throws Exception
     */
    public function updateCustomField(string $accessToken, string $organization_id, string $estimate_id, string $customfield_id, string $value): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/customfields?organization_id=' . $organization_id;
        $data = [
            'customfield_id' => $customfield_id,
            'value' => $value
        ];

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     * @throws Exception
     */
    public function markAsSent(string $accessToken, string $organization_id, string $estimate_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/status/sent?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     * @throws Exception
     */
    public function markAsAccepted(string $accessToken, string $organization_id, string $estimate_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/status/accepted?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     * @throws Exception
     */
    public function markAsDeclined(string $accessToken, string $organization_id, string $estimate_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/status/declined?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     * @throws Exception
     */
    public function submitForApproval(string $accessToken, string $organization_id, string $estimate_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/submit?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     * @return array
     * @throws Exception
     */
    public function approve(string $accessToken, string $organization_id, string $estimate_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/approve?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     * @param bool $send_from_org_email_id
     * @param array $to_mail_ids
     * @param array $cc_mail_ids
     * @param string $subject
     * @param string $body
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     * @throws Exception
     */
    public function emailEstimate(string $accessToken, string $organization_id, string $estimate_id, bool $send_from_org_email_id, array $to_mail_ids, array $cc_mail_ids, string $subject, string $body, EstimateQpDto $estimateQpDto = new EstimateQpDto([])): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/email?organization_id=' . $organization_id.$estimateQpDto->toQueryString();
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
            ])->post($url,$data)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to email an estimate to the customer. Response: ' . $e->getMessage());
        }
    }

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $email_template_id
     *
     * @return array
     * @throws Exception
     */
    public function getEstimateEmailContent(string $accessToken, string $organization_id, string $estimate_id, string $email_template_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/email?organization_id=' . $organization_id.'&email_template_id='.$email_template_id;

        try {
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
     * @param string $organization_id
     * @param string $estimate_ids
     *
     * @return array
     * @throws Exception
     */
    public function emailMultipleEstimates(string $accessToken, string $organization_id, string $estimate_ids): array
    {
        $url = config('zohoBooks.url') . '/estimates/email?organization_id=' . $organization_id.'&estimate_ids='.$estimate_ids;

        try {
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
     * @param string $organization_id
     * @param string $estimate_ids
     *
     * @return array
     * @throws Exception
     */
    public function bulkExportEstimates(string $accessToken, string $organization_id, string $estimate_ids): array
    {
        $url = config('zohoBooks.url') . '/estimates/pdf?organization_id=' . $organization_id.'&estimate_ids='.$estimate_ids;

        try {
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
     * @param string $organization_id
     * @param string $estimate_ids
     *
     * @return array
     * @throws Exception
     */
    public function bulkPrintEstimates(string $accessToken, string $organization_id, string $estimate_ids): array
    {
        $url = config('zohoBooks.url') . '/estimates/print?organization_id=' . $organization_id.'&estimate_ids='.$estimate_ids;

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $address
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     * @param string $fax
     *
     * @return array
     * @throws Exception
     */
    public function updateBillingAddress(string $accessToken, string $organization_id, string $estimate_id, string $address, string $city, string $state, string $zip, string $country, string $fax): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/address/billing?organization_id=' . $organization_id;
        $data = [
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
            'country' => $country,
            'fax' => $fax,
        ];

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $address
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     * @param string $fax
     *
     * @return array
     * @throws Exception
     */
    public function updateShippingAddress(string $accessToken, string $organization_id, string $estimate_id, string $address, string $city, string $state, string $zip, string $country, string $fax): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/address/shipping?organization_id=' . $organization_id;
        $data = [
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
            'country' => $country,
            'fax' => $fax,
        ];

        try {
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
     * @param string $organization_id
     *
     * @return array
     * @throws Exception
     */
    public function listEstimateTemplate(string $accessToken, string $organization_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/templates?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $template_id
     *
     * @return array
     * @throws Exception
     */
    public function updateEstimateTemplate(string $accessToken, string $organization_id, string $estimate_id, string $template_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/templates/'.$template_id.'?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $description
     * @param bool $show_comment_to_clients
     *
     * @return array
     * @throws Exception
     */
    public function addComments(string $accessToken, string $organization_id, string $estimate_id, string $description, bool $show_comment_to_clients): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/comments?organization_id=' . $organization_id;
        $data = [
            'description' => $description,
            'show_comment_to_clients' => $show_comment_to_clients,
        ];

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     * @throws Exception
     */
    public function listEstimateCommentsAndHistory(string $accessToken, string $organization_id, string $estimate_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/comments?organization_id=' . $organization_id;

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $comment_id
     * @param string $description
     * @param bool $show_comment_to_clients
     *
     * @return array
     * @throws Exception
     */
    public function updateComment(string $accessToken, string $organization_id, string $estimate_id, string $comment_id, string $description, bool $show_comment_to_clients): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/comments/'.$comment_id.'?organization_id=' . $organization_id;
        $data = [
            'description' => $description,
            'show_comment_to_clients' => $show_comment_to_clients,
        ];

        try {
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
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $comment_id
     *
     * @return array
     * @throws Exception
     */
    public function deleteComment(string $accessToken, string $organization_id, string $estimate_id, string $comment_id): array
    {
        $url = config('zohoBooks.url') . '/estimates/'.$estimate_id.'/comments/'.$comment_id.'?organization_id=' . $organization_id;

        try {
            return Http::withHeaders([
                'Authorization' => "Zoho-oauthtoken " . $accessToken,
                'content-type' => 'application/json',
            ])->delete($url)->json();
        } catch (Exception $e) {
            throw new Exception('Failed to delete an estimate comment. Response: ' . $e->getMessage());
        }
    }
}
