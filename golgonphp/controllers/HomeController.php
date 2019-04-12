<?php
class HomeController {
    public function start() {
        require('views/public/start.php');
    }
    public function index() {
        $listProducts = ProductDAO::getListAllProducts();
        $listNewProducts = ProductDAO::getListNewProducts(5);
        $listComponents = ProductDAO::getListProductByComponents();
        require('views/public/home.php');
    }
    public function contact() {
        require('views/public/contact.php');
    }
    public function about() {
        require('views/public/about.php');
    }
}
