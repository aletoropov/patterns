<?php

include 'Payment.php';

class Online implements Payment
{
    public function pay($sum)
    {
        echo 'Оплата Online';
    }
}