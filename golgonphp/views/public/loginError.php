<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
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
                <div class="wrapper flex-col col-12">
                    <div id="errornoti" class="flex col-6 col-xs-11 col-sm-7">
                        <div><?php echo $GLOBALS['errorString']['login']; ?></div>
                    </div>
                    <form class="errorform col-6 col-xs-11 col-sm-7" name="errorformname" action="/golgonphp/user/loginafter" method="POST">
                        <div class="col-12 flex-col col-xs-12 col-sm-12">
                            <label for="uname" class="col-12 col-xs-12 col-sm-12">Username</label>
                            <input type="text" placeholder="Enter username" name="login-username" required class="col-12 col-xs-12 col-sm-12">
                        </div>
                        <div class="col-12 flex-col col-xs-12 col-sm-12">
                            <label for="psw" class="col-12 col-xs-12 col-sm-12">Password</label>
                            <input type="password" placeholder="Enter password" name="login-password" required class="col-12 col-xs-12 col-sm-12">
                        </div>
                        <button type="submit" name="login">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
        <?php require_once('views/public/_footer.php'); ?>
    </body>
</html>