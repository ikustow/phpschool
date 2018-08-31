<?php

trait Engine
{
    public $temp;
    public $horses;

    public function startcooling($hottemp)
    {
        $this->temp = $hottemp -10;
        echo "Охладили двигатель, теперь температура:".$hottemp."<br>";
        $this->coolingoff();
        return $this->temp;
    }

    public function coolingoff()
    {
        echo "Выключили охлаждение"."<br>";
    }

    public function startengine()
    {
        echo "Включили двигатель"."<br>";
    }
    public function engineoff()
    {
        echo "Выключили двигатель"."<br>";
    }

}

trait TransmissionAuto
{
  //  use moveBack;

    public function moveForvard_manual()
    {
        $this->speed = $this->horses*2*3.6;
        if ($this->speed<20) {
            echo "включили первую передачу и разогнались до ".$this->speed." км/ч"."<br>";
        } else {
            echo "включили вторую передачу и разогнались до ".$this->speed." км/ч"."<br>";
        }
    }
    public function manualtransmitionoff()
    {
        echo "Выключили коробку передач". "<br>";
    }

}

trait TransmissionManual
{
  //  use moveBack;

    public function moveForvard_auto()
    {
        $this->speed = $this->horses*2*3.6;
        echo "включили автоматическую передачу в режим D и разогнались до ".$this->speed." км/ч"."<br>";
    }

    public function autotransmitionoff()
    {
    echo "Выключили коробку передач". "<br>";
    }
}

trait moveBack
{
    public function back()
    {
        $this->speed = $this->horses*2*3.6;
        echo "Включили заднюю передачу"."и разогнались до ".$this->speed." км/ч"."<br>";
    }
    public function transmitionoff()
    {
        echo "Выключили коробку передач". "<br>";
    }
}

class Car
{
    use Engine;
    use TransmissionAuto;
    use TransmissionManual;
    use moveBack;

    public $speed;
    public $dist;
    public $direction;
    public $endpoint;
    public $transmission;

    public function start()
    {
      $this->startengine();
      $this->settransmission();
      $this->drive();
    }

    public function settransmission()
    {
        //констракт передает какой тип коробки
        if ($direction = BACK) {
            $this->back();
        } elseif ($this->transmission = MANUAL) {
            $this->moveForvard_manual();
        } else {
            $this->moveForvard_auto();
        }
    }

    public function drive()
    {
        while ($this->dist <= $this->endpoint) {
            $this->dist = $this->dist + 10;
            $this->temp = $this->temp + 5;
            echo "Проехали " . $this->dist . " Температура двигателя: " . $this->temp . "<br>";
            if ($this->temp == MAXTEMP) {
                echo "Включаем охлаждение" . "<br>";
                $this->startcooling($this->temp);
            }

        }
        echo "Удачно доехали!"."<br>";
        if ($direction = BACK) {
            $this->transmitionoff();
        } elseif ($this->transmission = MANUAL) {
            $this->manualtransmitionoff();
        } else {
            $this->autotransmitionoff();
        }
        $this->engineoff();
    }
}


//Создаем объект(экземпляр класса) автомобиля
$myCar = new Car();
const MAXTEMP = 90;
const MANUAL = true; // Ручная коробка
const AUTO = true;   // Автоматическая
const FORVARD = true; // едем вперед
const BACK = true; // едем назад
$myCar->transmission = MANUAL;
$myCar->horses = 120;
$myCar->dist=100;
$myCar->endpoint=500;
$myCar->direction = FORVARD;
$myCar->temp = 0;

//Вызываем метод созданного объекта автомобиля
$myCar->start();

