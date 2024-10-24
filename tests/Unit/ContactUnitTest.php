<?php

namespace Sumer5020\ZohoBooks\Tests\Unit;

use Sumer5020\ZohoBooks\DTOs\Arguments\ContactDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;
use Sumer5020\ZohoBooks\DTOs\QueryParameters\ContactFiltersQpDto;
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

    /**
     * @return void
     */
    public function testUpdateContact(){
        $accessToken = ZohoBooksFacade::authentications()->createAccessToken();
        $organization_id = '';
        $contactDto = new ContactDto([]);

        $response = ZohoBooksFacade::contacts()->create($accessToken, $organization_id, $contactDto);

        $this->assertIsArray($response);
        $this->assertEquals(0, $response['code']);
    }

    /**
     * @return void
     */
    public function testListContact(){
        $accessToken = ZohoBooksFacade::authentications()->createAccessToken();
        $organization_id = '';

        $paginationDto = new PaginationDto([
            'page' => 1,
            'per_page' => 10
        ]);
        $contactFiltersDto = new ContactFiltersQpDto([]);

        $response = ZohoBooksFacade::contacts()->list($accessToken, $organization_id, $paginationDto, $contactFiltersDto);

        $this->assertIsArray($response);
        $this->assertEquals(0, $response['code']);
    }
}