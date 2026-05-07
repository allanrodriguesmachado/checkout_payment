<?php

namespace App\services;

use App\Providers\StripePaymentProviders;

class Checkout
{
    public  StripePaymentProviders $stripePaymentProviders;

    public function __construct(
        public string $email,
        public string $amount
    )
    {
        $this->stripePaymentProviders = new StripePaymentProviders();
    }

    public function process(): string
    {
        return $this->stripePaymentProviders->charge($this->email, $this->formatedNumber());
    }

    private function formatedNumber(): string
    {
        return number_format($this->amount, 2, ',', '.');
    }
}