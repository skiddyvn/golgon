<?php

class ProductDAO {

    public static function addProduct($pname, $pprice, $pquantity, $pbrand, $pcategory, $pdescription, $pimage) {
        $mysqli = Database::getConnection();
        $mysqli->query("INSERT INTO products (pname, pprice, pquantity, pbrand, pcategory, pdescription,pimage) "
                        . "VALUES ('$pname','$pprice','$pquantity','$pbrand','$pcategory','$pdescription','$pimage')")
                or die($mysqli->error);
    }

    public static function deleteProduct($productid) {
        $mysqli = Database::getConnection();
        $mysqli->query("DELETE FROM products WHERE pid = $productid") or die($mysqli->error());
    }

    public static function updateProduct($productid,$pname, $pprice, $pquantity, $pbrand, $pcategory, $pdescription, $pimage) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("UPDATE products SET pname=?,pprice=?, pquantity=?, pbrand=?, pcategory=?, pdescription=?,pimage=?");
        $stmt->bind_param("siissss",$pname,$pprice,$pquantity,$pbrand,$pcategory,$pdescription,$pimage);
        $stmt->execute();
    }

    public static function getListProducts() {
        $list = [];
        $mysqli = Database::getConnection();
        $req = $mysqli->query("SELECT * FROM products");
        foreach ($req as $item) {
            $list[] = new Product($item['pid'], $item['pname'], $item['pprice'], $item['pquantity'], $item['pbrand'], $item['pcategory'], $item['pdescription'], $item['pimage']);
        }
        return $list;
    }

    public static function getAProduct($productId) {
        $mysqli = Database::getConnection();
        $result = $mysqli->query("SELECT * FROM products WHERE pid = '$productId'") or die($mysqli->error());
        $product = mysqli_fetch_assoc($result);
        return $product;
    }

    public static function listProducts() {
        $mysqli = Database::getConnection();
        $result = $mysqli->query("SELECT * FROM products") or die($mysqli->error);

        return $result;
    }

    public static function getListAllProducts() {
        $mysqli = Database::getConnection();
        $query = "select * from products";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $mysqli->close();
        return $data;
    }

    public static function getPbrand() {
        $mysqli = Database::getConnection();
        $result= $mysqli->query("SELECT DISTINCT pbrand FROM products") or die($mysqli->error);
        return $result;
    }

    public static function getPcategory() {
        $mysqli = Database::getConnection();
        $result = $mysqli->query("SELECT DISTINCT pcategory FROM products") or die($mysqli->error);
        return $result;
    }

    public static function getListNewProducts($number) {
        $mysqli = Database::getConnection();
        $query = "select * from products order by pid desc limit ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("i",$number);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            $data[]=$row;
        }
        $mysqli->close();
        return $data;
    }
    public static function getListProductByCategory($category,$limit) {
        $mysqli = Database::getConnection();
        $cat = "%$category%";
        $query = "select * from products where pcategory like ? limit ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("si", $cat,$limit);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = null;
        while($row = $result->fetch_assoc()){
            $data[]=$row;
        }
        $mysqli->close();
        return $data;
    }
    public static function getListProductByComponents() {
        $mysqli = Database::getConnection();
        $query = "select * from products where pcategory in('VGA','CPU','PSU','Mainboard','SSD','HDD','RAM','Cooling','Case')";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()){
            $data[]=$row;
        }
        $mysqli->close();
        return $data;
    }

    public static function getListProductByBrand($brand) {
        
    }

    public static function getListProductByCategoryAndBrand($category, $brand) {
        
    }

}
