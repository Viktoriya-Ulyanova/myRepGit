<?php
class Grape
{ //атрибуты
    public $start;
    public $caps;
    public $ovary;
    public $seed;
    public $berry;
    public $cluster;
    public $end;

    public function set_beginning_of_flowering (string $start)
    {
        //начало цветения
        $this->start = $start;
    }
    public function set_end_of_flowering (string $end) 
    {
        //конец цветения
        $this->end = $end;
    }
    public function set_caps_fall_off (string $caps)
    {
        //опадение колпачков
        $this->caps = $caps;
    }
    public function set_formation_of_ovaries (string $ovaries)
    {
        //образование завязей
        $this->ovary = $ovaries;
    }
    public function set_appearance_of_the_seed (string $seed)
    {
        //появление семя
        $this->seed = $seed;
    }
    public function set_berry_formation (string $berries)
    {
        //образование ягоды вокруг семени
        $this->berry = $berries;
    }
    public function set_appearance_of_a_bunch (string $cluster)
    {
        //появление грозди с ягодами
        $this->cluster = $cluster;
    }

    public function get_beginning_of_flowering () { return $this->start; }
    public function get_caps_fall_off ()          { return $this->caps; }
    public function get_formation_of_ovaries ()   { return $this->ovary; } 
    public function get_appearance_of_the_seed () { return $this->seed; } 
    public function get_berry_formation ()        { return $this->berry; }
    public function get_appearance_of_a_bunch ()  { return $this->cluster; }
    public function get_end_of_flowering ()       { return $this->end; }

   /*
    function __construct($start = 'закончил цветение',$caps = 'уже опали', $ovaries = 'образовались', $seed = 'появилось', $berries = 'присутствует', $cluster = 'имеется',$end = 'закончено')
    {
        $this->start = $start;
        $this->caps = $caps;
        $this->ovary = $ovaries;
        $this->seed = $seed;
        $this->berry = $berries;
        $this->cluster = $cluster;
        $this->end = $end;
    }
    //function __destruct() {echo 'Object delete!';}
    */
}

$grape = new Grape ();  //оъект- виноград

$grape->set_beginning_of_flowering('начал цвести');
$grape->set_caps_fall_off('уже опали');
$grape->set_formation_of_ovaries('образовались');
$grape->set_appearance_of_the_seed('еще не появилось');
$grape->set_berry_formation('--');
$grape->set_appearance_of_a_bunch('--');
$grape->set_end_of_flowering('не закончилось');

echo 'Виноград '.$grape->get_beginning_of_flowering ().'<br>';
echo 'Колпачки '.$grape->get_caps_fall_off ().'<br>';
echo 'Завязи '.$grape->get_formation_of_ovaries ().'<br>';
echo 'Семя '.$grape->get_appearance_of_the_seed ().'<br>';
echo 'Ягоды '.$grape->get_berry_formation ().'<br>';
echo 'Грозди '.$grape->get_appearance_of_a_bunch ().'<br>';
echo 'Цветение '.$grape->get_end_of_flowering ().'<br>';
