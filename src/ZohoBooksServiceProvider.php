<?php

namespace Sumer5020\ZohoBooks;

use Illuminate\Support\ServiceProvider;

class ZohoBooksServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishConfig();
        $this->publishMigrations();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/zohoBooks.php', 'zohoBooks');
        $this->registerIsp();
        $this->registerZohoBooks();
    }

    /**
     * Bind interfaces to their implementations
     *
     * @return void
     */
    private function registerIsp(): void
    {
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\AuthenticationInterface::class, \Sumer5020\ZohoBooks\Services\AuthenticationService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\ContactInterface::class, \Sumer5020\ZohoBooks\Services\ContactService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\BankAccountInterface::class, \Sumer5020\ZohoBooks\Services\BankAccountService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\BankRuleInterface::class, \Sumer5020\ZohoBooks\Services\BankRuleService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\BankTransactionInterface::class, \Sumer5020\ZohoBooks\Services\BankTransactionService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\BaseCurrencyAdjustmentInterface::class, \Sumer5020\ZohoBooks\Services\BaseCurrencyAdjustmentService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\BillInterface::class, \Sumer5020\ZohoBooks\Services\BillService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\ChartOfAccountInterface::class, \Sumer5020\ZohoBooks\Services\ChartOfAccountService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\ContactPersonInterface::class, \Sumer5020\ZohoBooks\Services\ContactPersonService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\CreditNoteInterface::class, \Sumer5020\ZohoBooks\Services\CreditNoteService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\CurrencyInterface::class, \Sumer5020\ZohoBooks\Services\CurrencyService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\CustomerPaymentInterface::class, \Sumer5020\ZohoBooks\Services\CustomerPaymentService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\CustomModuleInterface::class, \Sumer5020\ZohoBooks\Services\CustomModuleService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\EstimateInterface::class, \Sumer5020\ZohoBooks\Services\EstimateService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\ExpenseInterface::class, \Sumer5020\ZohoBooks\Services\ExpenseService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\InvoiceInterface::class, \Sumer5020\ZohoBooks\Services\InvoiceService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\ItemInterface::class, \Sumer5020\ZohoBooks\Services\ItemService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\JournalInterface::class, \Sumer5020\ZohoBooks\Services\JournalService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\OpeningBalanceInterface::class, \Sumer5020\ZohoBooks\Services\OpeningBalanceService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\ProjectInterface::class, \Sumer5020\ZohoBooks\Services\ProjectService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\PurchaseOrderInterface::class, \Sumer5020\ZohoBooks\Services\PurchaseOrderService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\RecurringBillInterface::class, \Sumer5020\ZohoBooks\Services\RecurringBillService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\RecurringExpenseInterface::class, \Sumer5020\ZohoBooks\Services\RecurringExpenseService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\RecurringInvoiceInterface::class, \Sumer5020\ZohoBooks\Services\RecurringInvoiceService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\RetainerInvoiceInterface::class, \Sumer5020\ZohoBooks\Services\RetainerInvoiceService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\SalesOrderInterface::class, \Sumer5020\ZohoBooks\Services\SalesOrderService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\TaskInterface::class, \Sumer5020\ZohoBooks\Services\TaskService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\TaxInterface::class, \Sumer5020\ZohoBooks\Services\TaxService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\TimeEntryInterface::class, \Sumer5020\ZohoBooks\Services\TimeEntryService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\UserInterface::class, \Sumer5020\ZohoBooks\Services\UserService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\VendorCreditInterface::class, \Sumer5020\ZohoBooks\Services\VendorCreditService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\VendorPaymentInterface::class, \Sumer5020\ZohoBooks\Services\VendorPaymentService::class);
        $this->app->singleton(\Sumer5020\ZohoBooks\Contracts\ZohoCrmIntegrationInterface::class, \Sumer5020\ZohoBooks\Services\ZohoCrmIntegrationService::class);
    }

    /**
     * Registers zohoBooks.
     *
     * @return void
     */
    private function registerZohoBooks(): void
    {
        $this->app->singleton('zohoBooks', function ($app) {
            return new ZohoBooks($app);
        });
    }

    /**
     * Publish package's config file.
     *
     * @return void
     */
    public function publishConfig(): void
    {
        $this->publishes([
            __DIR__ . '/../config' => config_path(),
        ], 'zohoBooks.config');
    }

    /**
     * Publish package's migrations.
     *
     * @return void
     */
    public function publishMigrations(): void
    {
        $timestamp = date('Y_m_d_His', time());
        $stub = __DIR__ . '/../database/migrations/create_zoho_tokens_tables.php';
        $target = $this->app->databasePath() . '/migrations/' . $timestamp . '_create_zoho_tokens_tables.php';

        $this->publishes([$stub => $target], 'zohoBooks.migrations');
    }
}
