<?php
class Music_Column 
{ //атрибуты
    public $buttonOn;
    public $buttonOff;
    public $buttonUpSound;
    public $buttonDownSound;
    public $buttonStopSong;
    public $buttonNextSong;
    public $buttonPrevSong;
    public $color;
    public $form;
}

$musCol = new Music_Column();  // объект-музыкальная колонка

$musCol->buttonOn = 'on';
$musCol->buttonOff = 'off';
$musCol->buttonUpSound = 'Up';
$musCol->buttonDownSound = 'Down';
$musCol->buttonStopSong = 'Stop';
$musCol->buttonNextSong = 'Next';
$musCol->buttonPrevSong = 'Previous';
$musCol->color = 'dark-blue';
$musCol->form = 'quadrate';

function turnOn ()
{
    //включить колонку
}
function turnOff ()
{
    //выключить колонку
}
function connect ()
{
    //присоединиться по беспроводному соединению
}
function disconnect ()
{
    //разорвать соединение с устройством
}
function playMusic ()
{
    //проигрывать песни
}

function turnOffTheMusic ()
{
    //остановить музыку
}
function useTheButtons ()
{
    //использовать кнопки проигрывания песен и кнопки для звука
}

/*
function _construct($on,$off,$Up,$Down,$Stop,$Next,$Previous,$color,$form)
{
    $this->buttonOn = $on;
    $this->buttonOff = $off;
    $this->buttonUpSound = $Up;
    $this->buttonDownSound = $Down;
    $this->buttonStopSong = $Stop;
    $this->buttonNextSong = $Next;
    $this->buttonPrevSong = $Previous;
    $this->color = $color;
    $this->form = $form;
}
(Жизненный цикл:)
    $musCol->turnOn ();
    $musCol->connect ();
    $musCol->useTheButtons ();
    $musCol->playMusic ();
    $musCol->useTheButtons ();
    $musCol->turnOffTheMusic ();
    $musCol->disconnect ();
    $musCol->turnOff ();
*/ 