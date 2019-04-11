<?php

session_start();

require_once 'E:\xampp\htdocs\golgonphp\models\ProductDAO.php';

//ACTION ADD
if (isset($_POST['add'])) {
    $pname = $_POST['pname'];
    $pimage = "";
    $pcategory = $_POST['pcategory'];
    $pbrand = $_POST['pbrand'];
    $pquantity = $_POST['pquantity'];
    $pprice = $_POST['pprice'];
    $pdescription = $_POST['pdescription'];

    //Upload File image
    if ($_FILES['uploadFile']['name'] != NULL) {
        $target_dir = 'E:/xampp/htdocs/golgonphp/assets/images/products/' . $pcategory . '/'; // File have been save in this
        $target_file = $target_dir . basename($_FILES['uploadFile']['name']);
        $pimage = basename($_FILES['uploadFile']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $uploadOk = 1;

        $check = getimagesize($_FILES["uploadFile"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["uploadFile"]["size"] > 500000) {
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
//        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file);

        ProductDAO::addProduct($pname, $pprice, $pquantity, $pbrand, $pcategory, $pdescription, $pimage);
        $_SESSION['message'] = "Product have been saved !!";
    }
}

//ACTION DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    ProductDAO::deleteProduct($id);

    $_SESSION['message'] = "Product have been deleted !!";

    header('location: http://localhost:81/golgonphp/views/admin/product/product_index.php#');
}

//ACTION UPDATE
if (isset($_POST['update'])) {
    $pid = $_GET['id'];
    $product = ProductDAO::getAProduct($pid);
    $pname = $_POST['pname'];
    $pimageOld = $product['pimage'];
    $pimage = "";
    $pcategory = $_POST['pcategory'];
    $pbrand = $_POST['pbrand'];
    $pquantity = $_POST['pquantity'];
    $pprice = $_POST['pprice'];
    $pdescription = $_POST['pdescription'];

    if (isset($_FILES['uploadFile']['name']) && ($_FILES['uploadFile']['name'] != NULL)) {
        $target_dir = 'E:/xampp/htdocs/golgonphp/assets/images/products/' . $pcategory . '/'; // File have been save in this
        $target_file = $target_dir . basename($_FILES['uploadFile']['name']);
        $pimage = basename($_FILES['uploadFile']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $uploadOk = 1;

        $check = getimagesize($_FILES["uploadFile"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["uploadFile"]["size"] > 500000) {
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
//        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        //delete old file
        unlink("E:/xampp/htdocs/golgonphp/assets/images/products/$pimageOld");
        //import new file
        move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file);
        ProductDAO::updateProduct($pid, $pname, $pprice, $pquantity, $pbrand, $pcategory, $pdescription, $pimage);
        $_SESSION['message'] = "Product have been update";
    }
}