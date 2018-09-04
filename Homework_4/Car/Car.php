<?php

require_once("Engine.php");
require_once("TransmissionAuto.php");
require_once("TransmissionManual.php");
require_once("moveBack.php");


class Car
{
    use Engine;
    use TransmissionAuto;
    use TransmissionManual;
    use MoveBack;

    protected $speed;
    protected $dist;
    protected $direction;
    protected $endpoint;
    protected $transmission;
    const BACK = "Назад";
    const MANUAL = "Ручная";
    const SPEED_VALUE_COEF = 5.6; // показатель для перевода в км/ч
    const RANGE_STEP = 10;
    const TEMPERATURE_STEP = 5;
    const MAX_TEMPERATURE = 90;

    protected function __construct($dist, $direction, $endpoint, $transmission, $temp, $horses)
    {
        $this->dist = $dist;
        $this->direction = $direction;
        $this->endpoint = $endpoint;
        $this->transmission = $transmission;
        $this->temp = $temp;
        $this->horses = $horses;
    }
    public function start()
    {
        $this->speed = $this->horses*self::SPEED_VALUE_COEF;
        $this->startEngine();
        $this->setTransmission();
        $this->drive();
    }

    protected function setTransmission()
    {

        if ($this->direction == self::BACK) {
            $this->back();
        } elseif ($this->transmission == self::MANUAL) {
            $this->moveForwardManual();
        } else {
            $this->moveForwardAuto();
        }
    }

    protected function drive()
    {
        while ($this->dist <= $this->endpoint) {
            echo "Проехали " . $this->dist . " Температура двигателя: " . $this->temp . "<br>";
            $this->dist = $this->dist + self::RANGE_STEP;
            $this->temp = $this->temp + self::TEMPERATURE_STEP;
            if ($this->temp == self::MAX_TEMPERATURE) {
                echo "Температура двигателя достигла ".$this->temp."! Включаем охлаждение" . "<br>";
                $this->startCooling($this->temp);
            }

        }
        echo "Удачно доехали!"."<br>";
        if ($this->direction == self::BACK) {
            $this->transmitionOff();
        } elseif ($this->transmission == self::MANUAL) {
            $this->manualTransmitionOff();
        } else {
            $this->autoTransmitionOff();
        }
        $this->engineOff();
    }
}
