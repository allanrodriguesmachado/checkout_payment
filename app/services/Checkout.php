<?php

namespace App\services;

use App\Providers\StripePaymentProviders;

class Checkout
{
    public  StripePaymentProviders $stripePaymentProviders;

    public function __construct(
        public string $email,
        public int $amount
    )
    {
        $this->stripePaymentProviders = new StripePaymentProviders();
    }

    public function process(): string
    {
        return $this->stripePaymentProviders->charge($this->email, number_format($this->amount, 2, '.', ''));
    }


}