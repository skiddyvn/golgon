<?php
class HomeController {
    public function index() {
        $listNewProducts = ProductDAO::getListAllProducts();
        require('views/public/home.php');
    }
    public function contact() {
        require('views/public/contact.php');
    }
    public function about() {
        require('views/public/about.php');
    }
}
