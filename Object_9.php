<?php
class Lungs //лёгкие человека
{  // атрибуты
    public $bubbles;
    public $respiratoryTract;
    public $oxygen;
    public $carbonDioxide ;
} 

$lungs = new Lungs(); // объект-легкие

$lungs->bubbles = 'damage or not';
$lungs->respiratoryTract = 'damage or not';
$lungs->oxygen = 'supplied or not';
$lungs->arbonDioxide = 'return or not';

function get ()
{
    //легкие получают кислород
}
function returnn ()
{
    //мы выдыхаем(возвращаем) углекислый газ
}
function saturate ()
{
    //насыщение пузырьков в легких кислородом
}
function receive ()
{
    //легкие принимают от пузырьков углекислый газ
}

/* 
function _construct()
{
    $this->bubbles = bubbles;
    $this->respiratoryTract = respTract;
    $this->oxygen = oxy;
    $this->carbonDioxide = carbonDioxide;
}
$lungs = new Lungs('damage','not','supplied','return');

(Жизненный цикл:)
    $lungs->get ();
    $lungs->saturate ();
    $lungs->receive ();
    $lungs->returnn ();
    $lungs->get ();

*/
