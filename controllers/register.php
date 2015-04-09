<?php

class Register extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('register/index');
    }

    public function regist()
    {
        $this->view->msg = $this->model->registration();
        if (null !== $this->view->msg) {
            $this->view->render('register/index');
        }
     }
}
