if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
    $query ="INSERT INTO 'user'('username','lastname','password', 'fullname', 'email', 'confirmpassword')
                                    VALUE('$username','$lastname','$password','$fullname','$email', '$confirmpassword')
    ";
if ('$password' === '$confirmpassword' );
    $result = $mysqli->query($query);
}