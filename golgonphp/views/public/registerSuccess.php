<?php error_reporting(0);?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Register successfully!</title>
        <link rel="stylesheet" href="css/RegisterSuccess.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/shared.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/_footer.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/_header.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/registerSuccess.css">
        <link rel="stylesheet" href="/golgonphp/assets/fontawesome/css/all.css">

        <script src="/golgonphp/assets/js/jquery3-3-1.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php require_once('views/public/_header.php'); ?>
        <!---------------Main Section -------------->
        <div id="success-main-frame">
            <div class="container">
                <div id="main-frame-content" class="col-12 col-xs-12 col-sm-12">
                    <div id="main-frame-content-inner" class="col-6 col-xs-12 col-sm-7">
                        <div id="inside" class="col-12 col-xs-12 col-sm-12 flex-col">
                            <h1 class="col-12 col-xs-12 col-sm-12">Register successfully !</h1>
                            <div class="flex col-3 col-xs-6 col-sm-3"><img src="/golgonphp/assets/images/check-registration.jpg"></div>
                            <h3 class="col-12 col-xs-12 col-sm-12">Congratulations! You have completed your registration successfully.
                                <br>
                                Hope you have a great experience on our website !
                            </h3>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12"><a href="/golgonphp/home"><div class="col-3 col-xs-12 col-sm-6" style="margin:20px auto;">Back to home</div></a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('views/public/_footer.php'); ?>
    </body>
</html>