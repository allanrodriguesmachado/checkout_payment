<?php

namespace App\services;

use App\Providers\interfaces\PaymentProviderContract;
use App\Providers\StripePaymentProviders;
use App\Utils\Https;

class Checkout
{
    public  StripePaymentProviders $stripePaymentProviders;

    public function __construct(
        public string $email,
        public string $amount
    )
    {
    }

    public function process(PaymentProviderContract $paymentProviderContract): string
    {
        return $paymentProviderContract->charge($this->email, $this->formatedNumber());
    }

    private function formatedNumber(): string
    {
        return number_format($this->amount, 2, ',', '.');
    }
}