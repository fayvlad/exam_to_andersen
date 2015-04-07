<?php

class Error extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->msg = 'Страницы не существует!';
        $this->index();
    }

    public function index()
    {
        $this->view->render('error/index');
    }
}
