<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    function findUserByEmail($email)
    {
        $this->db->query('select * from users where email = :email');
        $this->db->bind(':email', $email);
        return $this->db->result();
    }

    function register($email, $name, $number, $password)
    {
        $this->db->query('insert into users (email, name, number, password) values (:email, :name, :number, :password)');
        $this->db->bind(':email', $email);
        $this->db->bind(':name', $name);
        $this->db->bind(':number', $number);
        $this->db->bind(':password', $password);
        $this->db->execute();
    }

    function login($email, $password)
    {
        $this->db->query('select * from users where email = :email and password = :password');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        return $this->db->result();
    }



 



}
