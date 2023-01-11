<?php

namespace App\Services;

/**
 * Class SettingService
 * @package App\Services
 */
class SettingService
{
    public static function general()
    {
        $general = [
            'app_name' => 'input',
            'app_url' => 'input',
            'app_environment' => 'input',
            'app_debug' => 'input',
            'currency_code' => 'input',
            'currency_sign' => 'input',
        ];

        $payment = [
            'STRIPE_KEY' => config('services.stripe.public_key'),
            'STRIPE_SECRET' => config('services.stripe.secret_key'),
            'PAYPAL_MODE' => config('services.paypal.mode'),
            'PAYPAL_SANDBOX_CLIENT_ID' => config('services.paypal.sandbox_client_id'),
            'PAYPAL_SANDBOX_CLIENT_SECRET' => config('services.paypal.sandbox_client_secret'),
            'PAYPAL_LIVE_CLIENT_ID' => config('services.paypal.live_client_id'),
            'PAYPAL_LIVE_CLIENT_SECRET' => config('services.paypal.live_client_secret'),
        ];

        $social = [
            'GOOGLE_CLIENT_ID' => config('services.google.client_id'),
            'GOOGLE_CLIENT_SECRET' => config('services.google.client_secret'),
            'FACEBOOK_APP_ID' => config('services.facebook.client_id'),
            'FACEBOOK_APP_SECRET' => config('services.facebook.client_secret'),
            'RECAPTCHA_SITE_KEY' => config('services.recaptcha.site_key'),
            'RECAPTCHA_SECRET_KEY' => config('services.recaptcha.secret_key'),
        ];

        $email = [
            'MAIL_MAILER' => config('mail.default'),
            'MAIL_HOST' => config('mail.mailers.smtp.host'),
            'MAIL_PORT' => config('mail.mailers.smtp.port'),
            'MAIL_USERNAME' => config('mail.mailers.smtp.username'),
            'MAIL_PASSWORD' => config('mail.mailers.smtp.password'),
            'MAIL_ENCRYPTION' => config('mail.mailers.smtp.encryption'),
            'MAIL_FROM_ADDRESS' => config('mail.from.address'),
        ];

        return [
            'general' => $general,
            'payment' => $payment,
            'social' => $social,
            'email' => $email,
        ];
    }
}
