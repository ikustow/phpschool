<?php

namespace car;
    require_once("Car.php");

    class Optima extends Car
    {
        const MANUAL = "Ручная";
        const HP = 12;
        public function __construct($direction, $endpoint, $speed)
        {

            parent::__construct(self::MANUAL, self::HP);
            $this->move($direction, $endpoint, $speed);
        }
    }
