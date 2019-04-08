<?php
class UserController {
    public function login() {
        if(isset($_POST['login'])){
            $username = $_POST['login-username'];
            $password = $_POST['login-password'];
            if (UserDAO::checkLogin($username,$password)) {
                echo "<script>alert('Login successfully!');</script>";
                echo "<script>window.location.href='/golgonphp/home'</script>";
            } else {
                echo "<script>alert('Wrong username or password !');</script>";
                require('views/public/loginError.php');
            }
        } else {
            header('Location:/golgonphp/home');
        }
    }
}