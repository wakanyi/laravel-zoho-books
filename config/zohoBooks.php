<?php

use Sumer5020\ZohoBooks\Enums\{DataCenterEnum, PlanEnum, ResponseFormatEnum};

return [

  /*
  |--------------------------------------------------------------------------
  | Zoho Books API URL
  |--------------------------------------------------------------------------
  |
  | Note: If your organization use different data center, chose your data center from DataCenter enum
  |
  */

  'url' => env('ZOHO_BOOKS_API_URL', DataCenterEnum::UnitedStates->url() . "v3"),

  'auth_url' => env('ZOHO_BOOKS_AUTH_URL', DataCenterEnum::UnitedStates->oAuthUrl()),

  /*
  |--------------------------------------------------------------------------
  | Zoho Books API Credentials | https://accounts.zoho.com/developerconsole
  |--------------------------------------------------------------------------
  |
  | Note: I used Self Client to generate server-to-server access code with full access scope [ZohoBooks.fullaccess.all]
  |       We can also be more specific like [ZohoBooks.vendorpayments.ALL,ZohoBooks.settings.ALL,etc...]
  |       Or very specific like [ZohoBooks.invoices.CREATE,ZohoBooks.invoices.READ,etc...]
  |
  */

  'access_code' => env('ZOHO_BOOKS_ACCESS_CODE', ''),

  'client_id' => env('ZOHO_BOOKS_CLIENT_ID', ''),

  'client_secret' => env('ZOHO_BOOKS_CLIENT_SECRET', ''),

  /*
  |--------------------------------------------------------------------------
  | Redirect URI
  |--------------------------------------------------------------------------
  |
  | Note: Most be the same value that set in zoho console
  |
  */
  'redirect_uri' => env('ZOHO_BOOKS_REDIRECT_URI', ''),

  /*
  |--------------------------------------------------------------------------
  | Zoho Books API Call Limit
  |--------------------------------------------------------------------------
  |
  | Total Call Limit per day plan [The Call Limit varies based on the plan]
  | Note: You can make 100 requests per minute for an organization
  |
  */

  'call_limit_plan' => env('ZOHO_BOOKS_CALL_LIMIT_PLAN', PlanEnum::FREE->callLimit()),

  /*
  |--------------------------------------------------------------------------
  | Zoho Books API Concurrent Limit
  |--------------------------------------------------------------------------
  |
  | Concurrent Rate Limiter [The concurrent rate limit varies based on the plan]
  | Note: You can make 100 requests per minute for an organization
  | 
  */

  'concurrent_limit_plan' => env('ZOHO_BOOKS_CONCURRENT_LIMIT_PLAN', PlanEnum::FREE->concurrentLimit()),

  /*
  |--------------------------------------------------------------------------
  | Zoho Books Response Format
  |--------------------------------------------------------------------------
  |
  | Note: Responses will be returned in support json, csv and pdf formats.
  |
  */

  'response_format' => env('ZOHO_BOOKS_RESPONSE_FORMAT', ResponseFormatEnum::JSON),
];
