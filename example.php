<?php
require "vendor/autoload.php";

use Ditcoin\Wallet;

$wallet = new Ditcoin\Wallet();

$destination1 = (object) [
    'amount' => '0.1',
    'address' => '9RUGwFu3WGh3wAkeWWzMNiQXiW9ChYRpH974mDdrGcjpEcpPrz143oc9sV1W8YyAUwCztbfxt9usZSMVnSBwPxCaDXzhYWz'
];

$options = [
    'destinations' => $destination1
];

echo $wallet->transfer($options);

