<?php
class vehicle_Operation_System
{  //атрибуты
    public $ignitionKey; 
    public $engine;
    public $gasAndBrakePedals;
    public $undercarriage;
}

$VOS = new vehicle_Operation_System(); //объект-система хода авто

$VOS->ignitionKey = 'on/off';
$VOS->engine = 'on/off';
$VOS->gasAndBrakePedals = 'pressing';
$VOS->undercarriage = 'involved or not';

function startEngine ()
{
    //включить двигатель ключом зажигания
}
    function turnOffEngine ()
{
    //выключить двигатель
}
function switchGears ()
{
    //переключать передачи
}
function usePedals ()
{
    //использовать педали для начала движения
}
function activationUndercarriage ()
{
    //активируется ходовая часть авто
}
function go ()
{
    //ехать
}
function stop ()
{
    //остановиться
}

/*
function _construct()
{
    ...
} 

(Жизненный цикл:)
    $VOS->startEngine ();
    $VOS->switchGears (); 
    $VOS->usePedals (); 
    $VOS->activationUndercarriage ();
    $VOS->go (); 
    $VOS->usePedals ();
    $VOS->stop (); 
    $VOS->switchGears ();
    $VOS->turnOffEngine ();
*/