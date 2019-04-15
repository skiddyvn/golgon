<?php
class CommentController {
    public function add() {
        if(!isset($_SESSION['user'])) {
            $productid = $_POST['cmtpid'];
            echo "/golgonphp/product/detail/'.$productid.''";
            header('Location:/golgonphp/product/detail/'.$productid.'');
        } else {
            
        }
    }
    public function delete() {
        
    }
    public function update() {
        
    }
}