# LaravelOTP

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This package allows you to connect to gsOTP.com server from your laravel application.

## Installation

Via Composer

``` bash
$ composer require globalsmartotp/laravel-otp
```

Publish
``` bash
$ php artisan vendor:publish --provider=GlobalSmartOTP\LaravelOTP\LaravelOTPServiceProvider
```

## Usage
### ApiKey
Please register on [gsOTP.com](https://gsotp.com) and get `apiKey`
### Environment
Please add environment on `.env` file
```dotenv
GS_OTP_API_KEY=''
GS_OTP_SEND_METHOD=sms
GS_OTP_TEMPLATE_ID=3
```

### Send OTP
```php
$referenceID = LaravelOTP::send($mobile);
```
### Status
```php
$status = LaravelOTP::status($referenceID);
```

### Verify
```php
$verify = LaravelOTP::verify($mobile, $otp);
```

## License

MIT.

[ico-version]: https://img.shields.io/packagist/v/globalsmartotp/laravel-otp.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/globalsmartotp/laravel-otp.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/globalsmartotp/laravel-otp
[link-downloads]: https://packagist.org/packages/globalsmartotp/laravel-otp