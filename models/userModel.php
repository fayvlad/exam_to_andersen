<?php


class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function userList()
    {
        $sth = $this->db->prepare('SELECT * FROM users');
        $sth->execute();
        return $sth->fetchAll();
    }

    public function create($data)
    {
        $sth = $this->db->prepare("INSERT INTO  `users` (`name` ,`sname` ,`email` ,`password` ,`role`)
                                        VALUES (:name,  :sname,  :email, :password,  :role)");
        $sth->execute(array(
            ':name' => $data['name'],
            ':sname' => $data['sname'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':role' => $data['role'],
        ));
    }

    public function editSave($data)
    {
        $sth = $this->db->prepare('UPDATE users SET `name` = :name,  `sname` = :sname,  `email` = :email, `password` = :password,  `role` = :role WHERE id = :id');
        $sth->execute(array(
            ':id' => $data['id'],
            ':name' => $data['name'],
            ':sname' => $data['sname'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':role' => $data['role'],
        ));
    }

    public function userSingleList($id)
    {
        $sth = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
    }

    public function delete($id)
    {
        $sth = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $sth->execute(array(
            ':id' => $id
        ));
    }
}
