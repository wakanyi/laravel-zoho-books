<?php

namespace Sumer5020\ZohoBooks;

use Sumer5020\ZohoBooks\Contracts\AuthenticationInterface;
use Sumer5020\ZohoBooks\Contracts\ContactInterface;
use Sumer5020\ZohoBooks\Contracts\BankAccountInterface;
use Sumer5020\ZohoBooks\Contracts\BankRuleInterface;
use Sumer5020\ZohoBooks\Contracts\BankTransactionInterface;
use Sumer5020\ZohoBooks\Contracts\BaseCurrencyAdjustmentInterface;
use Sumer5020\ZohoBooks\Contracts\BillInterface;
use Sumer5020\ZohoBooks\Contracts\ChartOfAccountInterface;
use Sumer5020\ZohoBooks\Contracts\ContactPersonInterface;
use Sumer5020\ZohoBooks\Contracts\CreditNoteInterface;
use Sumer5020\ZohoBooks\Contracts\CurrencyInterface;
use Sumer5020\ZohoBooks\Contracts\CustomerPaymentInterface;
use Sumer5020\ZohoBooks\Contracts\CustomModuleInterface;
use Sumer5020\ZohoBooks\Contracts\EstimateInterface;
use Sumer5020\ZohoBooks\Contracts\ExpenseInterface;
use Sumer5020\ZohoBooks\Contracts\InvoiceInterface;
use Sumer5020\ZohoBooks\Contracts\ItemInterface;
use Sumer5020\ZohoBooks\Contracts\JournalInterface;
use Sumer5020\ZohoBooks\Contracts\OpeningBalanceInterface;
use Sumer5020\ZohoBooks\Contracts\ProjectInterface;
use Sumer5020\ZohoBooks\Contracts\PurchaseOrderInterface;
use Sumer5020\ZohoBooks\Contracts\RecurringBillInterface;
use Sumer5020\ZohoBooks\Contracts\RecurringExpenseInterface;
use Sumer5020\ZohoBooks\Contracts\RecurringInvoiceInterface;
use Sumer5020\ZohoBooks\Contracts\RetainerInvoiceInterface;
use Sumer5020\ZohoBooks\Contracts\SalesOrderInterface;
use Sumer5020\ZohoBooks\Contracts\TaskInterface;
use Sumer5020\ZohoBooks\Contracts\TaxInterface;
use Sumer5020\ZohoBooks\Contracts\TimeEntryInterface;
use Sumer5020\ZohoBooks\Contracts\UserInterface;
use Sumer5020\ZohoBooks\Contracts\VendorCreditInterface;
use Sumer5020\ZohoBooks\Contracts\VendorPaymentInterface;
use Sumer5020\ZohoBooks\Contracts\ZohoCrmIntegrationInterface;

class ZohoBooks
{
    protected $app;

    /**
     * Application instance for lazy loading services
     *
     * @param $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * @return AuthenticationInterface
     */
    public function authentications(): AuthenticationInterface
    {
        return $this->app->make(AuthenticationInterface::class);
    }

    /**
     * @return ContactInterface
     */
    public function contacts(): ContactInterface
    {
        return $this->app->make(ContactInterface::class);
    }

    /**
     * @return BankAccountInterface
     */
    public function bankAccounts(): BankAccountInterface
    {
        return $this->app->make(BankAccountInterface::class);
    }

    /**
     * @return BankRuleInterface
     */
    public function bankRules(): BankRuleInterface
    {
        return $this->app->make(BankRuleInterface::class);
    }

    /**
     * @return BankTransactionInterface
     */
    public function bankTransactions(): BankTransactionInterface
    {
        return $this->app->make(BankTransactionInterface::class);
    }

    /**
     * @return BaseCurrencyAdjustmentInterface
     */
    public function baseCurrencyAdjustments(): BaseCurrencyAdjustmentInterface
    {
        return $this->app->make(BaseCurrencyAdjustmentInterface::class);
    }

    /**
     * @return BillInterface
     */
    public function bills(): BillInterface
    {
        return $this->app->make(BillInterface::class);
    }

    /**
     * @return ChartOfAccountInterface
     */
    public function chartOfAccounts(): ChartOfAccountInterface
    {
        return $this->app->make(ChartOfAccountInterface::class);
    }

    /**
     * @return ContactPersonInterface
     */
    public function contactPersons(): ContactPersonInterface
    {
        return $this->app->make(ContactPersonInterface::class);
    }

    /**
     * @return CreditNoteInterface
     */
    public function creditNotes(): CreditNoteInterface
    {
        return $this->app->make(CreditNoteInterface::class);
    }

    /**
     * @return CurrencyInterface
     */
    public function currencies(): CurrencyInterface
    {
        return $this->app->make(CurrencyInterface::class);
    }

    /**
     * @return CustomerPaymentInterface
     */
    public function customerPayments(): CustomerPaymentInterface
    {
        return $this->app->make(CustomerPaymentInterface::class);
    }

    /**
     * @return CustomModuleInterface
     */
    public function customModules(): CustomModuleInterface
    {
        return $this->app->make(CustomModuleInterface::class);
    }

    /**
     * @return EstimateInterface
     */
    public function Estimates(): EstimateInterface
    {
        return $this->app->make(EstimateInterface::class);
    }

    /**
     * @return ExpenseInterface
     */
    public function expenses(): ExpenseInterface
    {
        return $this->app->make(ExpenseInterface::class);
    }

    /**
     * @return InvoiceInterface
     */
    public function invoices(): InvoiceInterface
    {
        return $this->app->make(InvoiceInterface::class);
    }

    /**
     * @return ItemInterface
     */
    public function items(): ItemInterface
    {
        return $this->app->make(ItemInterface::class);
    }

    /**
     * @return JournalInterface
     */
    public function journals(): JournalInterface
    {
        return $this->app->make(JournalInterface::class);
    }

    /**
     * @return OpeningBalanceInterface
     */
    public function openingBalances(): OpeningBalanceInterface
    {
        return $this->app->make(OpeningBalanceInterface::class);
    }

    /**
     * @return ProjectInterface
     */
    public function projects(): ProjectInterface
    {
        return $this->app->make(ProjectInterface::class);
    }

    /**
     * @return PurchaseOrderInterface
     */
    public function purchaseOrders(): PurchaseOrderInterface
    {
        return $this->app->make(PurchaseOrderInterface::class);
    }

    /**
     * @return RecurringBillInterface
     */
    public function recurringBills(): RecurringBillInterface
    {
        return $this->app->make(RecurringBillInterface::class);
    }

    /**
     * @return RecurringExpenseInterface
     */
    public function recurringExpenses(): RecurringExpenseInterface
    {
        return $this->app->make(RecurringExpenseInterface::class);
    }

    /**
     * @return RecurringInvoiceInterface
     */
    public function recurringInvoices(): RecurringInvoiceInterface
    {
        return $this->app->make(RecurringInvoiceInterface::class);
    }

    /**
     * @return RetainerInvoiceInterface
     */
    public function retainerInvoices(): RetainerInvoiceInterface
    {
        return $this->app->make(RetainerInvoiceInterface::class);
    }

    /**
     * @return SalesOrderInterface
     */
    public function salesOrders(): SalesOrderInterface
    {
        return $this->app->make(SalesOrderInterface::class);
    }

    /**
     * @return TaskInterface
     */
    public function tasks(): TaskInterface
    {
        return $this->app->make(TaskInterface::class);
    }

    /**
     * @return TaxInterface
     */
    public function taxes(): TaxInterface
    {
        return $this->app->make(TaxInterface::class);
    }

    /**
     * @return TimeEntryInterface
     */
    public function timeEntries(): TimeEntryInterface
    {
        return $this->app->make(TimeEntryInterface::class);
    }

    /**
     * @return UserInterface
     */
    public function users(): UserInterface
    {
        return $this->app->make(UserInterface::class);
    }

    /**
     * @return VendorCreditInterface
     */
    public function vendorCredits(): VendorCreditInterface
    {
        return $this->app->make(VendorCreditInterface::class);
    }

    /**
     * @return VendorPaymentInterface
     */
    public function vendorPayments(): VendorPaymentInterface
    {
        return $this->app->make(VendorPaymentInterface::class);
    }

    /**
     * @return ZohoCrmIntegrationInterface
     */
    public function zohoCrmIntegrations(): ZohoCrmIntegrationInterface
    {
        return $this->app->make(ZohoCrmIntegrationInterface::class);
    }
}
