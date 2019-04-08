<?php
class ProductDAO {
    public static function addProduct() {
        
    }
    public static function deleteProduct($productid) {
        
    }
    public static function updateProduct($productid) {
        
    }
    public static function getListAllProducts() {
        $mysqli = Database::getConnection();
        $query = "select * from products";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            $data[]=$row;
        }
        $mysqli->close();
        return $data;
    }
    public static function getListProductByCategory($category) {
        
    }
    public static function getListProductByBrand($brand) {
        
    }
    public static function getListProductByCategoryAndBrand($category,$brand) {
        
    }
    public static function getListNewProducts() {
        echo "This is list of new products";
    }
}

