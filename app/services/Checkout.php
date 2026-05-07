<?php

namespace App\services;
use App\Providers\StripePaymentProviders;

class Checkout
{
    public function __invoke(): string
    {
        echo "Hello world";
    }
//    public function __construct(
//        public string $email,
//        public int    $amount
//    )
//    {
//    }
//
//    public function processPayment(): void
//    {
//        $stripPayment = new StripePaymentProviders();
//        $stripPayment->charge($this->email, $this->amount);
//    }
}