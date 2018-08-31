<?php

namespace TransmissionAuto {

    trait TransmissionAuto
    {
        protected function moveForwardAuto()
        {
            $this->speed = $this->horses * 2 * 3.6;
            echo "включили автоматическую передачу в режим D и разогнались до " . $this->speed . " км/ч" . "<br>";
        }

        protected function autoTransmitionOff()
        {
            echo "Выключили коробку передач" . "<br>";
        }
    }
}
