<?php
class Ant // муравей
{ // атрибуты
    public $OutOfAnthill;
    public $eyes;
    public $memory;
    public $trail;
    public $back;
/*
    public function set_getOutOfAnthill($OutOfAnthill)
    {
        //выйти из муравейника
        $this->OutOfAnthill= $OutOfAnthill;
    }
    public function set_goBackToAnthill ($back)
    {
        //вернуться в муравейник
        $this->back = $back; 
    }
    public function set_followTrail ($trail)
    {
        //идти по тропе
        $this->trail = $trail;
    }
    public function  set_rememberTrailBack($remember)
    {
        //вспомнить путь назад
        $this->memory = $remember;
    }
    public function set_seeFood($see)
    {
        //увидеть и забрать еду
        $this->eyes = $see;
    }
*/
    public function get_getOutOfAnthill() { return $this->OutOfAnthill ;}
    public function get_goBackToAnthill() { return $this-> back;}
    public function get_followTrail()   { return $this-> trail;}
    public function get_rememberTrailBack() { return $this->memory ;}
    public function get_seeFood()       { return $this->eyes;}
    
    function __construct($OutOfAnthill = 'выходит из муравейника', $trail = 'следует тропе,',$see = 'не забирает еду,',$remember = 'не вспоминает путь назад',$back = 'не возвращается')
    {
        $this->OutOfAnthill= $OutOfAnthill;
        $this->trail = $trail;
        $this->eyes = $see;
        $this->memory = $remember;
        $this->back = $back;
    }
    //function __destruct() {echo 'Object delete!';}
}

$ant = new Ant();
/*
$ant->set_getOutOfAnthill('выходит из муравейника');
$ant->set_followTrail('следует тропе,');
$ant->set_seeFood('забирает еду,');
$ant->set_rememberTrailBack('вспоминает путь назад');
$ant->set_goBackToAnthill('возвращается');
*/
echo 'Муравей '.$ant->get_getOutOfAnthill().('<br>');
echo 'И '.$ant->get_followTrail();
echo ''.$ant->get_seeFood();
echo ''.$ant->get_rememberTrailBack().('<br>');
echo 'И '.$ant->get_goBackToAnthill().(' в муравейник');



