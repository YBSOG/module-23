<?php

interface VehicleInterface
{
    public function action();

    public function move();

    public function horn();

    public function wipers();
}

abstract class Vehicle implements VehicleInterface
{
    public function move()
    {
        echo '*engine sound*';
    }

    public function horn()
    {
        echo 'beep';
    }


    public function wipers()
    {
    }

    public function action()
    {
        echo $this->sound;
        $this->move();
    }
};

class Car extends Vehicle
{
    public $carSalonMaterial = 'leather';
    protected $sound = 'RATATA';
};

class buildingMachinery extends Vehicle
{
    public $color = 'yellow';
    protected $sound = '*sounds of construction*';
};

function action(VehicleInterface $vehicle)
{
    $vehicle->action();
};
