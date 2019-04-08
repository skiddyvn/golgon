<?php

class UserDAO {
    public static function checkLogin($username,$password) {
        $mysqli = Database::getConnection();
        $query = "SELECT * FROM users where uusername = ? and upassword = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public static function checkRegister() {
        
    }
    public static function addUser() {
        
    }
    public static function deleteUser($userid) {
        
    }
    public static function updateUser($userid) {
        
    }
    public static function getListAllUsers() {
        
    }
}
