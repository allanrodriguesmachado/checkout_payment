<?php

namespace App\Providers;

class StripePaymentProviders
{
    public function charge(string $email, int $amount): string
    {
        return "Payment success {$email} R$ {$amount}";
    }
}