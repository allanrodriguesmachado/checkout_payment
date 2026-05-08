#!/usr/bin/env php
<?php
require __DIR__ . '/../vendor/autoload.php';

use App\services\Checkout;

$checkout = new Checkout('allan@php.com', "2000") ;
echo $checkout->process(new \App\Providers\StripePaymentProviders(new \App\Utils\Https())) . PHP_EOL;;