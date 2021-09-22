<?php
class Robot
{ // атрибуты
    public $hands;
    public $part;
    public $rreturn;
    public $attach;
/*
    public function set_takeAPart ($part)
    {
        //взять часть механизма, которую надо прикрепить
        $this->part = $part;
    }
    function set_returnn ($rret)
    {
        //вернуться в исходное положение
        $this->rreturn = $rret;
    }
    function set_attachAPart ($attach)
    {
        //закрепить эту часть на механизме
        $this->attach = $attach;
    }
  */
    public function get_takeAPart()   { return $this->part; }
    public function get_returnn()     { return $this->rreturn; }
    public function get_attachAPart() { return $this->attach; }
   
    function __construct($part = 'не работает',$attach = 'поэтому ничего не прикрепляет к ',$rret = ' не возвращается ')
    {
        $this->part = $part;
        $this->attach = $attach;
        $this->rreturn = $rret;
    }

    //function __destruct() {echo 'Object delete!';}
}

$robo = new Robot(); // объект - робот
/*
$robo->set_takeAPart('берёт часть');
$robo->set_attachAPart('прикрепляет к');
$robo->set_returnn('возвращается ');
*/
echo 'Робот '.$robo->get_takeAPart().(', ');
echo  $robo->get_attachAPart().(' механизму, и');
echo ''.$robo->get_returnn() .('в начальное состояние.');