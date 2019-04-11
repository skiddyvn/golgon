<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GOLGON | GAMING GEAR & PC COMPONENTS</title>
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/navigation.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/_header.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/navigation.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/shared.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/home.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/_footer.css">

        <link rel="icon" href="/golgonphp/assets/images/game-console.png">
        <link rel="stylesheet" href="/golgonphp/assets/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/golgonphp/assets/js/smooth.js"></script>
        <script src="/golgonphp/assets/js/jquery3-3-1.min.js"></script>
        <script src="/golgonphp/assets/js/home.js"></script>
        <script>
            $(document).ready(function(){
                $(div).fadeIn();
            });
        </script>
    </head>
    <body class="scene_element scene_element--fadeinright">
        <!--%======================== HEADER ==============================%-->
        <?php require_once('views/public/_header.php'); ?>
        <!--%======================== HOME UPPER ==============================%-->
        <div id="home-upper" class="col-12 col-xs-12 col-sm-12">
            <div class="container clearfix">
                <div id="home-main-content" class="col-12 col-xs-12 col-sm-12 clearfix">
                    <!--%======================== NAVIGATION ==============================%-->
                    <?php require_once('navigation.php'); ?>
                    <!--%======================== SLIDER ==============================%-->
                    <div id="slider-tab" class="col-6-5 col-xs-12 col-sm-12">
                        <div class="slider-tab-inner col-12 col-xs-12 col-sm-12">
                            <!--%============= TAB 1 =================%-->
                            <div class="col-12 col-xs-12 col-sm-12 slide-0 flex-col">
                                <?php
                                $arr = array(9, 2, 12, 14, 5, 8);
                                for ($i = 0; $i < count($arr); $i++) {
                                    echo "<div class='slide-1 slide-1-1 col-12 col-xs-12 col-sm-12 animate-opacity'>
                                                  <img src='/golgonphp/assets/images/events/event" . $arr[$i] . ".jpg'></img>
                                              </div>";
                                }
                                ?>
                                <div class="slider-event-button clearfix">
                                    <div class="slider-event-button-pre left"><button onclick="plus(1, -1)"><i class="fa fa-angle-left"></i></button></div>
                                    <div class="slider-event-button-nex right"><button onclick="plus(1, +1)"><i class="fa fa-angle-right"></i></button></div>
                                </div>
                                <div class="dots col-3 flex">
                                    <?php
                                    for ($i = 0; $i < count($arr); $i++) {
                                        echo "<div class='dot-item dot-1'></div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!--%========== TAB 2 =============%-->
                            <div class="col-12 col-xs-12 col-sm-12 slide-0 animate-fading">
                                <img src="/golgonphp/assets/images/events/event6.jpg"></img>
                            </div>
                            <!--%========== TAB 3 =============%-->
                            <div class="col-12 col-xs-12 col-sm-12 slide-0 animate-fading">
                                <img src="/golgonphp/assets/images/events/event7.jpg"></img>
                            </div>
                            <!--%========== TAB 4 =============%-->
                            <div class="col-12 col-xs-12 col-sm-12 slide-0 flex-col">
                                <?php
                                $arr2 = array(13, 11, 10, 15);
                                for ($i = 0; $i < count($arr2); $i++) {
                                    echo "<div class='slide-1 slide-1-2 col-12 col-xs-12 col-sm-12 animate-opacity'>
                                                  <img src='/golgonphp/assets/images/events/event" . $arr2[$i] . ".jpg'></img>
                                              </div>";
                                }
                                ?>
                                <div class="slider-event-button clearfix">
                                    <div class="slider-event-button-pre left"><button onclick="plus(2, -1)"><i class="fa fa-angle-left"></i></button></div>
                                    <div class="slider-event-button-nex right"><button onclick="plus(2, +1)"><i class="fa fa-angle-right"></i></button></div>
                                </div>
                                <div class="dots col-2 flex">
                                    <?php
                                    for ($i = 0; $i < count($arr2); $i++) {
                                        echo "<div class='dot-item dot-2'></div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!--%========== TAB 5 =============%-->
                            <div class="col-12 col-xs-12 col-sm-12 slide-0 animate-fading">
                                <img src="/golgonphp/assets/images/events/event1.jpg"></img>
                            </div>
                        </div>
                        <!--%=============== TABS CLICK =================%-->
                        <div class="tabs col-xs-12 col-sm-12">
                            <div class="tab-item flex" onclick="currentevent(1);">Greater - better for April 2019</div>
                            <div class="tab-item flex" onclick="currentevent(2);">Experience intelligent life</div>
                            <div class="tab-item flex" onclick="currentevent(3);">Be ready with Asus 4/2019</div>
                            <div class="tab-item flex" onclick="currentevent(4);">Get crazy with the beast sellers</div>
                            <div class="tab-item flex" onclick="currentevent(5);">Discount 30% with QRPay</div>
                        </div>
                    </div>
                    <!--%=========== side ad ==============%-->
                    <div id="advertisement" class="right col-3">
                        <div class="row-right flex-col col-12 col-xs-12 col-sm-12">
                            <a href="#"><img src="/golgonphp/assets/images/events/banner06.jpg"/></a>
                            <a href="#"><img src="/golgonphp/assets/images/events/banner05.jpg"/></a>
                            <a href="#"><img src="/golgonphp/assets/images/events/banner04.jpg"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--%======================== HOME NEWS ==============================%-->
        <div id="home-news" class="col-12">
            <div class="container">
                <div class="col-12">
                    <!-- % ================  Marquee  ================== % -->
                    <div class="home-marquee-ad flex">
                        <span class="home-marque-notify animate-pulse"></span>
                        <marquee class="home-marquee" behavior="scroll" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                            <a href="#">Buy 1 get 1 only this week!</a>
                            <a href="#">Sales up to 10% when buying combos of components - Click now!</a>
                            <a href="#">Gifts value up to 5 billions - Limited - April 2019</a>
                            <a href="#">Special price for Asus flagship products only in Golgon. Take a look!</a>  
                        </marquee>
                    </div>
                    <!-- % =============  New collection  ============== % -->
                    <div class="trending col-12">
                        <div class="trending col-12">
                            <div class="trending-title flex">
                                <div class="font-2">Hi-end Collection</div>
                                <div>New Arrival</div>
                                <div>Special</div>
                            </div>
                            <div class="trending-products">
                                <div class="products">
                                    <?php
                                    for ($i = 0; $i < count($listNewProducts); $i++) {
                                        $p = new Product();
                                        $p->setPid($listNewProducts[$i]['pid']);
                                        $p->setPimage($listNewProducts[$i]['pimage']);
                                        $p->setPname($listNewProducts[$i]['pname']);
                                        $p->setPprice($listNewProducts[$i]['pprice']);
                                        echo'<div class="product-card">
                                            <div class="product-image">
                                                 <img src=" ' . $p->getPimage() . ' "/>
                                                <div class="inner-content-image">
                                                    <a href="detailProduct/' . $p->getPid() . '">
                                                        <button class="addtwo" type="button">Buy Product</button>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="detailProduct/' . $p->getPid() . '">
                                                <div class="product-info">
                                                    <h5>' . $p->getPname() . '</h5>
                                                    <span class="pprice">
                                                        ' . number_format($p->getPprice(), 0, '', '.') . ' VND
                                                    </span>
                                                </div>
                                            </a>
                                        </div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="home-body">
            <div class="container">
                <div class="home-body-content col-12 col-xs-12 col-sm-12">
                    <!-- % ===========  Desktop  ============== % -->
                    <div class="home-body-block col-12 col-xs-12 col-sm-12">
                        <div class="products">
                            <?php
                            for ($i = 0; $i < count($listProducts); $i++) {
                                $p = new Product();
                                $p->setPid($listProducts[$i]['pid']);
                                $p->setPimage($listProducts[$i]['pimage']);
                                $p->setPname($listProducts[$i]['pname']);
                                $p->setPprice($listProducts[$i]['pprice']);
                                echo'<div class="product-card">
                                    <div class="product-image">
                                        <img src=" ' . $p->getPimage() . ' "/>
                                        <div class="inner-content-image">
                                            <a href="detailProduct/' . $p->getPid() . '">
                                                <button class="addtwo" type="button">Buy Product</button>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="detailProduct/' . $p->getPid() . '">
                                        <div class="product-info">
                                            <h5>' . $p->getPname() . '</h5>
                                            <span class="pprice">
                                                ' . number_format($p->getPprice(), 0, '', '.') . ' VND
                                            </span>
                                        </div>
                                    </a>
                                </div>';
                            }
                            ?>
                        </div>
                    </div>
                    <!-- % ===========  Desktop  ============== % -->
                </div>
            </div>
        </div>
        <!--%======================== FOOTER ==============================%-->
        <?php require_once('views/public/_footer.php'); ?>
        <!--%======================== JS ==============================%-->
        <script src="/golgonphp/assets/js/home-tab-slider-inner-slide.js"></script>
        <script src="/golgonphp/assets/js/home-tab-slider.js"></script>
    </body>
</html>
