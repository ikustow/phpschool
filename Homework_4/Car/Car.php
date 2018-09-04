<?php
namespace car;

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
        protected $dist = 0;
        protected $direction;
        protected $endpoint;
        protected $transmission;
        protected $availableSpeed;

        const BACK = "Назад";
        const MANUAL = "Ручная";
        const SPEED_VALUE_COEF = 2;
        const RANGE_STEP = 10;
        const TEMPERATURE_STEP = 5;
        const MAX_TEMPERATURE = 90;

        protected function __construct($transmission, $horses)
        {

            $this->transmission = $transmission;
            $this->horses = $horses;
        }

        public function move($direction, $endpoint, $speed)
        {

            $this->direction = $direction;
            $this->endpoint = $endpoint;
            $this->startEngine();
            $this->speed = self::setCurrentSpeed($speed);
            $this->setTransmission();
            $this->drive();
        }

        protected function setCurrentSpeed($speed)
        {
            $this->availableSpeed = $this->horses * self::SPEED_VALUE_COEF;
            if ($speed > $this->availableSpeed) {
                echo "Установлено предельное значение максимальной скорости ".$this->availableSpeed." м/с из-за ограничений двигателя"."<br>";
                $speed = $this->availableSpeed;
            }
            return $speed;
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
                    echo "Температура двигателя достигла " . $this->temp . "! Включаем охлаждение" . "<br>";
                    $this->coolingOn($this->temp);
                }

            }
            echo "Удачно доехали!" . "<br>";

            if ($this->transmission == self::MANUAL) {
                $this->manualTransmitionOff();
            } else {
                $this->autoTransmitionOff();
            }
            $this->engineOff();
        }
    }
