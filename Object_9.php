<?php
class Lungs //лёгкие человека
{  // атрибуты
    public $bubbles;
    public $respiratoryTract;
    public $oxygen;
    public $carbonDioxide ;

    function set_get ($oxy)
    {
        //легкие получают кислород
        $this->oxygen = $oxy;
    }
    function set_returnn ($retCD)
    {
        //мы выдыхаем(возвращаем) углекислый газ
        $this->carbonDioxide = $retCD; 
    }
    function set_saturate ($respSaturate)
    {
        //насыщение пузырьков в легких кислородом
        $this->respiratoryTract = $respSaturate;
    }
    function set_receive ($bublGEt)
    {
        //легкие принимают от пузырьков углекислый газ
        $this->bubbles = $bublGEt;
    }

    function get_get () { return $this->oxygen;}
    function get_returnn () { return $this->carbonDioxide;}
    function get_saturate () { return $this->respiratoryTract;}
    function get_receive() { return $this->bubbles;}
/*
    function __construct($oxy,$retCD , $respSaturate,$bublGEt)
    {
        $this->oxygen = $oxy; 
        $this->carbonDioxide = $retCD;
        $this->respiratoryTract = $respSaturate;
        $this->bubbles = $bublGEt;
    }
    //function __destruct() {echo 'Object delete!';}
*/
} 

$lungs = new Lungs(); // объект-легкие

$lungs->set_get('получают');
$lungs->set_saturate('насыщаются');
$lungs->set_receive('принимают');
$lungs->set_returnn('возвращаем');

echo 'Легкие человека '.$lungs->get_get().(' кислород<br>');
echo 'Дальше пузырьки в легких '.$lungs->get_saturate().(' кислородом, ');
echo 'а легкие '.$lungs->get_receive().(' углекислый газ..');
echo 'А потом мы '.$lungs-> get_returnn ().(' его в окружающую среду.');


