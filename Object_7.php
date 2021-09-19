<?php
class Robot
{ // атрибуты
    public $hands;
}

$robo = new Robot(); // объект - робот

$robo->hands = 'work/not work';

function takeAPart ()
{
    //взять часть механизма, которую надо прикрепить
}
function returnn ()
{
    //вернуться в исходное положение
}
function attachAPart ()
{
    //закрепить эту часть на механизме
}
function waitNextMechanism ()
{
    //подождать механизм
}

/*
function _construct ($hands)
{
    $this->hands = $hands;
}
$robo = new Robot('work');

(Жизненный цикл:)
    $robo->waitNextMechanism ();
    $robo->takeAPart ();
    $robo->attachAPart ();
    $robo->returnn ();
    $robo->waitNextMechanism ();
*/
