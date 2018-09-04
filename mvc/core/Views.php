<?php

class View
{
    protected $loader;
    protected $twig;


    public function render($filename, $data = array())
    {
        require_once  __DIR__."/../views/users/".$filename;
         $this->twig->render($filename, $data);
    }

    public function __construct()
    {
        $this->loader = new Twig_Loader_Filesystem('views/users');
        $this->twig = new Twig_Environment($this->loader, [
            'cache' => false,
        ]);
    }
}
