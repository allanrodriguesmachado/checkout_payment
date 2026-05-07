#!/usr/bin/env php
<?php
require __DIR__ . '/../vendor/autoload.php';

use App\services\Checkout;

$checkout = new Checkout('allan@php.com', 500);
$checkout->process();
return $checkout;