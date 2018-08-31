<?php
namespace Moveback{

    trait MoveBack
    {
        protected function back()
        {
            $this->speed = $this->horses*2*3.6;
            echo "Включили заднюю передачу"."и разогнались до ".$this->speed." км/ч"."<br>";
        }
        protected function transmitionOff()
        {
            echo "Выключили коробку передач". "<br>";
        }
    }
}
