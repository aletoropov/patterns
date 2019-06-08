<?php
class Singleton
{
    static private $self = null;

    /**
     * Приватный конструктор для запрета создания объекта класса.
     */
    private function __construct() {}
    
    /**
     * Создаем объект класса и возвращаем его.
     *
     * @return object
     */
    public static function getInstance()
    {
        if(self::$self == null) {
            self::$self = new Singleton();
        }
        return self::$self;
    }    
    
    /**
    * Пустой приватный метод clone для запрета клонирования объекта
    */
    private function __clone() {}
}