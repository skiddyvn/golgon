<?php
class User {
    private $userid;
    private $firstname;
    private $lastname;
    private $username;
    private $password;
    private $avatar;
    private $mail;
    /*===================== Chức năng extends từ UserDAO ================*/
    
    /*===================== Lỗi và xác nhận (validation) ================*/
    private $errors;
    
    function errors() {
        return $this->errors;
    }
    
    function isValid() {
        $this->validatePassword();
        $this->validateName();
        $this->validateMail();
        return count($this->errors) == 0;
    }
    
    private function validateName() {
        if(!is_string($this->firstname) || !is_string($this->lastname) ) {
            return $this->errors['name'] = 'Not a string.';
        }
    }
    
    private function validatePassword() {
    }
    
    private function validateMail() {
        if(!is_string($this->mail)) {
            return $this->errors['mail'] = 'Not a string.';
        }
        
        $pattern = '/^[a-z][a-z0-9_\.]@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/';
        if(!preg.match($pattern, $this->mail)) {
            return $this->errors['mail'] = 'Not a valid mail.';
        }
    }
    /*===================== Hàm khởi tạo và getters/setters ================*/
    function __construct() {
        $this->userid    = null;
        $this->firstname = '';
        $this->lastname  = '';
        $this->mail      = '';
        $this->avatar    = 'assets/images/default-avatar.png';
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