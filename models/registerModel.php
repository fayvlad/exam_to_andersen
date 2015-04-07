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
            $sth = $this->db->prepare("INSERT INTO  `users` (`id` ,`name` ,`sname` ,`email` ,`password` ,`role`)
                                        VALUES (NULL ,  :name,  :sname,  :email, :password,  :role)");
            $sth->execute(array(
                ':name' => $_POST['name'],
                ':sname' => $_POST['sname'],
                ':email' => $_POST['email'],
                ':password' => $_POST['password'],
                ':role' => 'owner',
            ));
            Session::init();
            Session::set('role', 'owner');
            Session::set('loggedIn', true);
            header('Location: ../index');
        }
    }
}
