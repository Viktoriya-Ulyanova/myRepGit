<?php
class Battery 
{ // атрибуты
    public $volume;
}
 
$battary = new Battery (); // объект - аккумулятор 

$battary->volume = '4200';

function chargeUp ()
{ 
    //аккумулятор заряжается
}
function discharge ()
{ 
    //в процессе работы аккумулятор разряжается
}

/*
function _construct($vol)
{
    $this->volume = $vol;
}
$battary = new Robot (4200);

(Жизненный цикл:)
    $battary->chargeUp ();
    $battary->discharge ();
    $battary->chargeUp ();
*/ 
