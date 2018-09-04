<?php

class Users
{
    public function store()
    {
        $name = $_POST['name'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $info = $_POST['info'];
        $avatar = $_POST['avatar'];


        $user = new \User();
        $user->name = $name;
        $user->login = $login;
        $user->password = $password;
        $user->age = $age;
        $user->info = $info;
        $user->avatar = $avatar;
        $user->user->save();
        $view = new \View();
        $view->render('userpage.php',$user);
    }

    public function create()
    {
        $view = new \View();
        $view->render('registration.php');
    }

    public function finduser()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = \User::findUser($login, $password);
        if (!empty($user)) {
            $view = new \View();
            $view->render('userpage.php', $user);
        } else {
            $view = new \View();
            $view->render('infopage.php');
        }
    }
}