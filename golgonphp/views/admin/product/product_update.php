<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require_once 'E:\xampp\htdocs\golgonphp\controllers\ProductController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Product  |  Admin</title>
        <link href="../../../assets/stylesheets/admin.css" rel="stylesheet" />
        <script src="../../../assets/js/admin.js"></script>
    </head>
    <body>
        <div class="left-content">
            <div class="logo">
                <img alt="error" src="../../../assets/images/text-logo.png" />
                <img alt="error" src="../../../assets/images/admin-image.png" />
                <span>Hi, Admin!</span>
            </div>
            <div class="admin-home">
                <img alt="error" src="../../../assets/images/icon/icon-homee.png" />
                <a href="#">DASHBOARD</a>
            </div>
            <div class="sidebar-rows" onclick="sidebarDrop(this)">
                <img alt="error" src="../../../assets/images/icon/icon-trade.png" />
                <span>SALES MANAGER</span>
            </div>
            <div class="sidebar-contents">
                <div class="sidebar-contents-row">
                    <img alt="error" src="../../../assets/images/icon/icon-next-sidebar.png" />
                    <a href="#">Deal</a>
                </div>
            </div>
            <div class="sidebar-rows" onclick="sidebarDrop(this)">
                <img alt="error" src="../../../assets/images/icon/icon-product.png" />
                <span>PRODUCT</span>
            </div>
            <div class="sidebar-contents">
                <div class="sidebar-contents-row">
                    <img alt="error" src="../../../assets/images/icon/icon-next-sidebar.png" />
                    <a href="http://localhost:81/golgonphp/views/admin/product/product_index.php#">Category</a>
                </div>
                <div class="sidebar-contents-row">
                    <img alt="error" src="../../../assets/images/icon/icon-next-sidebar.png" />
                    <a href="#">Product</a>
                </div>
            </div>
            <div class="sidebar-rows" onclick="sidebarDrop(this)">
                <img alt="error" src="../../../assets/images/icon/icon-account-white.png" />
                <span>ACCOUNT</span>
            </div>
            <div class="sidebar-contents">
                <div class="sidebar-contents-row">
                    <img alt="error" src="../../../assets/images/icon/icon-next-sidebar.png" />
                    <a href="#">administrators</a>
                </div>
                <div class="sidebar-contents-row">
                    <img alt="error" src="../../../assets/images/icon/icon-next-sidebar.png" />
                    <a href="#">Customer</a>
                </div>
            </div>
        </div>


        <div class="right-content">
            <div class="main-header">
                <div class="btn-logout">
                    <img alt="errror" src="../../../assets/images/icon/icon-logout1.png" />
                    <a href="#">Logout</a>
                </div>
            </div>
            <div class="header-name">
                <div class="header-name-text">
                    <h1>Product</h1>
                    <h4>Product manager</h4>
                </div>
            </div>
            <?php
            if (isset($_SESSION['message'])) {
                ?>
                <div class="admin-message">
                    <div class="admin-message-info" onclick="disappear(this)">
                        <img alt="error" src="../../../assets/images/icon/icon-alert.png" />
                        <span> <?php
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                            ?></span>
                    </div>
                </div>
            <?php } ?>
            <!--                Update product form-->
            <?php
            $pbrand = ProductDAO::getPbrand();
            $pcategory = ProductDAO::getPcategory();
            $pid =$_GET['id'];
            $product = ProductDAO::getAProduct($pid);
            ?>
            <div class="content-form">
                <form method="POST" enctype="multipart/form-data">
                    <div class="content-form-rows">
                        <span>Product name :</span>
                        <input class="rows-content-text" name="pname" type="text" value="<?php echo $product['pname'] ?>">
                    </div>
                    <img src="../../../assets/images/products/<?php echo $product['pcategory']?>/<?php echo $product['pimage'] ?>" alt="<?php echo $product['pname'] ; ?>"  style="width: 80px;height: 60px" >
                    <div class="content-form-rows">
                        <span>Image :</span>
                        
                        <input class="rows-content-text" name="uploadFile" value="../../../assets/images/products/<?php echo $product['pcategory']?>/<?php echo $product['pimage'] ?>" type="file">
                    </div>
                    <div class="content-form-rows">
                        <span>Category :</span>
                        <select name="pcategory" class="rows-content-select">
                            <option value="<?php echo $product['pcategory'] ?>"><?php echo $product['pcategory'] ?></option>
                            <?php while($row = $pcategory->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row['pcategory']; ?>"><?php echo $row['pcategory']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="content-form-rows">
                        <span>Brand :</span>
                        <select name="pbrand" onchange="enableGroupId(this)"  class="rows-content-select">
                            <option value="<?php echo $product['pbrand'] ?>"><?php echo $product['pbrand'] ?></option>
                            <?php while($row = $pbrand->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row['pbrand']; ?>"><?php echo $row['pbrand']; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="content-form-rows">
                        <span>Quantity :</span>
                        <select name="pquantity" class="rows-content-select">                        
                            <option value="<?php echo $product['pquantity'] ?>"><?php echo $product['pquantity'] ?></option>
                            <?php for ($k = 1; $k <= 200; $k++) { ?>
                                <option value="<?php echo $k; ?>"><?php echo $k; ?></option>   
                            <?php } ?>
                        </select>
                    </div>
                    <div class="content-form-rows">
                        <span>Price :</span>
                        <input class="rows-content-text" value="<?php echo $product['pprice'] ?>" name="pprice" type="text">
                    </div>
                    <div class="content-form-textarea">
                        <span>Description :</span>
                        <textarea class="rows-content-text" value="<?php echo $product['pdescription'] ?>" name="pdescription" type="text"></textarea>
                    </div>
                    <div class="content-form-btn">
                        <a href="http://localhost:81/golgonphp/views/admin/product/product_index.php#">Back</a>
                        <input id="myButton" type="submit" value="Update" name="update" onclick="checkText(event)">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>