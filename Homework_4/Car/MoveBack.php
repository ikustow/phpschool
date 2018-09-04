<?php
namespace car;
    trait MoveBack
    {
        protected function back()
        {

            echo "Включили заднюю передачу" . "и разогнались до " . $this->speed . " м/с" . "<br>";
        }
    }
