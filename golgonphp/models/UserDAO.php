<?php

class UserDAO {
    public static function checkLogin($username,$password) {
        $mysqli = Database::getConnection();
        $query = "SELECT * FROM users where uusername = ? and upassword = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        
        $stmt->close();
        $mysqli->close();
        
        if (!$data) {
            return FALSE;
        }
        return $data;
    }
    public static function checkRegister($username) {
        $mysqli = Database::getConnection();
        $query = "SELECT * FROM users where uusername = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        
        $stmt->close();
        $mysqli->close();
        
        if (!$data) {
            return TRUE;
        }
        return FALSE;
    }
    public static function register($user) {
        $mysqli = Database::getConnection();
        $query = "INSERT INTO users values(?,?,?,?,?,?,?,?)";
        $stmt = $mysqli->prepare($query);
        
        $userid = $user->getUserid();
        $firstname = $user->getFirstname();
        $lastname = $user->getLastname();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $mail = $user->getMail();
        $avatar = $user->getAvatar();
        $role = $user->getRole();
        
        $stmt->bind_param("isssssss",$userid,$firstname,$lastname,$username,$password,$mail,$avatar,$role);
        $stmt->execute();
        $stmt->close();
        $mysqli->close();
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
