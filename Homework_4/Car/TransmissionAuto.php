<?php

trait TransmissionAuto
{
    protected function moveForwardAuto()
    {

        echo "включили автоматическую передачу в режим D и разогнались до " . $this->speed . " км/ч" . "<br>";
    }

    protected function autoTransmitionOff()
    {
        echo "Выключили коробку передач" . "<br>";
    }
}

