<script src="/golgonphp/assets/js/ajax.js"></script>
<script src="/golgonphp/assets/js/header.js"></script>
<?php error_reporting(0); ?>
<!--================   TOP BAR  ===================-->
<div id="header">
<div id="upper-header" class="clearfix">
    <div class="container">
        <!--=========================   LOGO  ==========================-->
        <div class="upper-header-left left col-3 col-xs-0">
            <a href="/golgonphp/home/index"><div class="brda-2-dashed logo-corner pointer clearfix"></div></a>
        </div>
        <!--===============   INFORMATION//LOGIN//REGISTER  ============-->
       
        <!--===== Chua login =====-->
        <div class="upper-header-right right col-9 col-xs-12" id="login-false">
            <div class="right flex">
                <div id="signin" class="pad-10-15" onclick="clicklogin1()">Sign In</div>
                <div id="register" class="pad-10-15" onclick="clicklogin2()">Register an account</div>
            </div>
        </div>
        <!--===== Login thanh cong =====-->
        <div class="upper-header-right right col-9 col-xs-12" id="login-true">
            <div class="right flex">
                <div class="pad-10-15"><a href="/golgonphp/user/account"><span>My account</span></a></div>
                <div class="pad-10-15"><a href="/golgonphp/management"><span>Management</span></a></div>
                <div class="pad-10-15"><a href="#" onclick="logout()"><span>Logout</span></a></div>
            </div>
        </div>
        
        <?php
        if(isset($_SESSION['user'])) {
            echo "<script>$('#login-false').hide()</script>";
            echo "<script>$('#login-true').show()</script>";
        } else {
            echo "<script>$('#login-false').show()</script>";
            echo "<script>$('#login-true').hide()</script>";
        }
        ?>
        
    </div>
</div>
<!--=========================   MAIN BAR  ==========================-->
<div id="lower-header">
    <div class="container flex">
        <!-- Main logo -->
        <div class="flex col-3 lower-header-logo col-xs-3 col-sm-3">
            <div class="flex image-wrapper col-5"><img src="/golgonphp/assets/images/main-logo.png"/></div>
        </div>
        <!-- Navigate-->
        <div class="flex col-7 lower-header-navigation col-xs-0 col-sm-0">
            <!--================= Links ====================-->
            <div class="flex col-10">
                <div class="col-2"><a href="/golgonphp/home/index"><i class="fa fa-home wclr font-1-5"></i></a></div>
                <div class="col-3 wclr bold">
                    <a href="/golgonphp/home/index#home-news">
                        <div class="flex-col">
                            <div class="header-nav-icon col-12"><img src="/golgonphp/assets/images/circle-bubbles/icons8-new-100.png"/><n></n></div>
                            <div class="header-nav-title col-12 font-1">WHAT'S NEWS ?</div>
                        </div
                    </a>
                </div>
                <div class="col-3 wclr bold">
                    <a href="/golgonphp/home/index#home-info">
                        <div class="flex-col">
                            <div class="header-nav-icon col-12"><img src="/golgonphp/assets/images/circle-bubbles/icons8-discount-100.png"/><n></n></div>
                            <div class="header-nav-title col-12 font-1">SALES</div>
                        </div>
                    </a>
                </div>
                <div class="col-3 wclr bold">
                    <a href="/golgonphp/home/contact">
                        <div class="flex-col">
                            <div class="header-nav-icon col-12"><img src="/golgonphp/assets/images/circle-bubbles/icons8-help-100.png"/><n></n></div>
                            <div class="header-nav-title col-12 font-1">CONTACT</div>
                        </div>
                    </a>
                </div>
                <div class="col-3 wclr bold">
                    <a href="/golgonphp/home/about">
                        <div class="flex-col">
                            <div class="header-nav-icon col-12"><img src="/golgonphp/assets/images/circle-bubbles/icons8-about-100.png"/><n></n></div>
                            <div class="header-nav-title col-12 font-1">ABOUT US</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Cart -->
        <div class="col-0 col-xs-4 col-sm-6"></div>
        <div class="col-2 cart lower-header-cart col-xs-4 col-sm-4">
            <div class="col-10 flex col-xs-12">
                <div class="col-4 brdr pointer col-xs-8 col-sm-5">
                    <a href="/golgonphp/home/cart"><div class="image-wrapper"><img src="/golgonphp/assets/images/cart.png"/></div></a>
                </div>
                <div class="col-8 flex-col col-xs-4 col-sm-7 cart-text">
                    <div class="wclr bold">CART</div>
                    <div class="col-11 num-cart">0 <span class="col-xs-0 col-sm-12">product(s)</span></div>
                </div>
            </div>
        </div>
        <!-- bars -->
        <div class="bars-icon col-xs-1 col-sm-1">
            <span id="bars-icon-i" class="fa fa-bars wclr fa-2x" onclick="responsiveCollapse()"></span>
            <div id="navpanel" class="cnavpanel">
                <ul class="navpanel-ul flex-col">
                    <li class="navpanel-li">
                        <a href="/golgonphp/home">
                            <i class="fa fa-home wclr font-1-5 brdb-hover"></i>
                        </a>
                    </li>
                    <li class="navpanel-li">
                        <a href="/golgonphp/home/news">
                            <div class="flex">
                                <div class="col-12 col-xs-12 col-sm-12 font-1 brdb-hover">WHAT'S NEWS ?</div>
                            </div>
                        </a>
                    </li>
                    <li class="navpanel-li">
                        <a href="/golgonphp/home/sales">
                            <div class="flex">
                                <div class="col-12 col-xs-12 col-sm-12 font-1 brdb-hover">SALES</div>
                            </div>
                        </a>
                    </li>
                    <li class="navpanel-li">
                        <a href="/golgonphp/home/contact">
                            <div class="flex">
                                <div class="col-12 col-xs-12 col-sm-12 font-1 brdb-hover">CONTACT</div>
                            </div>
                        </a>
                    </li>
                    <li class="navpanel-li">
                        <a href="/golgonphp/home/about">
                            <div class="flex">
                                <div class="col-12 col-xs-12 col-sm-12 font-1 brdb-hover">ABOUT US</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Search bar + advertisement-->
<div id="extrabar">
    <div class="container">
        <div class="flex col-12 inner col-xs-12 col-sm-12">
            <div id="bar-nav" class="col-1">
                <div id="bar-nav-btn"><i class="fa fa-2x fa-bars"></i></div>
                <div id="bar-nav-panel">
                    <?php include('navigation.php') ?>
                </div>
            </div>
            <div class="col-5 flex col-xs-12 col-sm-12" id="search-box">
                <div class="relative col-12 col-xs-12 col-sm-12">
                    <input placeholder="Input product name, keywords, ..."/>
                    <button><i class="fas fa-search fa-lg pointer"></i></button>
                </div>
            </div>
            <div class="col-3 flex inner-parent-div col-xs-12 col-sm-5">
                <div class="col-3 adqc-1 adqc"></div>
                <div class="col-6 col-xs-5 inner-parent-div-text">Special flate guarantee</div>
            </div>
            <div class="col-3 flex inner-parent-div col-xs-12 col-sm-5">
                <div class="col-3 adqc-2 adqc"></div>
                <div class="col-6 col-xs-5 inner-parent-div-text">Money back guarantee</div>
            </div>
            <div class="col-3 flex inner-parent-div col-xs-12 col-sm-5">
                <div class="col-3 adqc-3 adqc"></div>
                <div class="col-5 col-xs-5 inner-parent-div-text">Free local shipping</div>
            </div>
            <div class="col-3 flex-col inner-parent-div col-xs-12 col-sm-8">
                <div class="col-12 flex">
                    <span class="col-2 contact-phone"></span>
                    <span class="pad-5-5">(+084) 38 9436 556</span>
                </div>
                <div class="col-12 flex">
                    <span class="col-2 contact-mail"></span>
                    <span class="pad-5-5">skiddyvn@gmail.com</span>
                </div>
                <div class="col-12 flex">
                    <span class="col-2 contact-address"></span>
                    <span class="pad-5-5">Km10 Nguyễn Trãi Street</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!---Login/Register--->
<div id="login" class="modal">
    <span class="close" onclick="document.getElementById('login').style.display = 'none'">&times;</span>
    <!--Login-->
    <div id="modal-child1" class="modal-content1" action="/golgonphp/user/login" method="post">
        <div class="switch-button">
            <button id="btn-log1" onclick="switchbutton1()" type="button">LOGIN</button>
            <button id="btn-register1" onclick="switchbutton2()" type="button">SIGN UP</button>
        </div>
        <div class="container">
            <img src="/golgonphp/assets/images/avatar.png" alt="avatar"></img><br>
             <form>
                <label for="uname">USERNAME(*)</label>
                <input type="text" placeholder="Enter username" id="login-username" required>
                <label for="psw">PASSWORD(*)</label>
                <input type="password" placeholder="Enter password" id="login-password" required>
             </form>
            <button type="submit" name="login" id="login-button" onclick="login()">Log In</button>
        </div>
    </div>
    <!--Register-->
    <form id="modal-child2" class="modal-content2" action="/golgonphp/user/register" method="post">
        <div class="switch-button">
            <button id="btn-log2" onclick="switchbutton1()" type="button">LOGIN</button>
            <button id="btn-register2" onclick="switchbutton2()" type="button">SIGN UP</button>
        </div>
        <div class="container">
            <label for="uname">Fullname</label>
            <div>
                <input type="text" name="tfirstname" placeholder="Firstname" required>
                <input type="text" name="tlastname" placeholder="Lastname" required>
            </div>
            <label for="mail">Mail</label>
            <div>
                <span class="error-message"></span>
                <input id="temail" type="text" name="tmail" placeholder="Mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,}$" required>  
            </div>
            <label for="uname">Username</label>
            <input type="text" name="tusername" placeholder="Enter username" required>
            <label for="psw">Password</label>
            <input type="password" name="tpassword" placeholder="Enter password" required>
            <label for="psw">Confirm Password</label>
            <input type="password" name="tpasswordconfirm" placeholder="Confirm password" required>
            <button type="submit" name="register">Register</button>
        </div>
    </form>
</div>
</div>
<!--%======================== NAVIGATION ==============================%-->

<div id="sticky-header" class="col-12" style="margin:15px auto;">
    <div class="container">
        <div class="col-12">
            <div>
                !--%======================== NAVIGATION ==============================%-->
                    <?php include('navigation.php'); ?>
            </div>
            <div>
                <div class="col-6 flex col-xs-12 col-sm-12" id="search-box">
                <div class="relative col-12 col-xs-12 col-sm-12">
                    <input placeholder="Input product name, keywords, ..."/>
                    <button><i class="fas fa-search fa-lg pointer"></i></button>
                </div>
            </div>
            </div>
            <div>
                <!--===== Chua login =====-->
                <div class="upper-header-right right col-9 col-xs-12" id="login-false">
                    <div class="right flex">
                        <div id="signin" class="pad-10-15" onclick="clicklogin1()">Sign In</div>
                        <div id="register" class="pad-10-15" onclick="clicklogin2()">Register an account</div>
                    </div>
                </div>
                <!--===== Login thanh cong =====-->
                <div class="upper-header-right right col-9 col-xs-12" id="login-true">
                    <div class="right flex">
                        <div class="pad-10-15"><a href="/golgonphp/user/account"><span>My account</span></a></div>
                        <div class="pad-10-15"><a href="/golgonphp/management"><span>Management</span></a></div>
                        <div class="pad-10-15"><a href="#" onclick="logout()"><span>Logout</span></a></div>
                    </div>
                </div>

                <?php
                if (isset($_SESSION['user'])) {
                    echo "<script>$('#login-false').hide()</script>";
                    echo "<script>$('#login-true').show()</script>";
                } else {
                    echo "<script>$('#login-false').show()</script>";
                    echo "<script>$('#login-true').hide()</script>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="/golgonphp/assets/js/navigation.js"></script>