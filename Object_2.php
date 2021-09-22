<?php
class Coffee_Machine
    {  //атрибуты
    public $startButton;
    public $stopButton;
    public $depForCoffee;
    public $depForWater;
    public $machWork;
    public $coffeeOut;

    public function  setStartWork(string $start)
    {
        //начать работу
        $this->startButton = $start;
    }
    public function setStopWork(string $stop)
    {
        //закончить работу
        $this->stopButton = $stop;
    }
    public function  setWater(int $waterML)
    {
        //кол-во воды (мл)
        $this->depForWater = $waterML;
    }
    public function setCoffee(int $coffee)
    {
        //кол-во кофе (гр)
        $this->depForCoffee = $coffee;
    }
    public function setCoffeeGrinding(string $work)
    {
        //работает или нет
        $this->machWork = $work;
    }
    public function setUseTheCoffeeOut(string $ready)
    {
        //готов кофе или нет
        $this->coffeeOut = $ready;
    }

    public function getStartWork() { return $this->startButton; }
    public function getStopWork()  { return $this->stopButton; }
    public function getWater()     { return $this->depForWater; }
    public function getCoffee()    { return $this->depForCoffee; }
    public function getCoffeeGrinding()  { return $this->machWork; }
    public function getUseTheCoffeeOut() { return $this->coffeeOut; }
/*
    function __construct(string $start = 'Выкл.',int $waterML = 0,int $coffee = 0,string $work = 'отдых',string $stop = '--',string $ready = '--')
    {
        $this->startButton = $start;
        $this->depForWater = $waterML;
        $this->depForCoffee = $coffee;
        $this->machWork = $work;
        $this->stopButton = $stop;
        $this->coffeeOut = $ready;
    }
    //function __destruct() {echo 'Object delete!';}
*/
    }

    $coffee_machine = new Coffee_Machine(); //объект-кофемашина

    $coffee_machine->setStartWork('включено');
    $coffee_machine->setWater(120);
    $coffee_machine->setCoffee(20);
    $coffee_machine->setCoffeeGrinding('процесс приготовления');
    $coffee_machine->setStopWork('Pабота закончена!');
    $coffee_machine->setUseTheCoffeeOut('готов!');
   
    echo 'Кофемашина в состоянии: '.$coffee_machine->getStartWork().'<br>';
    echo 'Вы налили '.$coffee_machine->getWater().'ml. воды<br>';
    echo 'Вы добавили '.$coffee_machine->getCoffee().'g. кофе<br>';
    echo 'Вы запустили '.$coffee_machine->getCoffeeGrinding().'...<br>.........<br>';
    echo $coffee_machine->getStopWork().'<br>';
    echo 'Кофе '.$coffee_machine->getUseTheCoffeeOut();
 