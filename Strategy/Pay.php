<?php

include 'Offline.php';
include 'Online.php';

class Pay
{
    public function cardPay($sum) 
    {
        if ($sum <= 5000) {
            $payment = new Offline();
        }

        if ($sum > 5000) {
            $payment = new Online();
        }

        $payment->pay($sum);
    }
}

$shop = new Pay();
$shop->cardPay(400);