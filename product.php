<?php

    class Product {

        public $name;
        private $price;
        private $discount;
        public $pic;

        function __construct($name, $price, $discount = "", $pic) {
            $this->name = $name;
            $this->price = $price;
            $this->discount = $discount;
            $this->pic = $pic;
        }

        public function getPrice() {
            return $this->price;
        }

    }

?>
