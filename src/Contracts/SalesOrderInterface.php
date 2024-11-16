<?php

namespace Sumer5020\ZohoBooks\Contracts;

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

interface SalesOrderInterface
{
    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param CreateSalesOrderDto $createSalesOrderDto
     * @param SalesOrderFiltersDto $salesOrderQpDto
     *
     * @return array
     */
    public function create(string $accessToken, string $organizationId, CreateSalesOrderDto $createSalesOrderDto, SalesOrderFiltersDto $salesOrderQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateSalesOrderDto $updateSalesOrderDto
     * @param SalesOrderFiltersDto $salesOrderQpDto
     *
     * @return array
     */
    public function update(string $accessToken, string $organizationId, UpdateSalesOrderDto $updateSalesOrderDto, SalesOrderFiltersDto $salesOrderQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateSalesOrderDto $updateSalesOrderDto
     * @param PaginationDto $paginationDto
     * @param SalesOrderFiltersDto $salesOrderQpDto
     *
     * @return array
     */
    public function list(string $accessToken, string $organizationId, UpdateSalesOrderDto $updateSalesOrderDto, PaginationDto $paginationDto, SalesOrderFiltersDto $salesOrderQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     */
    public function get(string $accessToken, string $organizationId, string $salesOrderId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     */
    public function delete(string $accessToken, string $organizationId, string $salesOrderId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateCustomFieldSalesOrderDto $updateCustomFieldSalesOrderDto
     *
     * @return array
     */
    public function updateCustomField(string $accessToken, string $organizationId, UpdateCustomFieldSalesOrderDto $updateCustomFieldSalesOrderDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     */
    public function markAsOpen(string $accessToken, string $organizationId, string $salesOrderId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param MarkAsVoidSalesOrderDto $markAsVoidSalesOrderDto
     *
     * @return array
     */
    public function markAsVoid(string $accessToken, string $organizationId, MarkAsVoidSalesOrderDto $markAsVoidSalesOrderDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     */
    public function updateSubStatus(string $accessToken, string $organizationId, string $salesOrderId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param EmailSalesOrderDto $emailSalesOrderDto
     * @param EmailSalesOrderQpDto $emailSalesOrderQpDto
     *
     * @return array
     */
    public function emailSalesOrder(string $accessToken, string $organizationId, EmailSalesOrderDto $emailSalesOrderDto, EmailSalesOrderQpDto $emailSalesOrderQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param GetEmailContentSalesOrderDto $getEmailContentSalesOrderDto
     *
     * @return array
     */
    public function getEmailContent(string $accessToken, string $organizationId, GetEmailContentSalesOrderDto $getEmailContentSalesOrderDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     */
    public function submitForApproval(string $accessToken, string $organizationId, string $salesOrderId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     */
    public function approve(string $accessToken, string $organizationId, string $salesOrderId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     *
     * @return array
     */
    public function bulkExport(string $accessToken, string $organizationId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     *
     * @return array
     */
    public function bulkPrint(string $accessToken, string $organizationId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateAddressSalesOrderDto $updateAddressSalesOrderDto
     *
     * @return array
     */
    public function updateBillingAddress(string $accessToken, string $organizationId, UpdateAddressSalesOrderDto $updateAddressSalesOrderDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateAddressSalesOrderDto $updateAddressSalesOrderDto
     *
     * @return array
     */
    public function updateShippingAddress(string $accessToken, string $organizationId, UpdateAddressSalesOrderDto $updateAddressSalesOrderDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param PaginationDto $paginationDto
     *
     * @return array
     */
    public function listTemplates(string $accessToken, string $organizationId, PaginationDto $paginationDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateTemplateSalesOrderDto $updateTemplateSalesOrderDto
     *
     * @return array
     */
    public function updateTemplate(string $accessToken, string $organizationId, UpdateTemplateSalesOrderDto $updateTemplateSalesOrderDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     * @param AddAttachmentToSalesOrderQpDto $addAttachmentToSalesOrderQpDto
     *
     * @return array
     */
    public function addAttachmentToSalesOrder(string $accessToken, string $organizationId, string $salesOrderId, AddAttachmentToSalesOrderQpDto $addAttachmentToSalesOrderQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     * @param UpdateAttachmentPreferenceSalesOrderQpDto $updateAttachmentPreferenceSalesOrderQpDto
     *
     * @return array
     */
    public function updateAttachmentPreference(string $accessToken, string $organizationId, string $salesOrderId, UpdateAttachmentPreferenceSalesOrderQpDto $updateAttachmentPreferenceSalesOrderQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     * @param GetSalesOrderAttachmentQpDto $getSalesOrderAttachmentQpDto
     *
     * @return array
     */
    public function getSalesOrderAttachment(string $accessToken, string $organizationId, string $salesOrderId, GetSalesOrderAttachmentQpDto $getSalesOrderAttachmentQpDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     *
     * @return array
     */
    public function deleteAttachment(string $accessToken, string $organizationId, string $salesOrderId): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param AddCommentSalesOrderDto $addCommentSalesOrderDto
     *
     * @return array
     */
    public function addComment(string $accessToken, string $organizationId, AddCommentSalesOrderDto $addCommentSalesOrderDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param string $salesOrderId
     * @param PaginationDto $paginationDto
     *
     * @return array
     */
    public function listCommentsAndHistory(string $accessToken, string $organizationId, string $salesOrderId, PaginationDto $paginationDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param UpdateCommentSalesOrderDto $updateCommentSalesOrderDto
     *
     * @return array
     */
    public function updateComment(string $accessToken, string $organizationId, UpdateCommentSalesOrderDto $updateCommentSalesOrderDto): array;

    /**
     * @param string $accessToken
     * @param string $organizationId
     * @param DeleteCommentSalesOrderDto $deleteCommentSalesOrderDto
     *
     * @return array
     */
    public function deleteComment(string $accessToken, string $organizationId, DeleteCommentSalesOrderDto $deleteCommentSalesOrderDto): array;
}
