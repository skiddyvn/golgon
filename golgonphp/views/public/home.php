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
        <script src="/golgonphp/assets/js/start.js"></script>
        
    </head>
    <body class="scene_element-fadeInRight">
        <!--%======================== HEADER ==============================%-->
        <?php require_once('views/public/_header.php'); ?>
        <!--%======================== HOME UPPER ==============================%-->
        <div id="home-upper" class="col-12 col-xs-12 col-sm-12">
            <div class="container clearfix">
                <div id="home-main-content" class="col-12 col-xs-12 col-sm-12 clearfix">
                    <!--%======================== NAVIGATION ==============================%-->
                    <?php require('navigation.php'); ?>
                    <!--%======================== SLIDER ==============================%-->
                    <div id="slider-tab" class="col-6-6 col-xs-12 col-sm-12">
                        <div class="slider-tab-inner col-12 col-xs-12 col-sm-12">
                            <!--%============= TAB 1 =================%-->
                            <div class="col-12 col-xs-12 col-sm-12 slide-0 flex-col animate-opacity">
                                <?php
                                $arr = array(9, 2, 12, 14, 5, 8);
                                for ($i = 0; $i < count($arr); $i++) {
                                    echo "<div class='slide-1 slide-1-1 col-12 col-xs-12 col-sm-12 animate-opacity '>
                                                  <img src='/golgonphp/assets/images/events/event" . $arr[$i] . ".jpg'></img>
                                              </div>";
                                }
                                ?>
                                <div class="slider-event-button clearfix">
                                    <div class="slider-event-button-pre left"><button id="plus"><i class="fa fa-angle-left"></i></button></div>
                                    <div class="slider-event-button-nex right"><button id="minus"><i class="fa fa-angle-right"></i></button></div>
                                </div>
                                <div class="dots col-3-5 flex">
                                    <div id="stop">Stop</div>
                                    <?php
                                    for ($i = 0; $i < count($arr); $i++) {
                                        echo "<div class='dot-item dot-1'></div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <!--%========== TAB 2 =============%-->
                            <div class="col-12 col-xs-12 col-sm-12 slide-0 animate-opacity">
                                <img src="/golgonphp/assets/images/events/event6.jpg"></img>
                            </div>
                            <!--%========== TAB 3 =============%-->
                            <div class="col-12 col-xs-12 col-sm-12 slide-0 animate-opacity">
                                <img src="/golgonphp/assets/images/events/event7.jpg"></img>
                            </div>
                            <!--%========== TAB 4 =============%-->
                            <div class="col-12 col-xs-12 col-sm-12 slide-0 flex-col animate-opacity">
                                <?php
                                $arr2 = array(13, 11, 10, 15);
                                for ($i = 0; $i < count($arr2); $i++) {
                                    echo "<div class='slide-1 slide-1-2 col-12 col-xs-12 col-sm-12 animate-opacity'>
                                                  <img src='/golgonphp/assets/images/events/event" . $arr2[$i] . ".jpg'></img>
                                              </div>";
                                }
                                ?>
                                <div class="slider-event-button clearfix">
                                    <div class="slider-event-button-pre left"><button onclick="plus(-1)"><i class="fa fa-angle-left"></i></button></div>
                                    <div class="slider-event-button-nex right"><button onclick="plus(+1)"><i class="fa fa-angle-right"></i></button></div>
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
                            <div class="col-12 col-xs-12 col-sm-12 slide-0 animate-opacity">
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
                            <a href="#" class="light-slide"><img src="/golgonphp/assets/images/events/banner06.jpg"/></a>
                            <a href="#" class="light-slide"><img src="/golgonphp/assets/images/events/banner05.jpg"/></a>
                            <a href="#" class="light-slide"><img src="/golgonphp/assets/images/events/banner04.jpg"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- % ================  Marquee  ================== % -->
        <div class="home-marquee-frame">
            <div class="container">
                <div class="home-marquee-ad flex">
                    <span class="home-marque-notify animate-pulse"></span>
                    <marquee class="home-marquee" behavior="scroll" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                        <a href="#">Buy 1 get 1 only this week!</a>
                        <a href="#">Sales up to 10% when buying combos of components - Click now!</a>
                        <a href="#">Gifts value up to 5 billions - Limited - April 2019</a>
                        <a href="#">Special price for Asus flagship products only in Golgon. Take a look!</a>  
                    </marquee>
                </div>
            </div>
        </div>
        <!--%======================== HOME NEWS ==============================%-->
        <div id="home-news" class="col-12">
            <div class="container">
                <div class="col-12">
                    <!-- % =============  New collection  ============== % -->
                    <div class="trending col-12 col-xs-12 col-sm-12">
                        <div class="trending col-12 col-xs-12 col-sm-12">
                            <div class="trending-title flex">
                                <div class="font-2 col-xs-12 col-sm-12">Hi-end Collection</div>
                                <div class="list-new-select col-xs-12 col-sm-12">
                                    <a href="#new1" class="selected">New Arrival</a>
                                    <span class="col-xs-12 col-sm-12">Don't forget the lastest hi-tech items everyday!</span>
                                </div>
                            </div>
                            <div class="tr-banner col-12 light-slide">
                                <img src="/golgonphp/assets/images/events/banner-big-05.jpg"/>
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
                                        $p->setPbrand($listNewProducts[$i]['pbrand']);
                                        $p->setPcategory($listNewProducts[$i]['pcategory']);
                                        echo'<div class="product-card col-2-2">
                                            <div class="product-image">
                                                 <img src=" '.$p->getPimage().' "/>
                                                <div class="inner-content-image">
                                                    <div class="upper-block upper-block-2 animate-e-fadeInRight">'.$p->getPbrand().'</div>
                                                    <div class="upper-block upper-block-1 animate-e-fadeInRight">'.$p->getPcategory().'</div>
                                                    <a href="detailProduct/' . $p->getPid() . '">
                                                        <button class="upper-block animate-e-fadeInLeft">Buy Product</button>
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
        <!--%======================== HOME BODY (4 blocks)==============================%-->
        <div id="home-body">
            <div class="container">
                <div class="home-body-content col-12 col-xs-12 col-sm-12">
           <!-- % ==========================  DESKTOP  =============================== % -->
           
                    <div class="home-body-block col-12 col-xs-12 col-sm-12 clearfix">
                        <div class="home-body-side-banner col-2-5 col-xs-0 col-sm-0 left">
                            <img src="/golgonphp/assets/images/events/sidebanner3.png"/>
                        </div>
                        <div class="col-9-5 left pad-0-15">
                            <div class="trending-title flex">
                                <div class="trending-title-left col-10 flex">
                                    <div class="font-2">Personal computer</div>
                                    <div>
                                        <a class="cat-tab selected" href="#tab1">Desktop</a>
                                        <a class="cat-tab" href="#tab2">Laptop</a>
                                    </div>
                                </div>
                                <div class="prev-next col-2">
                                    <span class="prslide-prev"><i class="fa fa-chevron-left"></i></span>
                                    <span class="prslide-next"><i class="fa fa-chevron-right"></i></span>
                                </div>
                            </div>
                            <?php
                            for ($j = 1; $j <= 2 ; $j++) {
                                echo '<div id="tab'.$j.'" class="products-line row-1">';
                                echo     '<div class="products abs">';
                                    $list = ${listTab.$j};
                                    for ($i = 0; $i < count($list); $i++) {
                                    $p = new Product();
                                    $p->setPid($list[$i]['pid']);
                                    $p->setPimage($list[$i]['pimage']);
                                    $p->setPname($list[$i]['pname']);
                                    $p->setPprice($list[$i]['pprice']);
                                    $p->setPbrand($list[$i]['pbrand']);
                                    $p->setPcategory($list[$i]['pcategory']);
                                    echo'<div class="product-card col-2-7">
                                            <div class="product-image">
                                                 <img src=" ' . $p->getPimage() . ' "/>
                                                <div class="inner-content-image">
                                                    <div class="upper-block upper-block-2 animate-e-fadeInRight">' . $p->getPbrand() . '</div>
                                                    <div class="upper-block upper-block-1 animate-e-fadeInRight">' . $p->getPcategory() . '</div>
                                                    <a href="detailProduct/' . $p->getPid() . '">
                                                        <button class="upper-block animate-e-fadeInLeft">Buy Product</button>
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
                            <?php
                                    echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
           <!-- % ==========================  Line quang cao  =============================== % -->
                    <div class="flex col-12 qcline">
                        <div class="col-4 col-xs-12 col-sm-12 light-slide"><img src="/golgonphp/assets/images/events/banner03.png"/></div>
                        <div class="col-4 col-xs-12 col-sm-12 light-slide"><img src="/golgonphp/assets/images/events/banner-big-02.jpg"/></div>
                        <div class="col-4 col-xs-12 col-sm-12 light-slide"><img src="/golgonphp/assets/images/events/banner-big-04.jpg"/></div>
                    </div>
            <!-- % ==========================  COMPONENTS  =============================== % -->
                    <div class="home-body-block col-12 col-xs-12 col-sm-12 clearfix">
                        <div class="col-9-5 left pad-0-15">
                            <div class="trending-title flex">
                                <div class="trending-title-left flex col-10 col-xs-12 col-sm-12">
                                    <div class="font-2 col-xs-12 col-sm-12">Components</div>
                                    <div class="col-xs-12 col-sm-12">
                                        <a class="cat-tab-2 selected" href="#tab3">Mainboard</a>
                                        <a class="cat-tab-2" href="#tab4">VGA</a>
                                        <a class="cat-tab-2" href="#tab5">CPU</a>
                                        <a class="cat-tab-2" href="#tab6">RAM</a>
                                        <a class="cat-tab-2" href="#tab7">SSD</a>
                                        <a class="cat-tab-2" href="#tab8">HDD</a>
                                    </div>
                                </div>
                                <div class="prev-next col-2">
                                    <span class="prslide-prev"><i class="fa fa-chevron-left"></i></span>
                                    <span class="prslide-next"><i class="fa fa-chevron-right"></i></span>
                                </div>
                            </div>
                            <?php
                            for ($j = 3; $j <= 8 ; $j++) {
                                echo '<div id="tab'.$j.'" class="products-line row-2">';
                                echo     '<div class="products abs">';
                                    $list = ${listTab.$j};
                                    for ($i = 0; $i < count($list); $i++) {
                                    $p = new Product();
                                    $p->setPid($list[$i]['pid']);
                                    $p->setPimage($list[$i]['pimage']);
                                    $p->setPname($list[$i]['pname']);
                                    $p->setPprice($list[$i]['pprice']);
                                    $p->setPbrand($list[$i]['pbrand']);
                                    $p->setPcategory($list[$i]['pcategory']);
                                    echo'<div class="product-card col-2-7">
                                            <div class="product-image">
                                                 <img src=" ' . $p->getPimage() . ' "/>
                                                <div class="inner-content-image">
                                                    <div class="upper-block upper-block-2 animate-e-fadeInRight">' . $p->getPbrand() . '</div>
                                                    <div class="upper-block upper-block-1 animate-e-fadeInRight">' . $p->getPcategory() . '</div>
                                                    <a href="detailProduct/' . $p->getPid() . '">
                                                        <button class="upper-block animate-e-fadeInLeft">Buy Product</button>
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
                            <?php
                                    echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <div class="home-body-side-banner col-2-5 col-xs-0 col-sm-0 left">
                            <img src="/golgonphp/assets/images/events/sidebanner9.jpg"/>
                        </div>
                    </div>
                    <!-- % ==========================  GEARS  =============================== % -->
                    <div class="home-body-block col-12 col-xs-12 col-sm-12 clearfix">
                        <div class="home-body-side-banner col-2-5 col-xs-0 col-sm-0 left">
                            <img src="/golgonphp/assets/images/events/sidebanner8.jpg"/>
                        </div>
                        <div class="col-9-5 left pad-0-15">
                            <div class="trending-title flex">
                                <div class="trending-title-left flex col-10 col-xs-12 col-sm-12">
                                    <div class="font-2 col-xs-12 col-sm-12">Gears</div>
                                    <div class="col-xs-12 col-sm-12">
                                        <a class="cat-tab-3 selected" href="#tab9">Monitor</a>
                                        <a class="cat-tab-3" href="#tab10">Keyboard</a>
                                        <a class="cat-tab-3" href="#tab11">Mouse</a>
                                        <a class="cat-tab-3" href="#tab12">Headphone</a>
                                    </div>
                                </div>
                                <div class="prev-next col-2">
                                    <span class="prslide-prev"><i class="fa fa-chevron-left"></i></span>
                                    <span class="prslide-next"><i class="fa fa-chevron-right"></i></span>
                                </div>
                            </div>
                            <?php
                            for ($j = 9; $j <= 12 ; $j++) {
                                echo '<div id="tab'.$j.'" class="products-line row-3">';
                                echo     '<div class="products abs">';
                                    $list = ${listTab.$j};
                                    for ($i = 0; $i < count($list); $i++) {
                                    $p = new Product();
                                    $p->setPid($list[$i]['pid']);
                                    $p->setPimage($list[$i]['pimage']);
                                    $p->setPname($list[$i]['pname']);
                                    $p->setPprice($list[$i]['pprice']);
                                    $p->setPbrand($list[$i]['pbrand']);
                                    $p->setPcategory($list[$i]['pcategory']);
                                    echo'<div class="product-card col-2-7">
                                            <div class="product-image">
                                                 <img src=" ' . $p->getPimage() . ' "/>
                                                <div class="inner-content-image">
                                                    <div class="upper-block upper-block-2 animate-e-fadeInRight">' . $p->getPbrand() . '</div>
                                                    <div class="upper-block upper-block-1 animate-e-fadeInRight">' . $p->getPcategory() . '</div>
                                                    <a href="detailProduct/' . $p->getPid() . '">
                                                        <button class="upper-block animate-e-fadeInLeft">Buy Product</button>
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
                            <?php
                                    echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <!-- % ==========================  OTHERS  =============================== % -->
                    <div class="home-body-block col-12 col-xs-12 col-sm-12 clearfix">
                        <div class="col-9-5 left pad-0-15">
                            <div class="trending-title flex">
                                <div class="trending-title-left flex col-10 col-xs-12 col-sm-12">
                                    <div class="font-2 col-xs-12 col-sm-12">Others</div>
                                    <div class="col-xs-12 col-sm-12">
                                        <a class="cat-tab-4 selected" href="#tab13">Cooling</a>
                                        <a class="cat-tab-4" href="#tab14">Console</a>
                                        <a class="cat-tab-4" href="#tab15">Accessories</a>
                                    </div>
                                </div>
                                <div class="prev-next col-2">
                                    <span class="prslide-prev"><i class="fa fa-chevron-left"></i></span>
                                    <span class="prslide-next"><i class="fa fa-chevron-right"></i></span>
                                </div>
                            </div>
                            <?php
                            for ($j = 13; $j <= 15 ; $j++) {
                                echo '<div id="tab'.$j.'" class="products-line row-4">';
                                echo     '<div class="products abs">';
                                    $list = ${listTab.$j};
                                    for ($i = 0; $i < count($list); $i++) {
                                    $p = new Product();
                                    $p->setPid($list[$i]['pid']);
                                    $p->setPimage($list[$i]['pimage']);
                                    $p->setPname($list[$i]['pname']);
                                    $p->setPprice($list[$i]['pprice']);
                                    $p->setPbrand($list[$i]['pbrand']);
                                    $p->setPcategory($list[$i]['pcategory']);
                                    echo'<div class="product-card col-2-7">
                                            <div class="product-image">
                                                 <img src=" ' . $p->getPimage() . ' "/>
                                                <div class="inner-content-image">
                                                    <div class="upper-block upper-block-2 animate-e-fadeInRight">' . $p->getPbrand() . '</div>
                                                    <div class="upper-block upper-block-1 animate-e-fadeInRight">' . $p->getPcategory() . '</div>
                                                    <a href="detailProduct/' . $p->getPid() . '">
                                                        <button class="upper-block animate-e-fadeInLeft">Buy Product</button>
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
                            <?php
                                    echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <div class="home-body-side-banner col-2-5 col-xs-0 col-sm-0 left">
                            <img src="/golgonphp/assets/images/events/sidebanner7.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--%======================== EXTRA PANEL ==============================%-->
        <div id="home-info" class="col-12 col-xs-12 col-sm-12">
            <div class="container">
                <div class="col-12 col-xs-12 col-sm-12 pad-15-0">
                    <div class="home-info-upper col-12 col-xs-12 col-sm-12">
                        <div class="home-info-upper-title">Golgon Services</div>
                        <div class="home-info-upper-line">
                            <span>Free shipping</span>
                            <span>-</span>
                            <span>Long-term guarantees</span>
                            <span>-</span>
                            <span>Full of after sales services</span>
                        </div>
                    </div>
                    <div class="home-info-lower col-12 col-xs-12 col-sm-12 flex-col">
                        <div class="inner-lower col-12 clearfix">
                            <div class="inner-lower-block col-4 left">
                                <div class="inner-lower-title col-12 col-xs-12 col-sm-12">Delivery</div>
                                <div class="inner-lower-content flex-col col-10 col-xs-12 col-sm-12">
                                    <span>// Free shipping for all orders 1.000.000 VND or above</span>
                                    <span>// Fees discount within 2 kilometres</span>
                                    <span>// Arrive in 3 days or less</span>
                                    <span>// Returns within 48 hours if occurring any errors</span>
                                </div>
                            </div>
                            <div class="inner-lower-block col-4 left">
                                <div class="inner-lower-title col-12 col-xs-12 col-sm-12">Check our fanpage</div>
                                <div class="inner-lower-content flex-col col-10 col-xs-12 col-sm-12">
                                    <span>// Online market for trading and selling items</span>
                                    <span>// Special events, Give Away, .. by both administrators and members</span>
                                    <span>// Exchange Knowledge and Experience Or get Advice from others</span>
                                </div>
                            </div>
                            <div class="inner-lower-block col-4 left">
                                <div class="inner-lower-title col-12 col-xs-12 col-sm-12">Announcement</div>
                                <div class="inner-lower-content flex-col col-10 col-xs-12 col-sm-12">
                                    <span>// Give Away GTX 1050ti to 2060 only 5 days !! Don't miss it <a href="https://www.facebook.com/Golgonpc-483583988845248/">Click here</a></span>
                                    <span>// New stores in Hanoi --- 12th May 2019</span>
                                    <span>// Sweepstakes prizes values up to 20.000.000 VND. <a href="https://www.facebook.com/Golgonpc-483583988845248/">Check it out !!</a></span>
                                    <span>// For more information, check ->>> <a href="https://www.facebook.com/Golgonpc-483583988845248/">Fanpage</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-info-lower-2 col-12 col-xs-12 col-sm-12 flex">
                        <div class="col-8 col-xs-12 col-sm-12">
                            <img src="/golgonphp/assets/images/events/banner-big-06.jpg"/>
                        </div>
                        <div class="col-4 col-xs-12 col-sm-12">
                            <img src="/golgonphp/assets/images/events/banner-square-msi.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--%======================== FOOTER ==============================%-->
        <?php require_once('views/public/_footer.php'); ?>
        <button id="back">
            <i class="fa fa-3x fa-arrow-circle-up"></i>
        </button>
        <!--%======================== JS ==============================%-->
        <script src="/golgonphp/assets/js/home-tab-slider-inner-slide.js"></script>
        <script src="/golgonphp/assets/js/home-tab-slider.js"></script>
        <script src="/golgonphp/assets/js/home.js"></script>
    </body>
</html>
