<?php

namespace TransmissionManual {


    trait TransmissionManual
    {
        protected function moveForwardManual()
        {
            $this->speed = $this->horses * 2 * 3.6;
            if ($this->speed < 20) {
                echo "включили первую передачу и разогнались до " . $this->speed . " км/ч" . "<br>";
            } else {
                echo "включили вторую передачу и разогнались до " . $this->speed . " км/ч" . "<br>";
            }
        }

        protected function manualTransmitionOff()
        {
            echo "Выключили коробку передач" . "<br>";
        }
    }
}
