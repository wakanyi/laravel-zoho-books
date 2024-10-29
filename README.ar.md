<div align="center">

![يانر لارافيل زوهو بوكس](./images/laravel-zoho-books.png)
![الرخصة: MIT](https://img.shields.io/badge/License-MIT-blueviolet.svg)
![نوع المستودع](https://img.shields.io/badge/Type-package-orange)
![أحدث إصدار](https://img.shields.io/packagist/v/sumer5020/laravel-zoho-books?color=blue&label=Version)
![عدد التحميلات](https://img.shields.io/packagist/dt/sumer5020/laravel-zoho-books?color=darkslategrey&label=Downloads)
![🇵🇸 قف بجانب فلسطين](https://raw.githubusercontent.com/TheBSD/StandWithPalestine/main/badges/StandWithPalestine.svg)

[English](README.md) | [العربية](README.ar.md)

</div>

<div dir="rtl" align="right">

# لارافيل زوهو المحاسبية

تقوم هذه الحزمة بتبسيط التكامل مع نظام المحاسبة زوهو بوكس، مما يسهل إدارة التفاعلات مع واجهة برمجة التطبيقات لتبسيط
تمرير عمليات المحاسبة.

## المتطلبات

| الاصدار | البرمجية   |
|:--------|:-----------|
| `^8.2`  | `php`      |
| `^2.4`  | `Composer` |
| `^11.0` | `Laravel`  |

## الميزات

<div dir="ltr" align="left">

- [x] Authentication end points
- [x] Contact end points
- [x] Contact Person end points
- [x] Estimate end points

</div>

<details><summary>الميزات القادمة قريبًا ✨</summary>

<div dir="ltr" align="left">

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
- [ ] Sales Order end points
- [ ] Task end points
- [ ] Tax end points
- [ ] Time Entry end points
- [ ] User end points
- [ ] Vendor Credit end points
- [ ] Vendor Payment end points
- [ ] Zoho Crm Integration end points

</div>

</details>

## التثبيت

قم بتثبيت الحزمة باستخدام Composer:

<div dir="ltr" align="left">

```sh
composer require sumer5020/laravel-zoho-books
```

</div>

## نشر الأصول

نشر جميع الأصول:

<div dir="ltr" align="left">

```sh
php artisan vendor:publish --provider=Sumer5020\ZohoBooks\ZohoBooksServiceProvider
```

</div>

نشر الإعدادات فقط:

<div dir="ltr" align="left">

```sh
php artisan vendor:publish --tag=zohoBooks.config
```

</div>

نشر قواعد البيانات فقط:

<div dir="ltr" align="left">

```sh
php artisan vendor:publish --tag=zohoBooks.migrations

# ترحيل قواعد البيانات
php artisan migrate
```

</div>

أضف التالي إلى ملف .env الخاص بك وأضف بياناتك والتي تم اخذها من `https://accounts.zoho.com/developerconsole`

<div dir="ltr" align="left">

```env
ZOHO_BOOKS_CLIENT_ID=
ZOHO_BOOKS_CLIENT_SECRET=
ZOHO_BOOKS_ACCESS_CODE=
ZOHO_BOOKS_REDIRECT_URI=
```

</div>

بعد ذلك، قم بتشغيل الأمر `php artisan zoho:init` لتفعيل بيانات الاعتماد الخاصة بك
وإدخال `token`, `refresh_token`, `expires_in` الى جدول `zoho_tokens`.

> تنبيه: استخدمنا `Self Client` لإنشاء رمز وصول الخادم إلى الخادم. يجب تشغيل الأمر في موجه الاوامر قبل انتهاء صلاحية رمز
> الوصول.

> ملاحظة: مدة صلاحية `expires_in` هي لـ `token،` بينما `refresh_token` صالح مدى الحياة حتى تقوم بإلغائه.

> ملاحظة: لتقليل عدد الطلبات إلى قاعدة البيانات وتحسين الأداء، يجب عليك تخزين بيانات اعتماد رمز المصادقة مع وقت انتهاء
> يساوي مدة صلاحية الرمز في التخزين مؤقت.

## الاستخدام

### الإعداد 🚀

بعد نشر الاصول أضف `ZohoBooksFacade` في وحدة التحكم الخاصة بك أو أي فئة تحتاج إلى استخدام وظائف الحزمة بها:

<div dir="ltr" align="left">

```php
use Sumer5020\ZohoBooks\Facades\ZohoBooksFacade;
# أو
use ZohoBooks;
```

</div>

### المصادقة

تحديث رمز الوصول

<div dir="ltr" align="left">

```php
$token = ZohoBooksFacade::authentications()->refreshAccessToken($refresh_token);
```

</div>

إلغاء رمز الوصول

<div dir="ltr" align="left">

```php
$token = ZohoBooksFacade::authentications()->refreshAccessToken($refresh_token);
```

</div>

## الرخصة

رخصة MIT. يرجى الاطلاع على ملف [MIT license](LICENSE.md) لمزيد من المعلومات.

</div>