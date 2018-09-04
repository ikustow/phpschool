<?php
require_once("Car.php");

class Kia extends Car
{
    public function __construct($dist, $direction, $endpoint, $transmission, $temp, $horses)
    {
        parent::__construct($dist, $direction, $endpoint, $transmission, $temp, $horses);
        $this->start();
    }
}