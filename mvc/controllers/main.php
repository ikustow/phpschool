<?php

namespace App;

class Main
{
    public function index()
    {
        $view = new \View();
        $view->render('mvc/views/users/enter.php');
    }
}