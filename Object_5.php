<?php
class vehicle_Operation_System
{  //атрибуты
 
    public $engineOn;
    public $engineOff;
    public $gasAndBrakePedals;
    public $undercarriage;
    public $go;
    public $stop;
/*
    public function set_startEngine ($start)
    {
        //включить двигатель ключом зажигания
        $this->engineOn = $start;
    }
    public function set_turnOffEngine ($engineOff)
    {
        //выключить двигатель
        $this->engineOff = $engineOff;
    }
    public function set_activationUndercarriage ($undercarriage)
    {
        //активируется ходовая часть авто
        $this->undercarriage = $undercarriage;
    }
    public function set_go ($go)
    {
        //ехать
        $this->go = $go;
    }
    public function set_stop ($stop)
    {
        //остановиться
        $this->stop= $stop;
    }
*/
    public function get_startEngine() { return $this->engineOn; }
    public function get_turnOffEngine() { return $this->engineOff; }
    public function get_activationUndercarriage() { return $this->undercarriage; }
    public function get_go() { return $this->go; }
    public function get_stop() { return $this->stop; }

    
    function __construct($start = '--',$engineOff = 'не работает',$undercarriage = 'остановлена',$go = '--',$stop = 'не двигается')
    {
        $this->engineOn = $start;
        $this->engineOff = $engineOff;
        $this->undercarriage = $undercarriage;
        $this->go = $go;
        $this->stop= $stop;
    }
    //function __destruct() {echo 'Object delete!';}
    
}

$VOS = new vehicle_Operation_System(); //объект-система хода авто
/*
$VOS->set_startEngine('в активном состоянии');
$VOS->set_turnOffEngine('--');
$VOS->set_activationUndercarriage('активна');
$VOS->set_go('перемещается');
$VOS->set_stop('--');
*/
echo 'Двигатель '.$VOS->get_startEngine().'<br>';
echo 'Автомобиль '.$VOS->get_go().'<br>';
echo 'Ходовая система '.$VOS->get_activationUndercarriage().'<br>';
echo 'Авто '.$VOS->get_stop().'<br>';
echo 'Двигатель '.$VOS->get_turnOffEngine().'<br>';