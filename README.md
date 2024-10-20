# slvler - Ip-api Service

[![tests](https://github.com/slvler/whoami/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/whoami/actions/workflows/tests.yml)
[![Latest Stable Version](https://poser.pugx.org/slvler/whoami/v)](https://packagist.org/packages/slvler/whoami)
[![Latest Unstable Version](https://poser.pugx.org/slvler/whoami/v/unstable)](https://packagist.org/packages/slvler/whoami) 
[![License](https://poser.pugx.org/slvler/whoami/license)](https://packagist.org/packages/slvler/whoami)
[![Total Downloads](https://poser.pugx.org/slvler/whoami/downloads)](https://packagist.org/packages/slvler/whoami)

This package provides a convenient wrapper to the [Ip API](https://ip-api.com/docs)  for Laravel applications.
## Requirements
- PHP 8.0+
- Laravel 10.x | 9.x
## Installation
To install this package tou can use composer:
```bash
composer require slvler/whoami
```
## Usage
### Import the facade in your class.
```php
use Whoami;
```
### send a request to get ip information details
```php
Whoami::get("127.0.0.1")->result();
```
### send a request to filter some details in the ip information
```php
Whoami::get("127.0.0.1")->filter(['status','message','country','zip','query'])->result();
```
### Testing
```bash
composer test
```
## Credits
- [slvler](https://github.com/slvler)
## License
The MIT License (MIT). Please see [License File](https://github.com/slvler/whoami/blob/main/LICENSE.md) for more information.
