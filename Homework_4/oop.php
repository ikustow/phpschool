<?php

class Car
{
    use Engine;
    use TransmissionAuto;
    use TransmissionManual;

    public $speed;
    public $dist;
    public $direction;
    public $startpoint;

    public function start ()
    {
        return $this->horses * 2; //Получили скорость
    }

    public function settransmission ()
    {
        //констракт передает какой тип коробки
        if ($direction = "назад") {
            $this->back();
        } else {
            $this->moveForvard();
        }
    }

    public function drive ()
    {
    }
}

trait Engine
{
    public $temp;
    public $horses;

    public function startcooling ()
    {
    }

    public function coolingoff ()
    {
    }
}

trait TransmissionAuto
{
    use moveBack;

    public function moveForvard ()
    {
    }

}

trait TransmissionManual
{
    use moveBack;

    public function moveForvard ()
    {
    }
}

trait moveBack
{
    public function back ()
    {
    }
}

//Создаем объект(экземпляр класса) автомобиля
$myCar = new Car();
$myCar->Speed = 120;

//Вызываем метод созданного объекта автомобиля
$myCar->drive();