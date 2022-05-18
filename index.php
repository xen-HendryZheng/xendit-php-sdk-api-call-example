<?php

/**
 * InvoiceExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Hendry <hendry@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('API_KEY HERE');

$params = ['external_id' => 'demo_147580196270',
    'payer_email' => 'sample_email@xendit.co',
    'description' => 'Trip to Bali',
    'amount' => 32000
];

$createInvoice = \Xendit\Invoice::create($params);
print_r($createInvoice);

$id = $createInvoice['id'];

$getInvoice = \Xendit\Invoice::retrieve($id);
print_r($getInvoice);

