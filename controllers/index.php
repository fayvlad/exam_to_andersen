<?php

class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'Home page';
    }

    public function details()
    {
        $this->view->render('index/index');
    }
}
