<?php

namespace App\Providers;

class StripePaymentProviders
{
    public function charge(string $email, string $amount): string
    {
        return "Success Payment {$email} for amount {$amount}";
    }
}