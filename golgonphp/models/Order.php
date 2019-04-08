<?php
class Order {
    private $oid;
    private $user;
    private $address;
    private $phone;
    private $totalprice;
    private $totalquantity;
    private $time;
    
    private $listProducts;
    /*===================== Chức năng extends từ OrderDAO ================*/
    
    /*===================== Hàm khởi tạo và getters/setters ================*/
    function __construct() {
        $this->oid = null;
    }
    
    function getOid() {
        return $this->oid;
    }

    function getUser() {
        return $this->user;
    }

    function getAddress() {
        return $this->address;
    }

    function getPhone() {
        return $this->phone;
    }

    function getTotalprice() {
        return $this->totalprice;
    }

    function getTotalquantity() {
        return $this->totalquantity;
    }

    function getTime() {
        return $this->time;
    }
    
    function getListProducts() {
        return $this->listProducts;
    }
    
    function setOid($oid) {
        $this->oid = $oid;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setTotalprice($totalprice) {
        $this->totalprice = $totalprice;
    }

    function setTotalquantity($totalquantity) {
        $this->totalquantity = $totalquantity;
    }

    function setTime($time) {
        $this->time = $time;
    }

    function setListProducts($listProducts) {
        $this->listProducts = $listProducts;
    }
    
}