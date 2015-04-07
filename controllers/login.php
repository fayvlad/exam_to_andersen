<?php

class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //require 'models/login_model.php';
        // $model = new Login_Model();user.php
        $this->view->render('login/index');
    }

    public function run()
    {
        $this->model->run();
    }
}
