<?php

class ProductController {
    public function detail($parameter) {
        $productId = $parameter;
        $product = ProductDAO::getProductById($productId);
        $p = new Product();
        $p->setPid($product['pid']);
        $p->setPname($product['pname']);
        $p->setPbrand($product['pbrand']);
        $p->setPcategory($product['pcategory']);
        $p->setPprice($product['pprice']);
        $p->setPquantity($product['pquantity']);
        $p->setPimage($product['pimage']);
        $p->setPdescription($product['pdescription']);
        
        $listCommentsByProduct = CommentDAO::getListCommentsByProduct($productId);
        
        require('views/public/detailProduct.php');
    }
}