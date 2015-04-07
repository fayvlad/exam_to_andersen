<?php

class User extends Controller
{

    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');
        if ($logged == true || $role != 'owner') {
            if ($logged == false) {
                Session::destroy();
                header('Location: ../login');
                exit();
            }
        }
    }

    public function index()
    {
        $this->view->userList = $this->model->userList();
        $this->view->render('user/index');
    }

    public function create()
    {
        $data = array();
        $data['name'] = $_POST['name'];
        $data['sname'] = $_POST['sname'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        $this->model->create($data);
        header('Location: ' . URL . '/user');
    }


    public function edit($id)
    {
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('user/edit');
    }

    public function editSave($id)
    {
        $data = array();
        $data['id'] = $id;
        $data['name'] = $_POST['name'];
        $data['sname'] = $_POST['sname'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        $this->model->editSave($data);
        header('Location: ' . URL . '/user');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: ' . URL . '/user');
    }
}
