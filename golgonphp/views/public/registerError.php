<!DOCTYPE html>
<html>
    <head>
        <title>Golgon| GAMING GEAR & PC COMPONENTS CENTER</title>
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/shared.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/_footer.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/_header.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/error.css">
        <link rel="stylesheet" href="/golgonphp/assets/fontawesome/css/all.css">

        <script src="/golgonphp/assets/js/jquery3-3-1.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php require_once('views/public/_header.php'); ?>
        <!---------------Main Section -------------->
        <div id="error-main-frame" class="col-12 col-xs-12 col-sm-12">
            <div class="container">
                <div class="wrapper flex-col col-12 col-xs-12 col-sm-12">
                    <div id="errornoti" class="flex col-6 col-xs-11 col-sm-7">
                        <div><?php echo $GLOBALS['errorString']['register']; ?></div>
                    </div>
                    <form class="errorform col-6 col-xs-11 col-sm-7" name="errorformname" action="/golgonphp/user/register" method="POST">
                        <div class="col-12 col-xs-12 col-sm-12 flex-col">
                            <label for="fullname" class="col-12 col-xs-12 col-sm-12">Fullname</label>
                            <div class="col-12 col-xs-12 col-sm-12 flex fullname-div">
                                <input class="col-6 col-xs-12 col-sm-6" type="text" placeholder="Firstname" name="tfirstname" required>
                                <input class="col-6 col-xs-12 col-sm-6" type="text" placeholder="Lastname" name="tlastname" required>
                            </div>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 flex-col">
                            <label for="mail" class="col-12 col-xs-12 col-sm-12">Mail</label>
                            <input class="col-12 col-xs-12 col-sm-12" type="mail" placeholder="Enter mail" name="tmail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,}$" required>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 flex-col">
                            <label for="uname" class="col-12 col-xs-12 col-sm-12">Username</label>
                            <input class="col-12 col-xs-12 col-sm-12" type="text" placeholder="Enter username" name="tusername" required>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 flex-col">
                            <label for="psw" class="col-12 col-xs-12 col-sm-12">Password</label>
                            <input class="col-12 col-xs-12 col-sm-12" type="password" placeholder="Enter password" name="tpassword" required>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 flex-col">
                            <label for="cfpsw" class="col-12 col-xs-12 col-sm-12">Confirm Password</label>
                            <input class="col-12 col-xs-12 col-sm-12" type="password" placeholder="Confirm password" name="tpasswordconfirm" required>
                        </div>
                        <button type="submit" name="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <?php require_once('views/public/_footer.php'); ?>
    </body>
</html>