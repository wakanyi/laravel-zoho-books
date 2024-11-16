<div align="center">

![Laravel Zoho Books Package Banner](./images/laravel-zoho-books.png)
![License: MIT](https://img.shields.io/badge/License-MIT-blueviolet.svg)
![Repository Type](https://img.shields.io/badge/Type-package-orange)
![Latest Version](https://img.shields.io/packagist/v/sumer5020/laravel-zoho-books?color=blue&label=Version)
![Packagist Downloads](https://img.shields.io/packagist/dt/sumer5020/laravel-zoho-books?color=darkslategrey&label=Downloads)
![Stand With Palestine 🇵🇸](https://raw.githubusercontent.com/TheBSD/StandWithPalestine/main/badges/StandWithPalestine.svg)

[English](README.md) | [العربية](README.ar.md)

</div>

# Laravel Zoho Books

This Laravel package simplifies integration with Zoho Books Accounting System, streamlining API interactions for easier
accounting management.

## Requirements

| Software   | Version |
|:-----------|:--------|
| `php`      | `^8.2`  |
| `Composer` | `^2.4`  |
| `Laravel`  | `^11.0` |

## Features

- [x] Authentication end points
- [x] Contact end points
- [x] Contact Person end points
- [x] Estimate end points
- [x] Sales Order end points

<details><summary>Coming soon features ✨</summary>

- [ ] Bank Account end points
- [ ] Bank Rule end points
- [ ] Bank Transaction end points
- [ ] Base Currency Adjustment end points
- [ ] Bill end points
- [ ] Chart Of Account end points
- [ ] Credit Note end points
- [ ] Currency end points
- [ ] Customer Payment end points
- [ ] Custom Module end points
- [ ] Expense end points
- [ ] Invoice end points
- [ ] Item end points
- [ ] Journal end points
- [ ] Opening Balance end points
- [ ] Project end points
- [ ] Purchase Order end points
- [ ] Recurring Bill end points
- [ ] Recurring Expense end points
- [ ] Recurring Invoice end points
- [ ] Retainer Invoice end points
- [ ] Task end points
- [ ] Tax end points
- [ ] Time Entry end points
- [ ] User end points
- [ ] Vendor Credit end points
- [ ] Vendor Payment end points
- [ ] Zoho Crm Integration end points

</details>

## Installation

Install the package by using composer:

```sh
composer require sumer5020/laravel-zoho-books
```

## Publish the assets

Publish all assets

```sh
php artisan vendor:publish --provider=Sumer5020\ZohoBooks\ZohoBooksServiceProvider
```

Publish the configuration only:

```sh
php artisan vendor:publish --tag=zohoBooks.config
```

Publish the migrations only:

```sh
php artisan vendor:publish --tag=zohoBooks.migrations

# Migrate the database
php artisan migrate
```

Add this into your `.env` and add your details that come from `https://accounts.zoho.com/developerconsole`

```env
ZOHO_BOOKS_CLIENT_ID=
ZOHO_BOOKS_CLIENT_SECRET=
ZOHO_BOOKS_ACCESS_CODE=
ZOHO_BOOKS_REDIRECT_URI=
```

After that Run `php artisan zoho:init` command to initialize your credentials and insert `token`, `refresh_token`
and `expires_in` into `zoho_tokens` table.

> [!WARNING]
> We used `Self Client` to generate server-to-server access code. you must run the artisan command before the access
> code expired.

> [!NOTE]
> The `expires_in` is for the `token`, The `refresh_token` is lifetime until you revoke it.

> [!NOTE]
> In order to reduce the number of database requests and improve the performance you need to cache this token
> credentials with expire time equals the token expire time.

## Usage

### Setup 🚀

After publish

Add the `ZohoBooksFacade` in your controller or any class you need to use the package functionality on it

```php
use Sumer5020\ZohoBooks\Facades\ZohoBooksFacade;
# or
use ZohoBooks;
```

### Authentication

#### Refresh access token

```php
$token = ZohoBooksFacade::authentications()->refreshAccessToken($refresh_token);
```

#### Revoke access token

```php
$status = ZohoBooksFacade::authentications()->revokeRefreshAccessToken($access_token, $refresh_token);
```

## License

The MIT License (MIT). Please see [MIT license](LICENSE.md) File for more information.

<div align="right">
</div>
