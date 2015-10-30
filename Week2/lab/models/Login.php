<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author GFORTI
 */
class Login {
    private $db;

    function __construct() {
        
        $util = new Util();
        $dbo = new DB($util->getDBConfig());
        $this->setDb($dbo->getDB());        
    }

    private function getDb() {
        return $this->db;
    }

    private function setDb($db) {
        $this->db = $db;
    }

    

    public function save($username, $password) {
        
        $stmt = $this->getDb()->prepare("SELECT users set username = :username, password = :password");
                
        $binds = array(
            ":username" => $username,
            ":password" => $password
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
           return true;
        }
        return false;
        
    }
}
