<?php

namespace Sumer5020\ZohoBooks\Tests\Unit;

use Sumer5020\ZohoBooks\Facades\ZohoBooksFacade;
use Sumer5020\ZohoBooks\Models\ZohoTokens;
use Sumer5020\ZohoBooks\Tests\TestCase;

class AuthenticationUnitTest extends TestCase
{
  /**
   * @return void
   */
  public function testCreateAccessToken()
  {
    $token = ZohoBooksFacade::authentications()->createAccessToken();

    $this->assertIsString($token, 'The access token should be a string');
    $this->assertMatchesRegularExpression(
      '/^1000\.[a-zA-Z0-9]{32}\.[a-zA-Z0-9]{32}$/',
      $token,
      'The access token format is invalid.'
    );
  }

  /**
   * @return void
   */
  public function testRefreshAccessToken()
  {
    ZohoBooksFacade::authentications()->createAccessToken();
    
    $zohoToken = ZohoTokens::where('code', config('zohoBook.access_code'))->get();

    $token = ZohoBooksFacade::authentications()->refreshAccessToken($zohoToken?->refresh_token);

    $this->assertIsString($token, 'The access token should be a string');

    $this->assertMatchesRegularExpression(
      '/^1000\.[a-zA-Z0-9]{32}\.[a-zA-Z0-9]{32}$/',
      $token,
      'The access token format is invalid.'
    );
  }

  /**
   * @return void
   */
  public function testRevokeRefreshAccessToken()
  {
    ZohoBooksFacade::authentications()->createAccessToken();
    
    $zohoToken = ZohoTokens::where('code', config('zohoBook.access_code'))->get();
    
    $status = ZohoBooksFacade::authentications()->revokeRefreshAccessToken($zohoToken?->access_token, $zohoToken?->refresh_token);

    $this->assertEquals(true, $status);
  }
}
