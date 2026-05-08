<?php

namespace App\Providers\interfaces;

use App\Utils\Https;

interface PaymentProviderContract
{
    public function __construct(Https $https);

    public function charge(string $email, string $amount): string;
}