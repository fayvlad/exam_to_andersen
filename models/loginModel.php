<?php

class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $sth = $this->db->prepare("SELECT * FROM users WHERE `email` = :email AND `password` = :password");
        $sth->execute(array(
            ':email' => $_POST['email'],
            ':password' => $_POST['password']
        ));
        $count = $sth->rowCount();
        if ($count > 0) {
            $data = $sth->fetch();
            Session::init();
            Session::set('role', $data['role']);
            Session::set('name', $data['name']);
            Session::set('sname', $data['sname']);
            Session::set('email', $data['email']);
            Session::set('loggedIn', true);
            header('Location: ../index');
        } else {
            header('Location: ../register');
        }
        return $data;
    }
}
