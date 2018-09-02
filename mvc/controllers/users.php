<?php

namespace App;

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
        $user->
        $user->save();
        $view = new \View();
        $view->render('users/userpage',$user);
    }

    public function create()
    {
        $view = new \View();
        $view->render('users/registration');
    }

    public function finduser()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $user = \User::findUser($login,$password);
        if (!empty($user)) {
            $view = new \View();
            $view->render('users/userpage',$user);
        }else {
            $view = new \View();
            $view->render('users/infopage');
        }
    }
}