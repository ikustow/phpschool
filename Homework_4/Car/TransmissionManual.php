<?php
namespace car;
    trait TransmissionManual
    {
        protected function moveForwardManual()
        {

            if ($this->speed < 20) {
                echo "включили первую передачу и разогнались до " . $this->speed . " м/с" . "<br>";
            } else {
                echo "включили вторую передачу и разогнались до " . $this->speed . " м/с" . "<br>";
            }
        }

        protected function manualTransmitionOff()
        {
            echo "Выключили коробку передач" . "<br>";
        }
    }
