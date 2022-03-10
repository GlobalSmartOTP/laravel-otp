<?php

return [
    'apiKey' => env('GS_OTP_API_KEY', ''),
    'sendMethod' => env('GS_OTP_SEND_METHOD', 'sms'),
    'templateID' => env('GS_OTP_TEMPLATE_ID', 3),
];
