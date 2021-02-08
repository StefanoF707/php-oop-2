<?php

    require_once __DIR__ . "/../product.php";

    class Tech extends Product {

        public $utility;

        function __construct($name, $price, $discount = "", $pic, $utility) {
            parent::__construct($name, $price, $discount, $pic);
            $this->utility = $utility;
        }

    }

 ?>
