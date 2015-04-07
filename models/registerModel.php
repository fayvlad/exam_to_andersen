<?php

class RegisterModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registration()
    {
        $sth = $this->db->prepare("SELECT email FROM users WHERE `email` = :email");
        $sth->execute(array(
            ':email' => $_POST['email'],
        ));
        $count = $sth->rowCount();
        if ($count > 0) {
            $message = 'E-mail уже существует';
            return $message;
        } else {
            $sth = $this->db->prepare("INSERT INTO  `users` (`name` ,`sname` ,`email` ,`password` ,`role`)
                                        VALUES ( :name,  :sname,  :email, :password,  :role)");
            $sth->execute(array(
                ':name' => $_POST['name'],
                ':sname' => $_POST['sname'],
                ':email' => $_POST['email'],
                ':password' => $_POST['password'],
                ':role' => ROLE,
            ));
            Session::init();
            Session::set('role', ROLE);
            Session::set('name', $_POST['name']);
            Session::set('sname', $_POST['sname']);
            Session::set('email', $_POST['email']);
            Session::set('loggedIn', true);
            header('Location: ../index');
        }
    }
}
