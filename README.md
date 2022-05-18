# XENDIT PHP SDK API EXAMPLE

This library is the abstraction of Xendit API for access from applications written with PHP.

-   [Documentation](#documentation)
-   [Composer Installation](#composer-installation)
-   [Installing Packages](#installing-packages)
-   [Usage](#usage)

---

## Documentation

For the API documentation, check [Xendit API Reference](https://xendit.github.io/apireference).

## Composer Installation

Install composer on your local machine, check [https://getcomposer.org](https://getcomposer.org/doc/00-intro.md)

### Installing Packages

Before you start to code, run this command to install all of the required packages. Make sure you have `composer` installed in your computer

```bash
composer install
``` 

## Usage

Configure package with your account's secret key obtained from [Xendit Dashboard](https://dashboard.xendit.co/settings/developers#api-keys).

Change [Line 18](https://github.com/xen-HendryZheng/xendit-php-sdk-api-call-example/blob/main/index.php#L18) with your obtained secret key

```php
Xendit::setApiKey('API_KEY HERE');
```

See [example codes](https://github.com/xen-HendryZheng/xendit-php-sdk-api-call-example/blob/main/index.php) for more details.

If you want to see full details about Xendit PHP SDK, check [Xendit PHP-SDK](https://github.com/xendit/xendit-php)


