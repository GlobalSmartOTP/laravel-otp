<?php

namespace GlobalSmartOTP\LaravelOTP;

use GlobalSmartOTP\Api\OTPHandler;

class LaravelOTP
{
    /**
     * @param string $mobile
     * @param string $templateID
     * @return string
     */
    public static function send(string $mobile, string $templateID = ''): string
    {
        $apiKey = config("laravel-otp.apiKey", "");
        $templateID = $templateID ?: config("laravel-otp.templateID", "");
        $sendMethod = "by" . config("laravel-otp.sendMethod", "sms");
        return OTPHandler::{$sendMethod}($apiKey, $mobile, (int)$templateID);
    }

    /**
     * @param string $mobile
     * @param string $otp
     * @return boolean
     */
    public static function verify(string $mobile, string $otp): bool
    {
        $apiKey = config("laravel-otp.apiKey", "");
        return OTPHandler::isVerify($apiKey, $mobile, $otp);
    }

    /**
     * @param string $referenceID
     * @return array
     */
    public static function status(string $referenceID): array
    {
        $apiKey = config("laravel-otp.apiKey", "");
        $status = OTPHandler::checkStatus($apiKey, $referenceID);
        return [
            'status' => $status->getOTPStatus(),
            'verified' => $status->isOTPVerified(),
            'method' => $status->getOTPMethod()
        ];
    }
}
