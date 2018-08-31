<?php

require_once("Engine.php");
require_once("TransmissionAuto.php");
require_once("TransmissionManual.php");
require_once("moveBack.php");


class Car
{
    use \engine\Engine;
    use \TransmissionAuto\TransmissionAuto;
    use \TransmissionManual\TransmissionManual;
    use \Moveback\MoveBack;


    protected $speed;
    protected $dist;
    protected $direction;
    protected $endpoint;
    protected $transmission;

    protected function __construct($dist, $direction, $endpoint, $transmission, $temp, $horses)
    {
        $this -> dist = $dist;
        $this -> direction = $direction;
        $this -> endpoint = $endpoint;
        $this -> transmission = $transmission;
        $this -> temp = $temp;
        $this -> horses = $horses;
    }
    public function start()
    {
        $this->startEngine();
        $this->setTransmission();
        $this->drive();
    }

    protected function setTransmission()
    {

        if ($this->direction == BACK) {
            $this->back();
        } elseif ($this->transmission = MANUAL) {
            $this->moveForwardManual();
        } else {
            $this->moveForwardAuto();
        }
    }

    protected function drive()
    {
        while ($this->dist <= $this->endpoint) {
            echo "Проехали " . $this->dist . " Температура двигателя: " . $this->temp . "<br>";
            $this->dist = $this->dist + 10;
            $this->temp = $this->temp + 5;
            if ($this->temp == 90) {
                echo "Включаем охлаждение" . "<br>";
                $this->startCooling($this->temp);
            }

        }
        echo "Удачно доехали!"."<br>";
        if ($direction = BACK) {
            $this->transmitionOff();
        } elseif ($this->transmission = MANUAL) {
            $this->manualTransmitionOff();
        } else {
            $this->autoTransmitionOff();
        }
        $this->engineoff();
    }
}

class Priora extends Car
{
    public function __construct($dist, $direction, $endpoint, $transmission, $temp, $horses)
    {
        parent::__construct($dist, $direction, $endpoint, $transmission, $temp, $horses);
        $this->start();
    }
}

const MANUAL = "Ручная"; // Ручная коробка
const AUTO = "Автоматическая";   // Автоматическая
const FORWARD = "Вперед"; // едем вперед
const BACK = "Назад"; // едем назад

$myCar = new Priora(0, FORWARD, 500, MANUAL, 0, 12);

