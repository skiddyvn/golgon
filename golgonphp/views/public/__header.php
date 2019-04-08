<!--================   TOP BAR  ===================-->
<div id="upper-header" class="clearfix">
    <div class="container">
        <!--=========================   LOGO  ==========================-->
        <div class="upper-header-left left col-3 col-xs-0">
            <a href="/golgonphp/home"><div class="brda-2-dashed logo-corner pointer clearfix"></div></a>
        </div>
        <!--===============   INFORMATION//LOGIN//REGISTER  ============-->
        <?php
        isset($_SESSION['user']) ? $_SESSION['user'] : null;
        if (isset($_SESSION['user']) ? $_SESSION['user'] : null == null) {
            ?>
            <div class="upper-header-right right col-9 col-xs-12 login-false">
                <div class="right flex">
                    <div id="signin" class="pad-10-15" onclick="clicklogin1()">Sign In</div>
                    <div id="register" class="pad-10-15" onclick="clicklogin2()">Register an account</div>
                </div>
            </div>
            <?php
            echo "<script>$('.login-false').show();$('.login-true').hide();</script>";
        } else {
            echo "<script>$('.login-false').hide();$('.login-true').show();</script>";
            ?>
            <div class="upper-header-right right col-9 col-xs-12 login-true">
                <div class="right flex">
                    <div class="pad-10-15">My account</div>
                    <div class="pad-10-15">Management</div>
                    <div class="pad-10-15">Logout</div>
                </div>
            </div>
<?php } ?>
    </div>
</div>
<!--=========================   MAIN BAR  ==========================-->
<div id="lower-header">
    <div class="container flex">
        <!-- Main logo -->
        <div class="flex col-3 lower-header-logo col-xs-3 col-sm-3">
            <div class="flex image-wrapper col-5"><img src="assets/images/main-logo.png"/></div>
        </div>
        <!-- Navigate-->
        <div class="flex col-7 lower-header-navigation col-xs-0 col-sm-0">
            <!--================= Links ====================-->
            <div class="flex col-10">
                <div class="col-2"><a href="/golgonphp/home"><i class="fa fa-home w-color font-1-5 brdb-hover"></i></a></div>
                <div class="col-3 w-color bold">
                    <a href="home/news">
                        <div class="flex">
                            <div class="col-3"></div>
                            <div class="col-9 font-1 brdb-hover">WHAT'S NEWS ?</div>
                        </div>
                    </a>
                </div>
                <div class="col-2 w-color bold">
                    <a href="home/sales">
                        <div class="flex">
                            <div class="col-3"></div>
                            <div class="col-9 font-1 brdb-hover">SALES</div>
                        </div>
                    </a>
                </div>
                <div class="col-2 w-color bold">
                    <a href="home/contact">
                        <div class="flex">
                            <div class="col-3"></div>
                            <div class="col-9 font-1 brdb-hover">CONTACT</div>
                        </div>
                    </a>
                </div>
                <div class="col-2 w-color bold">
                    <a href="home/about">
                        <div class="flex">
                            <div class="col-3"></div>
                            <div class="col-9 font-1 brdb-hover">ABOUT US</div>
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
                    <a href="home/cart"><div class="image-wrapper"><img src="assets/images/cart.png"/></div></a>
                </div>
                <div class="col-8 flex-col col-xs-4 col-sm-7 cart-text">
                    <div class="w-color bold">CART</div>
                    <div class="col-11 num-cart">0 <span class="col-xs-0 col-sm-12">product(s)</span></div>
                </div>
            </div>
        </div>
        <!-- bars -->
        <div class="bars-icon col-xs-1 col-sm-1">
            <span id="bars-icon-i" class="fa fa-bars w-color fa-2x" onclick="responsiveCollapse()"></span>
            <div id="navpanel" class="cnavpanel">
                <ul class="navpanel-ul flex-col">
                    <li class="navpanel-li"><a href="/golgonphp/home"><i class="fa fa-home w-color font-1-5 brdb-hover"></i></a></li>
                    <li class="navpanel-li"><a href="home/news">
                            <div class="flex">
                                <div class="col-12 col-xs-12 col-sm-12 font-1 brdb-hover">WHAT'S NEWS ?</div>
                            </div>
                        </a></li>
                    <li class="navpanel-li"><a href="home/sales">
                            <div class="flex">
                                <div class="col-12 col-xs-12 col-sm-12 font-1 brdb-hover">SALES</div>
                            </div>
                        </a></li>
                    <li class="navpanel-li"><a href="home/contact">
                            <div class="flex">
                                <div class="col-12 col-xs-12 col-sm-12 font-1 brdb-hover">CONTACT</div>
                            </div>
                        </a></li>
                    <li class="navpanel-li"><a href="home/about">
                            <div class="flex">
                                <div class="col-12 col-xs-12 col-sm-12 font-1 brdb-hover">ABOUT US</div>
                            </div>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Search bar + advertisement-->
<div id="extrabar">
    <div class="container">
        <div class="flex col-12 inner col-xs-12 col-sm-12">
            <div class="col-6 flex col-xs-12 col-sm-12" id="search-box">
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
    <form id="modal-child1" class="modal-content1" action="user/login" method="post">
        <div class="switch-button">
            <button id="btn-log1" onclick="switchbutton1()" type="button">LOGIN</button>
            <button id="btn-register1" onclick="switchbutton2()" type="button">SIGN UP</button>
        </div>
        <div class="container">
            <img src="assets/images/avatar.png" alt="avatar"></img><br>
            <label for="uname">USERNAME(*)</label>
            <input type="text" placeholder="Enter username" name="login-username" required>
            <label for="psw">PASSWORD(*)</label>
            <input type="password" placeholder="Enter password" name="login-password" required>
            <button type="submit" name="login">Log In</button>
        </div>
    </form>
    <!--Register-->
    <form id="modal-child2" class="modal-content2" action="register.php" method="post">
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
                <input type="text" name="tmail" placeholder="Mail" required>
            </div>
            <label for="uname">Username</label>
            <input type="text" name="tusername" placeholder="Enter username" required>
            <label for="psw">Password</label>
            <input type="password" name="tpassword" placeholder="Enter password" required>
            <label for="psw">Confirm Password</label>
            <input type="password" name="tpasswordconfirm" placeholder="Confirm password" required>
            <button type="submit" onclick="register()">Register</button>
        </div>
    </form>
</div>