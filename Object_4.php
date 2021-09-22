<?php
class Music_Column 
{ //атрибуты
    public $buttonOn;
    public $buttonOff;
    public $bluetoothOn;
    public $bluetoothOff;
    public $playMusic;
    public $stopMusic;

    public function set_turnOn($on)
    {
       //включить колонку
       $this->buttonOn = $on;
    }
    public function set_turnOff($off)
    {
       //выключить колонку
       $this->buttonOff = $off;
    }
    public function set_connect($connect)
    {
       //присоединиться по беспроводному соединению
       $this->bluetoothOn = $connect;
    }
    public function set_disconnect($disconnect)
    {
       //разорвать соединение с устройством
       $this->bluetoothOff = $disconnect;
    }
    public function set_playMusic($play)
    {
       //проигрывать песни
       $this->playMusic = $play;
    }
    public function set_turnOffTheMusic($stop)
    {
       //остановить музыку
       $this->stopMusic = $stop;
    }
  
    public function get_turnOn()  { return $this->buttonOn; }
    public function get_turnOff() { return $this->buttonOff; }
    public function get_connect() { return $this->bluetoothOn; }
    public function get_disconnect() { return $this->bluetoothOff; }
    public function get_playMusic()  { return $this->playMusic;} 
    public function get_turnOffTheMusic() { return $this->stopMusic; }
/*
    function __construct($on = '',$off='выключена',$connect='',$disconnect='разорвано',$play = '',$stop = 'не проигрывается')
    {
        $this->buttonOn = $on;
        $this->buttonOff = $off;
        $this->bluetoothOn = $connect;
        $this->bluetoothOff = $disconnect;
        $this->playMusic = $play;
        $this->stopMusic = $stop;
    }
     //function __destruct() {echo 'Object delete!';}
 */
}

$musCol = new Music_Column();  // объект-музыкальная колонка

$musCol->set_turnOn('включена');
$musCol->set_turnOff('--'); 
$musCol->set_connect('установлено');       //соединение уст
$musCol->set_disconnect('--');    //соединение разорвано
$musCol->set_playMusic('проигрывается');
$musCol->set_turnOffTheMusic('--');

echo 'Колонка '.$musCol->get_turnOn().'<br>';
echo '        '.$musCol->get_turnOff().'<br>';
echo 'Соединение  '.$musCol-> get_connect().'<br>';
echo '            '.$musCol->get_disconnect().'<br>';
echo 'Музыка '.$musCol->get_playMusic().'<br>';
echo '       '.$musCol->get_turnOffTheMusic().'<br>';
