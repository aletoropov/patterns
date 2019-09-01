<?php

include 'Payment.php';

class Offline implements Payment
{
    public function pay($sum)
    {
        echo 'Оплата offline';
    }
}