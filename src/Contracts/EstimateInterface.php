<?php

namespace Sumer5020\ZohoBooks\Contracts;

use Sumer5020\ZohoBooks\DTOs\Arguments\EstimateDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;
use Sumer5020\ZohoBooks\DTOs\QueryParameters\EstimateFiltersQpDto;
use Sumer5020\ZohoBooks\DTOs\QueryParameters\EstimateQpDto;

interface EstimateInterface {
    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param EstimateDto $estimateDto
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     */
    public function create(string $accessToken, string $organization_id, EstimateDto $estimateDto, EstimateQpDto $estimateQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     * @param EstimateDto $estimateDto
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     */
    public function update(string $accessToken, string $organization_id, string $estimate_id, EstimateDto $estimateDto, EstimateQpDto $estimateQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param PaginationDto $paginationDto
     * @param EstimateFiltersQpDto $estimateFiltersDto
     *
     * @return array
     */
    public function list(string $accessToken, string $organization_id, PaginationDto $paginationDto, EstimateFiltersQpDto $estimateFiltersDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     */
    public function get(string $accessToken, string $organization_id, string $estimate_id, EstimateQpDto $estimateQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     */
    public function delete(string $accessToken, string $organization_id, string $estimate_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $customfield_id
     * @param string $value
     *
     * @return array
     */
    public function updateCustomField(string $accessToken, string $organization_id, string $estimate_id, string $customfield_id, string $value): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     */
    public function markAsSent(string $accessToken, string $organization_id, string $estimate_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     */
    public function markAsAccepted(string $accessToken, string $organization_id, string $estimate_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     */
    public function markAsDeclined(string $accessToken, string $organization_id, string $estimate_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     */
    public function submitForApproval(string $accessToken, string $organization_id, string $estimate_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     */
    public function approve(string $accessToken, string $organization_id, string $estimate_id): array;

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
     */
    public function emailEstimate(string $accessToken, string $organization_id, string $estimate_id, bool $send_from_org_email_id, array $to_mail_ids, array $cc_mail_ids, string $subject, string $body, EstimateQpDto $estimateQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $email_template_id
     *
     * @return array
     */
    public function getEstimateEmailContent(string $accessToken, string $organization_id, string $estimate_id, string $email_template_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_ids
     *
     * @return array
     */
    public function emailMultipleEstimates(string $accessToken, string $organization_id, string $estimate_ids): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_ids
     *
     * @return array
     */
    public function bulkExportEstimates(string $accessToken, string $organization_id, string $estimate_ids): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_ids
     *
     * @return array
     */
    public function bulkPrintEstimates(string $accessToken, string $organization_id, string $estimate_ids): array;

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
     */
    public function updateBillingAddress(string $accessToken, string $organization_id, string $estimate_id, string $address, string $city, string $state, string $zip, string $country, string $fax): array;

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
     */
    public function updateShippingAddress(string $accessToken, string $organization_id, string $estimate_id, string $address, string $city, string $state, string $zip, string $country, string $fax): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     *
     * @return array
     */
    public function listEstimateTemplate(string $accessToken, string $organization_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $template_id
     *
     * @return array
     */
    public function updateEstimateTemplate(string $accessToken, string $organization_id, string $estimate_id, string $template_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $description
     * @param bool $show_comment_to_clients
     *
     * @return array
     */
    public function addComments(string $accessToken, string $organization_id, string $estimate_id, string $description, bool $show_comment_to_clients): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     *
     * @return array
     */
    public function listEstimateCommentsAndHistory(string $accessToken, string $organization_id, string $estimate_id): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $comment_id
     * @param string $description
     * @param bool $show_comment_to_clients
     *
     * @return array
     */
    public function updateComment(string $accessToken, string $organization_id, string $estimate_id, string $comment_id, string $description, bool $show_comment_to_clients): array;

    /**
     * @param string $accessToken
     * @param string $organization_id
     * @param string $estimate_id
     * @param string $comment_id
     *
     * @return array
     */
    public function deleteComment(string $accessToken, string $organization_id, string $estimate_id, string $comment_id): array;
}
