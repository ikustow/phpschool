<?php

namespace TransmissionManual {


    trait TransmissionManual
    {
        protected function moveForwardManual()
        {

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
