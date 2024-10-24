<?php

namespace Sumer5020\ZohoBooks\Tests\Unit;

use Sumer5020\ZohoBooks\DTOs\Arguments\ContactDto;
use Sumer5020\ZohoBooks\Facades\ZohoBooksFacade;
use Sumer5020\ZohoBooks\Tests\TestCase;

class ContactUnitTest extends TestCase
{
    /**
     * @return void
     */
    public function testCreateContact(){
        $accessToken = ZohoBooksFacade::authentications()->createAccessToken();
        $organization_id = '';
        $contactDto = new ContactDto([]);

        $response = ZohoBooksFacade::contacts()->create($accessToken, $organization_id, $contactDto);

        $this->assertIsArray($response);
        $this->assertEquals(0, $response['code']);
    }

    public function testUpdateContact(){
        $accessToken = ZohoBooksFacade::authentications()->createAccessToken();
        $organization_id = '';
        $contactDto = new ContactDto([]);

        $response = ZohoBooksFacade::contacts()->create($accessToken, $organization_id, $contactDto);

        $this->assertIsArray($response);
        $this->assertEquals(0, $response['code']);
    }
}