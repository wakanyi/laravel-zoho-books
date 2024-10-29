<?php

namespace Sumer5020\ZohoBooks\Tests\Unit;

use Sumer5020\ZohoBooks\DTOs\Contact\ContactFiltersDto;
use Sumer5020\ZohoBooks\DTOs\Contact\CreateContactDto;
use Sumer5020\ZohoBooks\DTOs\Contact\UpdateContactDto;
use Sumer5020\ZohoBooks\DTOs\PaginationDto;
use Sumer5020\ZohoBooks\Facades\ZohoBooksFacade;
use Sumer5020\ZohoBooks\Tests\TestCase;

class ContactUnitTest extends TestCase
{
    /**
     * @return void
     */
    public function testCreateContact()
    {
        $accessToken = ZohoBooksFacade::authentications()->createAccessToken();
        $organization_id = '';
        $createContactDto = new CreateContactDto([]);

        $response = ZohoBooksFacade::contacts()->create($accessToken, $organization_id, $createContactDto);

        $this->assertIsArray($response);
        $this->assertEquals(0, $response['code']);
    }

    /**
     * @return void
     */
    public function testUpdateContact()
    {
        $accessToken = ZohoBooksFacade::authentications()->createAccessToken();
        $organization_id = '';
        $updateContactDto = new UpdateContactDto([]);

        $response = ZohoBooksFacade::contacts()->create($accessToken, $organization_id, $updateContactDto);

        $this->assertIsArray($response);
        $this->assertEquals(0, $response['code']);
    }

    /**
     * @return void
     */
    public function testListContact()
    {
        $accessToken = ZohoBooksFacade::authentications()->createAccessToken();
        $organization_id = '';

        $paginationDto = new PaginationDto([
            'page' => 1,
            'per_page' => 10
        ]);
        $contactFiltersDto = new ContactFiltersDto([]);

        $response = ZohoBooksFacade::contacts()->list($accessToken, $organization_id, $paginationDto, $contactFiltersDto);

        $this->assertIsArray($response);
        $this->assertEquals(0, $response['code']);
    }
}