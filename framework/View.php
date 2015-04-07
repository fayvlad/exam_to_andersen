<?php

class View
{
    public $userList = [];

    public function render($name, $noInclude = false)
    {
        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
        }
    }

    public function redirect($name)
    {
        header('Location: ../' . $name);
    }
}
