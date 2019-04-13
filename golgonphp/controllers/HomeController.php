<?php
class HomeController {
    public function start() {
        require('views/public/start.php');
    }
    public function index() {
        $listProducts = ProductDAO::getListAllProducts();
        $listNewProducts = ProductDAO::getListNewProducts(5);
        $listComponents = ProductDAO::getListProductByComponents();
        
        $listTab1 = ProductDAO::getListProductByCategory("desktop",10);
        $listTab2 = ProductDAO::getListProductByCategory("laptop",10);
        
        $listTab3 = ProductDAO::getListProductByCategory("mainboard",10);
        $listTab4 = ProductDAO::getListProductByCategory("vga",10);
        $listTab5 = ProductDAO::getListProductByCategory("cpu",10);
        $listTab6 = ProductDAO::getListProductByCategory("ram",10);
        $listTab7 = ProductDAO::getListProductByCategory("ssd",10);
        $listTab8 = ProductDAO::getListProductByCategory("hdd",10);
        
        $listTab9 = ProductDAO::getListProductByCategory("monitor",10);
        $listTab10 = ProductDAO::getListProductByCategory("keyboard",10);
        $listTab11 = ProductDAO::getListProductByCategory("mouse",10);
        $listTab12 = ProductDAO::getListProductByCategory("headphone",10);
        
        $listTab13 = ProductDAO::getListProductByCategory("cooling",10);
        $listTab14 = ProductDAO::getListProductByCategory("console",10);
        $listTab15 = ProductDAO::getListProductByCategory("accessories",10);
        
        require('views/public/home.php');
    }
    public function contact() {
        require('views/public/contact.php');
    }
    public function about() {
        require('views/public/about.php');
    }
}
