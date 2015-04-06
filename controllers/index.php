<?php
namespace controllers;

use framework\Controller;

class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'INSIDE INDEX INDEX';
    }

    public function details()
    {
        $this->view->render('index/index');
    }
}
