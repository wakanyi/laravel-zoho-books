<?php

namespace Sumer5020\ZohoBooks\Contracts;

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

interface EstimateInterface
{
    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param CreateEstimateDto $createEstimateDto
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     */
    public function create(string $accessToken, string $organizationId, CreateEstimateDto $createEstimateDto, EstimateQpDto $estimateQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateEstimateDto $updateEstimateDto
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     */
    public function update(string $accessToken, string $organizationId, UpdateEstimateDto $updateEstimateDto, EstimateQpDto $estimateQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param PaginationDto $paginationDto
     * @param EstimateFiltersDto $estimateFiltersDto
     *
     * @return array
     */
    public function list(string $accessToken, string $organizationId, PaginationDto $paginationDto, EstimateFiltersDto $estimateFiltersDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     */
    public function get(string $accessToken, string $organizationId, string $estimateId, EstimateQpDto $estimateQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     */
    public function delete(string $accessToken, string $organizationId, string $estimateId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateCustomFieldEstimateDto $updateCustomFieldEstimateDto
     *
     * @return array
     */
    public function updateCustomField(string $accessToken, string $organizationId, UpdateCustomFieldEstimateDto $updateCustomFieldEstimateDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     */
    public function markAsSent(string $accessToken, string $organizationId, string $estimateId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     */
    public function markAsAccepted(string $accessToken, string $organizationId, string $estimateId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     */
    public function markAsDeclined(string $accessToken, string $organizationId, string $estimateId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     */
    public function submitForApproval(string $accessToken, string $organizationId, string $estimateId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     */
    public function approve(string $accessToken, string $organizationId, string $estimateId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param EmailEstimateDto $emailEstimateDto
     *
     * @param EstimateQpDto $estimateQpDto
     *
     * @return array
     */
    public function emailEstimate(string $accessToken, string $organizationId, EmailEstimateDto $emailEstimateDto, EstimateQpDto $estimateQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param GetEstimateEmailContentEstimateDto $getEstimateEmailContentEstimateDto
     *
     * @return array
     */
    public function getEstimateEmailContent(string $accessToken, string $organizationId, GetEstimateEmailContentEstimateDto $getEstimateEmailContentEstimateDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateIds
     *
     * @return array
     */
    public function emailMultipleEstimates(string $accessToken, string $organizationId, string $estimateIds): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateIds
     *
     * @return array
     */
    public function bulkExportEstimates(string $accessToken, string $organizationId, string $estimateIds): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateIds
     *
     * @return array
     */
    public function bulkPrintEstimates(string $accessToken, string $organizationId, string $estimateIds): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateAddressEstimateDto $updateBillingAddressEstimateDto
     *
     * @return array
     */
    public function updateBillingAddress(string $accessToken, string $organizationId, UpdateAddressEstimateDto $updateBillingAddressEstimateDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateAddressEstimateDto $updateShippingAddressEstimateDto
     *
     * @return array
     */
    public function updateShippingAddress(string $accessToken, string $organizationId, UpdateAddressEstimateDto $updateShippingAddressEstimateDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     *
     * @return array
     */
    public function listEstimateTemplate(string $accessToken, string $organizationId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateEstimateTemplateEstimateDto $updateEstimateTemplateEstimateDto
     *
     * @return array
     */
    public function updateEstimateTemplate(string $accessToken, string $organizationId, UpdateEstimateTemplateEstimateDto $updateEstimateTemplateEstimateDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param AddCommentsEstimateDto $addCommentsEstimateDto
     *
     * @return array
     */
    public function addComments(string $accessToken, string $organizationId, AddCommentsEstimateDto $addCommentsEstimateDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $estimateId
     *
     * @return array
     */
    public function listEstimateCommentsAndHistory(string $accessToken, string $organizationId, string $estimateId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateCommentEstimateDto $updateCommentEstimateDto
     *
     * @return array
     */
    public function updateComment(string $accessToken, string $organizationId, UpdateCommentEstimateDto $updateCommentEstimateDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param DeleteCommentEstimateDto $deleteCommentEstimateDto
     *
     * @return array
     */
    public function deleteComment(string $accessToken, string $organizationId, DeleteCommentEstimateDto $deleteCommentEstimateDto): array;
}
