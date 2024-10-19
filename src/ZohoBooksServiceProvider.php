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
