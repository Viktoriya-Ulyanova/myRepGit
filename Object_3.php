<?php
class Grape
{ //атрибуты
    public $buds;
    public $caps;
    public $ovary;
    public $seed;
    public $berry;
    public $cluster;
}

$grape = new Grape ();  //оъект- виноград

$grape->buds = 'presence'; //наличие бутонов
$grape->caps = 'presence'; //нал. колпачков
$grape->ovary = 'presence'; //нал. завязей
$grape->seed = 'presence'; //нал. семя
$grape->berry = 'presence'; //нал. ягоды
$grape->cluster = 'presence'; //нал. грозди

function beginning_of_flowering ()
{
    //начало цветения
} 
function end_of_flowering () 
{
    //конец цветения
}
function appearance_of_buds_with_caps () 
{
    //появление бутонов с колпачками
}
function caps_fall_off ()
{
    //опадение колпачков 
}
function formation_of_ovaries ()
{
    //образование завязей
}
function appearance_of_the_seed ()
{
    //появление семя
}
function berry_formation () 
{
    //образование ягоды вокруг семени
}
function appearance_of_a_bunch ()
{
    //появление грозди с ягодами
}
/*
function _construct($buds,$caps$ovary,$seed,$berry,$cluster)
{
    $this->buds = $buds;
    $this->caps = $caps;
    $this->ovary = $ovary;
    $this->seed = $seed;
    $this->berry = $berry;
    $this->cluster = $cluster;
}
$grape = new Grape ('no','no','yes','yes','yes','yes');

(Жизненный цикл:)
    $grape->appearance_of_buds_with_caps ();
    $grape->caps_fall_off ();
    $grape->beginning _of_flowering ();
    $grape->formation_of_ovaries ();
    $grape->appearance_of_the_seed ();
    $grape->berry_formation ();
    $grape->appearance_of_a_bunch ();
    $grape->the_end _of_flowering () 
    $grape->appearance_of_buds_with_caps ();
*/