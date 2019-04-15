<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $p->getPname() ?></title>
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/detailProduct.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/shared.css">
        <link rel="stylesheet" href="/golgonphp/assets/fontawesome/css/all.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/_footer.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/_header.css">
        <link rel="stylesheet" href="/golgonphp/assets/stylesheets/navigation.css">
        <link rel="icon" href="/golgonphp/assets/images/game-console.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="/golgonphp/assets/js/jquery3-3-1.min.js"></script>
    </head>
    <body>
    <?php require_once('views/public/_header.php'); ?>
    <div id="detail-product-frame">
        <div class="container">
            <div class="detail-product-block col-12">
                <div id="linktree">
                    <div class="link-content">
                        <a href="home">Home</a>
                        <i class="fa fa-caret-right"></i>
                        <a href="/golgonphp/<?php echo $p->getPcategory() ?>"><?php echo $p->getPcategory() ?></a>
                        <i class="fa fa-caret-right"></i>
                        <span><?php echo $p->getPname() ?></span>
                    </div>
                </div>

                <div id="detail-product-content">
                    <div class="image">
                        <img src="<?php echo $p->getPimage() ?>"></img>
                    </div>
                    <div class="content">
                        <div class="upper-content">
                            <h1><?php echo $p->getPname() ?></h1>
                            <div class="line-info">
                                <div class="line-title">Brand Name</div>
                                <div class="line-content">
                                    <?php echo $p->getPbrand() ?>
                                </div>
                            </div>
                            <div class="line-info">
                                <div class="line-title">Category</div>
                                <div class="line-content category-style">
                                    <?php echo $p->getPcategory() ?>
                                </div>
                            </div>
                            <div class="line-info">
                                <div class="line-title">Products in stock</div>
                                <div class="line-content">
                                    Only <?php echo $p->getPquantity() ?> left
                                </div>
                            </div>
                            <div class="line-info">
                                <div class="line-title">Delivery Fee</div>
                                <div class="line-content">
                                    <div><i class="fa fa-truck"> </i> Free shipping</div>
                                    <div class="extra-info-delivery"> (for order > 500.000 VND)</div>
                                </div>
                            </div>
                            <div class="line-info">
                                <div class="line-title">PRICE</div>
                                <div class="line-content">
                                    <span class="price"><?php echo number_format($p->getPprice(),0,'','.') ?> VND</span>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="lower-content-btn">
                                <form action="cart" method="POST">
                                    <input type="hidden" name="productToCart" value="<?php echo $p->getPid() ?>">
                                    <input type="hidden" name="action" value="add">
                                    <button class="addcart" type="submit">Add to Cart</button>
                                    <button class="favourite" type="button">Save to favourite <i class="fa fa-heart"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>

                <div id="detail-information">
                    <span class="title">Product Description</span>
                    <div class="description"><?php echo $p->getPdescription() ?></div>
                </div>

                <div id="comment-box">
                    <span class="title">Review & Comment</span>
                    <div class="comment-display">
                        <?php for($i=0 ; $i<count($listCommentsByProduct) ; $i++) {
                            $c = new Comment();
                            $c->setCommentid($listCommentsByProduct[i]['cid']);
                            $c->setComment($listCommentsByProduct[i]['ccomment']);
                            $c->setCommentproduct($listCommentsByProduct[i]['cproduct']);
                            $c->setCommentuser($listCommentsByProduct[i]['cuser']);
                            $c->setCommenttime($listCommentsByProduct[i]['ctime']);
                        echo '<div class="comment">
                                <div class="comment-title">
                                    <span class="user-name-comment">'.$c->getCommentuser().'</span>
                                    <span class="datetime-comment">
                                        '.date_format($c->getCommenttime(),"Y/m/d H:i:s").'
                                    </span>
                                </div>
                                <div class="comment-content">
                                    <span class="user-content-comment">'.$c->getComment().'</span>
                                </div>
                            </div>';
                        }
                        ?>
                    </div>
                    <div class="comment-review clearfix">
                        <div class="toproduct">to: <?php echo $p->getPname() ?></div>
                        <div class="sendreview">
                            <form class="comment-form" action="detailProduct" method="POST">
                                <div class="input-group">
                                    <input type="hidden" name="cmtpid" value="<?php $p->getPid() ?>"></input>
                                    <input class="inputbox" id="commentwrite" type="text" name="cmtctn"></input>
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('views/public/_footer.php'); ?>
</body>
</html>