<?php
namespace Moveback{

    trait MoveBack
    {
        protected function back()
        {

            echo "Включили заднюю передачу"."и разогнались до ".$this->speed." км/ч"."<br>";
        }
        protected function transmitionOff()
        {
            echo "Выключили коробку передач". "<br>";
        }
    }
}
