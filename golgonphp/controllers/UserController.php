<?php
class UserController {
    // Login tren top bar
    public function login() {
        if(isset($_POST['login'])){
            $username = $_POST['login-username'];
            $password = $_POST['login-password'];
            $data = UserDAO::checkLogin($username,$password);
            if ($data) {
                $_SESSION['user'] = $data;
                echo json_encode('success');
            } else {
                echo json_encode('error');
            }
        } else {
            header('Location:/golgonphp/home'); // redirect PHP ( ko cho nguoi dung xem noi dung chuyen tiep)
        }
    }
    // Login o trang loi login
    public function loginafter() {
        if(isset($_POST['login'])){
            $username = $_POST['login-username'];
            $password = $_POST['login-password'];
            $data = UserDAO::checkLogin($username,$password);
            if ($data) {
                $_SESSION['user'] = $data;
                header('Location:/golgonphp/home');
            } else {
                $GLOBALS['errorString']['login'] = 'Wrong username or password';
                require('views/public/loginError.php');
            }
        } else {
            header('Location:/golgonphp/home'); // redirect PHP ( ko cho nguoi dung xem noi dung chuyen tiep)
        }
    }
    public function loginerror() {
        $GLOBALS['errorString']['login'] = 'Wrong username or password';
        require('views/public/loginError.php');
    }
    public function logout() {
        if(isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            header('Location:/golgonphp/home');
        } else {
            header('Location:/golgonphp/home');
        }
    }
    public function register() {
        if(isset($_POST['register'])) {
            $firstname = $_POST['tfirstname'];
            $lastname = $_POST['tlastname'];
            $mail = $_POST['tmail'];
            $username = $_POST['tusername'];
            $password = $_POST['tpassword'];
            $passwordconfirm = $_POST['tpasswordconfirm'];
            
            $user = new User();
            $user->setFirstname($firstname);
            $user->setLastname($lastname);
            $user->setUsername($username);
            $user->setPassword($password);
            $user->setMail($mail);
            
            $data = UserDAO::checkRegister($username);
            if ($data == TRUE) {
                if ($password !== $passwordconfirm) {
                    $GLOBALS['errorString']['register'] = 'Confirmed password does not match';
                    echo "<script>alert('Confirmed password does not match.')</script>";
                    require('views/public/registerError.php');
                } else {
                    UserDAO::register($user);
                    echo "<script>alert('Register successfully!')</script>";
                    require('views/public/registerSuccess.php');
                }
            } else {
                $GLOBALS['errorString']['register'] = 'Username has already been taken';
                echo "<script>alert('Username has already been taken.')</script>";
                require('views/public/registerError.php');
            }
        } else {
            require('views/public/registerError.php');
        }
    }
}