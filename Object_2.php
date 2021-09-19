<?php
class Coffee_Machine
    {  //атрибуты
    public $startButton;
    public $stopButton;
    public $depForCooking;
    public $depForWater;
    public $coffeeOut;
    }

    $coffee_machine = new Coffee_Machine(); //объект-кофемашина

    $coffee_machine->depForCooking = 'volume200gr';
    $coffee_machine->depForWater = 'volume500ml';
    /*
    $coffee_machine->$startButton = ?
    $coffee_machine->$stopButton = ?
    $coffee_machine->$coffeeOut = ?
    */

    function startWork()
    {
        //начать работу
    }
    function stopWork()
    {
        //закончить работу
    }
    function waterHeating()
    {
        //нагреть воду
    }
    function coffeeGrinding()
    {
        //перемол кофе
    }
    function useTheCoffeeOut()
    {
        //вылить все через выход для кофе
    }
    /*
    function _construct($compartment_1,$compartment_2)
    {
        $this->depForCooking = $compartment_1;
        $this->depdepForWater = $compartment_2;

    }
    $coffee_machine = new Coffee_Machine(30,120);

    (Жизненный цикл:)
        $coffee_machine->startWork();
        $coffee_machine->waterHeating();
        $coffee_machine->coffeeGrinding();
        $coffee_machine->useTheCoffeeOut();
        $coffee_machine->stopWork();
    */