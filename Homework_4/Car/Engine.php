<?php
namespace car;
    trait Engine
    {
        protected $temp = 0;
        protected $horses;

        protected function coolingOn($hotTemp)
        {
            $this->temp = $hotTemp - 10;
            echo "Охладили двигатель, теперь температура:" . $this->temp . "<br>";
            $this->coolingoff();
            return $this->temp;
        }

        protected function coolingOff()
        {
            echo "Выключили охлаждение" . "<br>";
        }

        protected function startEngine()
        {
            echo "Включили двигатель" . "<br>";
        }

        protected function engineOff()
        {
            echo "Выключили двигатель" . "<br>";
        }
    }

   