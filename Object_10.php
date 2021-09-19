<?php
class Cook //повар
{ // атрибуты
    public $foodstuffs;
    public $tableware;
    public $kitchenStove;
    public $orders;
}

$cook = new Cook(); //объект - повар

$cook->foodstuffs = 'theres or not';
$cook->tableware = 'busy or not';
$cook->kitchenStove = 'work or not';
$cook->orders = 'complete or not';

function acceptOrder () 
{
    //повар принимает заказ
}
function giveOrder ()
{
    //повар отдаёт заказ официанту
}function  cook ()
{
    //повар готовит заказанную еду
}

/*
function _construct()
{
   $this->foodstuffs = $fs;
   $this->tableware = $tw;
   $this->kitchenStove = $ks;
   $this->orders = $orders;
}
$cook = new Cook ('theres','busy','not work','complete');

(Жизненный цикл:)
    $cook->acceptOrder ()
    $cook->cook ()
    $cook->giveOrder ()
    $cook->acceptOrder ()

 */