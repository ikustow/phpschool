<?php

namespace App;

class Main extends MainController
{
    public function enter()
    {
       $this->view->render('enter.php');
    }
}