<?php
class Lamp
    {   //атрибуты
        public $LEDs;  
        public $switch;


        public function setOn(string $on)
        {
            //лампа вкл.
            $this->switch = $on;
        }  
        public function setOff(string $off)
        {
            //лампа выкл.
            $this->switch = $off;
        }
        public function setLighting(string $light)
        {
            //лампа светит
            $this->LEDs = $light;
        }

        public function getOn()       { return $this->switch; }
        public function getOff()      { return $this->switch; }
        public function getLighting() { return $this->LEDs; }
        
        /*
        function __construct(string $on = ' включена ', string $off = ' -- ',string $light = ' Светит! ')
        {
            $this->switch = $on;
            $this->switch = $off;
            $this->LEDs = $light;
        }

        function __destruct() {echo 'Object delete!';}
        */
    }
    
    //$lamp = new Lamp('yes','--','light');
    $lamp = new Lamp();

    $lamp->setOn('включена');
    $lamp->setOff('выключена');
    $lamp->setLighting('светит!');
    
    echo 'С 7:00 РМ. до 6:00 АМ. лампа '.$lamp->getOn().'<br>';
    echo 'Лампа хорошо '.$lamp->getLighting();
   

 