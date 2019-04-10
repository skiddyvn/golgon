<?php
class User {
    private $userid;
    private $firstname;
    private $lastname;
    private $username;
    private $password;
    private $avatar;
    private $mail;
    private $role;
    
    /*===================== Hàm khởi tạo và getters/setters ================*/
    function __construct() {
        $this->userid    = null;
        $this->firstname = '';
        $this->lastname  = '';
        $this->mail      = '';
        $this->avatar    = 'assets/images/default-avatar.png';
        $this->role      = 'user';
    }
    
    function getRole() {
        return $this->role;
    }

    function setRole($role) {
        $this->role = $role;
    }

        function getUserid() {
        return $this->userid;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getAvatar() {
        return $this->avatar;
    }

    function getMail() {
        return $this->mail;
    }

    function setUserid($userid) {
        $this->userid = $userid;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }
    
}