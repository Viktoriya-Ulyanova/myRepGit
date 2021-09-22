<?php
class Battery 
{ // атрибуты
    public $charge;

    public function set_chargeUp ($chUp)
    { 
        //аккумулятор заряжается
        $this->charge = $chUp;
    }
    public function set_discharge ($disCh)
    { 
        //в процессе работы аккумулятор разряжается
        $this->charge = $disCh;
    }

    public function get_chargeUp() { return $this->charge; }
    public function get_discharge() { return $this->charge; }
/*
    function __construct($chUp = 'работает',$disCh = 'заканчивается')
    {
        $this->charge = $chUp;
        $this->charge = $disCh;
    }
     //function __destruct() {echo 'Object delete!';}
 */
}

 
$battary = new Battery (); // объект - аккумулятор 

$battary->set_chargeUp('заряжается');
$battary->set_discharge('разряжается');

echo 'Если аккумулятор не '.$battary->get_chargeUp().(', значит есть проблемы<br>');
echo 'Если он быстро '.$battary->get_discharge().(', то тоже грустно');
