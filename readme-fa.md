<div dir=rtl>

![gsOTP](logo.png)

# لاراول OTP

![English](readme.md)

ارسال OTP برای رمز یکبار مصرف و کد تایید شماره موبایل از کانال‌های مختلف پیام‌کوتاه، پیام صوتی، پیام‌رسان‌ها و حالت هیبریدی هوشمند.
- کدنویسی آسان جهت ارتباط سایت/اپلیکیشن شما با gsOTP
- بدون نیاز به قرارداد و خرید خط پیامک و خط تلفن
- ارسال از خطوط خدماتی با اولویت ارسال بالا

با استفاده از این پکیج شما می‌توانید براحتی در پروژه لاراولی خودتون، ارسال OTP رو انجام بدین.

## نصب و راه‌اندازی

با استفاده از Composer

<div dir=ltr>

``` bash
$ composer require globalsmartotp/laravel-otp

#Or if using Laravel Sail
$ sail composer require globalsmartotp/laravel-otp
```
</div>


انتشار فایل‌های پکیج
<div dir=ltr>

``` bash
$ php artisan vendor:publish --tag=laravel-otp.config

#Or if using Laravel Sail
$ sail artisan vendor:publish --tag=laravel-otp.config
```
</div>

## نحوه استفاده
### دریافت ApiKey
برای دریافت `apiKey` باید ابتدا در سایت [gsOTP.com](https://gsotp.com) ثبت نام کنید و از طریق پنل کاربری `apiKey` را دریافت کنید

### تنظیمات
لطفا environment های ذیل رو به فایل  `.env` اضافه کنید

<div dir=ltr>

```dotenv
GS_OTP_API_KEY=''
GS_OTP_SEND_METHOD=sms
GS_OTP_TEMPLATE_ID=3
```
</div>

### ارسال OTP

<div dir=ltr>

```php
$referenceID = LaravelOTP::send($mobile);
```
</div>

### وضعیت OTP
<div dir=ltr>

```php
$status = LaravelOTP::status($referenceID);
```
</div>

### تایید OTP

<div dir=ltr>

```php
$verify = LaravelOTP::verify($mobile, $otp);
```
</div>

</div>