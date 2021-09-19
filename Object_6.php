<?php
class Ant // муравей
{ // атрибуты
    public $paws;
    public $eyes;
    public $memory;
    public $trail;
    public $anthill;
}

$ant = new Ant();

$ant->paws = 'number'; //количество лап
$ant->eyes = 'presence';
$ant->memory = 'use/not use';//? 
$ant->trail = 'long/short';
$ant->anthill = 'new/old';

function getOutOfAnthill () 
{
    //выйти из муравейника
}
function goBackToAnthill ()
{
    //вернуться в муравейник
}
function followTrail ()
{
    //идти по тропе
}
function rememberTrailBack ()
{
    //вспомнить путь назад
}
function seeFood ()
{
    //увидеть и забрать еду
}

/*
// function _construct($paws,$eyes,$memory,$trail,$anthill)
{
    $this->paws = $paws;
    $this->eyes = $eyes;
    $this->memory = $memory;
    $this->trail = $trail;
    $this->anthill = $anthill;
}

$ant = new Ant(6,yes,no,long,new);

(:)
    $ant->getOutOfAnthill ();
    $ant->followTrail ();
    $ant->seeFood ();
    $ant->rememberTrailBack ();
    $ant->followTrail ();
    $ant->goBackToAnthill ();

*/