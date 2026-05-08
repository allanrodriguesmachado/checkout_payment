<?php

namespace App\Providers;

use App\Utils\Https;

class StripePaymentProviders implements interfaces\PaymentProviderContract
{
    public function __construct(Https $https)
    {
    }

    public function charge(string $email, string $amount): string
    {
        return "Success Payment {$email} for amount {$amount}";
    }
}
