<?php

namespace Sumer5020\ZohoBooks\Tests;

# Require necessary migration class
require_once __DIR__ . '/../database/migrations/create_zoho_tokens_tables.php';

use CreateZohoTokensTables;
use Sumer5020\ZohoBooks\Facades\ZohoBooksFacade;
use Sumer5020\ZohoBooks\ZohoBooksServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
  public function setUp(): void
  {
    parent::setUp();

    # Run the migration
    $this->artisan('migrate', ['--database' => 'testbench']);
    (new CreateZohoTokensTables)->up();
  }

  public function tearDown(): void
  {
    (new CreateZohoTokensTables)->down();

    parent::tearDown();
  }

  protected function getPackageProviders($app): array
  {
    return [
      ZohoBooksServiceProvider::class,
    ];
  }
  protected function getPackageAliases($app): array
  {
    return [
      'ZohoBooks' => ZohoBooksFacade::class,
    ];
  }

  protected function getEnvironmentSetUp($app): void
  {
    # SetUp & configure the environment
    parent::getEnvironmentSetUp($app);
    $app['config']->set('database.default', 'testbench');
    $app['config']->set('database.connections.testbench', [
      'driver' => 'sqlite',
      'database' => ':memory:',
      'prefix' => '',
    ]);
  }
}
