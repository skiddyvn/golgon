<?php
require_once 'E:\xampp\htdocs\golgonphp\models\ProductDAO.php';
require_once 'E:\xampp\htdocs\golgonphp\models\Product.php';
require_once 'E:\xampp\htdocs\golgonphp\controllers\ProductController.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Category  |  Admin</title>
        <link href="../../../assets/stylesheets/admin.css" rel="stylesheet" />
        <script src="../../../assets/js/admin.js"></script>
    </head>
    <body>
        <div class="left-content">
            <div class="logo">
                <img alt="error" src="../../../assets/images/main-logo.png" />
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
                    <a href="#">Administrators</a>
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
                    <a href="#">Log out</a>
                </div>
            </div>
            <div class="header-name">
                <div class="header-name-text">
                    <h1>Product</h1>
                    <h4>Catalog management</h4>
                </div>
                <div class="header-name-btn">
                    <img src="../../../assets/images/icon/plus.png" alt="error" />
                    <a href="http://localhost:81/golgonphp/views/admin/product/product_add.php">Add new</a>
                </div>
            </div>
            <?php
            if (isset($_SESSION['message'])) {
                ?>
                <div class="admin-message">
                    <div class="admin-message-info" onclick="disappear(this)">
                        <img alt="error" src="../../../assets/images/icon/icon-alert.png" />
                        <span>
                            <?php
                            echo $_SESSION['message'];
                            ?>
                        </span>
                    </div>
                </div>
            <?php } unset($_SESSION['message']); ?>
            <!--        Table header           -->
            <div class="table-header">
                <span>Have</span>
                <?php $Products = ProductDAO::getListProductsLimit($start, $limit); ?>
                <span> <?php echo $count = sizeof($Products); ?></span>
                <span>Products Of <?php echo ProductDAO::countById() ; ?> </span>
            </div>
            <!--        Table Category          -->
            <table id="myTable" cellpadding="10">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Information</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                foreach ($Products as $value) {
                    ?>
                    <tr>
                        <td><?php echo $value->getPid(); ?></td>
                        <td>
                            <div class="product-image">
                                <img alt="error" src="../../../assets/images/products/<?php echo $value->getPcategory(); ?>/<?php echo $value->getPimage(); ?>" />
                            </div>
                            <div class="product-text">
                                <p>Name: <?php echo $value->getPname(); ?></p>
                                <p>Quantity: <?php echo $value->getPquantity(); ?></p>
                                <p>Price: <?php echo number_format($value->getPprice()); ?> VNĐ</p>                            
                            </div>
                        </td>
                        <td><?php echo $value->getPbrand(); ?></td>
                        <td><?php echo $value->getPcategory(); ?></td>
                        <td>
                            <a href="product_update.php?id=<?php echo $value->getPid(); ?>" title="Update">
                                <img src="../../../assets/images/icon/edit.png" alt="error" />
                            </a>
                            <a href="product_index.php?delete=<?php echo $value->getPid(); ?>" title="Delete" onclick="delete_confirm(event)">
                                <img src="../../../assets/images/icon/icon-delete.png" alt="error" />
                            </a>
                        </td>
                    </tr>
                <?php } ?>

            </table>

            <div class="table-divider">
                <?Php
                if ($per_page > 1) {
                    $current_page = ($start / $limit + 1);
                    if ($current_page != 1) {
                        echo "<span><a href ='product_index.php?s=".($start-$limit)."&p=$per_page' > Previous </a></span>" ;
                    }
                    for ($i = 1; $i <= $per_page ; $i++) {
                        if($i != $current_page ){
                            echo "<span><a href ='product_index.php?s=".($limit*($i-1))."&p=$per_page'   >$i </a></span>";
                        }else{
                            echo "<span>$i</span>";
                        }
                    }
                    if($current_page!= $per_page){
                        echo "<span><a href ='product_index.php?s=".($start+$limit)."&p=$per_page' > Next </a></span>" ;
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>
