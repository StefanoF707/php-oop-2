<?php

    require_once __DIR__ . "/../product.php";

    class Clothing extends Product {

        public $gender;


        function __construct($name, $price, $discount = "", $pic, $gender) {
            parent::__construct($name, $price, $discount, $pic);
            $this->gender = $gender;
        }

    }

 ?>
