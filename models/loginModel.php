<?php

class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $sth = $this->db->prepare("SELECT id, role FROM users WHERE login = :login AND password = MD5(:password)");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));
        $data = $sth->fetch();
        // $data = $sth->fetchAll();
        $count = $sth->rowCount();
        if ($count > 0) {
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            header('Location: ../index');
        } else {
            header('Location: ../login');
        }
    }
}
