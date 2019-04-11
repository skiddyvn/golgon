<?php

class Product {
    private $pid;
    private $pname;
    private $pprice;
    private $pquantity;
    private $pbrand;
    private $pcategory;
    private $pdescription;
    private $pimage;
    
    /*===================== Chức năng extends từ ProductDAO ================*/
    
    /*===================== Hàm khởi tạo và getters/setters ================*/
    function __construct($pid, $pname, $pprice, $pquantity, $pbrand, $pcategory, $pdescription, $pimage) {
        $this->pid = $pid;
        $this->pname = $pname;
        $this->pprice = $pprice;
        $this->pquantity = $pquantity;
        $this->pbrand = $pbrand;
        $this->pcategory = $pcategory;
        $this->pdescription = $pdescription;
        $this->pimage = $pimage;
    }
    
    function getPid() {
        return $this->pid;
    }

    function getPname() {
        return $this->pname;
    }

    function getPprice() {
        return $this->pprice;
    }

    function getPquantity() {
        return $this->pquantity;
    }

    function getPbrand() {
        return $this->pbrand;
    }

    function getPcategory() {
        return $this->pcategory;
    }

    function getPdescription() {
        return $this->pdescription;
    }

    function getPimage() {
        return $this->pimage;
    }

    function setPid($pid) {
        $this->pid = $pid;
    }

    function setPname($pname) {
        $this->pname = $pname;
    }

    function setPprice($pprice) {
        $this->pprice = $pprice;
    }

    function setPquantity($pquantity) {
        $this->pquantity = $pquantity;
    }

    function setPbrand($pbrand) {
        $this->pbrand = $pbrand;
    }

    function setPcategory($pcategory) {
        $this->pcategory = $pcategory;
    }

    function setPdescription($pdescription) {
        $this->pdescription = $pdescription;
    }

    function setPimage($pimage) {
        $this->pimage = $pimage;
    }

}