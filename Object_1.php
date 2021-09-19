<?php
class Lamp
    {   //атрибуты
        public $LEDs;  
        public $switch;
    }

    $lamp = new Lamp(); //объект-лампа

    $lamp->LEDs = 'type';         //тип лампы, или в кавычках надо писать конкретный тип лампы
    $lamp->switch = 'mode';       //режим лампы (вкл/выкл)
    
    function On()
    {
        //включить лампу
    }
    function Off()
    {
        //выключить лампу
    }
    function Lighting()
    {
        //лампа светит
    }
    /*
    function _construct($leds,$switch)
    {
        $this->LEDs = $leds;
        $this->switch = $switch; 
    }
    $lamp = new Lamp('SDM','on'/'off');


    (Жизненный цикл:)
        $lamp->On();
        $lamp->Lighting();
        $lamp->Off();
    */
