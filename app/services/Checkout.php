<?php

namespace App\services;

use App\Providers\StripePaymentProviders;

class Checkout
{
    public function __construct(
        public string $email,
        public string $amount
    )
    {

    }

    public function process(): string
    {
        $paymentProvider = new StripePaymentProviders();
        return $paymentProvider->charge($this->email, number_format($this->amount, 2, ",", "."));
    }
}