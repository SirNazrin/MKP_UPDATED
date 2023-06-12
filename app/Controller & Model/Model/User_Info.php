<?php

class User_Info{

    private $table = 'User_Info';
    private $db;

    public function __construct(){

        $this->db = new Database;

    }

    public function getUserByIC(){

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE UserIC=:UserIC');
        $this->db->bind('UserIC', $_SESSION['user_id']);
        return $this->db->single();
    }

    

}

?>