<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Golgon| GAMING GEAR & PC COMPONENTS CENTER</title>
        <link rel="stylesheet" href="../assets/stylesheets/loginError.css">
        <link rel="stylesheet" href="../assets/stylesheets/shared.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php require_once('__header.php'); ?>
    <!---------------Main Section -------------->
    <div id="main-frame">
        <div class="container">
            <div id="errornoti">
                <h3><?php echo $GLOBALS['errorString'];?></h3>
            </div>
            <form class="errorform" name="errorformname" action="login" method="POST">
                <label for="uname">Username</label>
                <input type="text" placeholder="Enter username" name="uname" value="${user.username}" required>
                <label for="psw">Password</label>
                <input type="password" placeholder="Enter password" name="psw" value="${user.password}" required>
                <button type="submit" value="login" >Sign In</button>
            </form>
        </div>
    </div>
    <?php require_once('__footer.php'); ?>
</body>
</html>