<?php

/**
 * Шаблон - Стратегия.
 * 
 * @author Alexandr Toropov <toropovsite@yandex.ru>
 */
interface Payment 
{
    public function pay($sum);
}