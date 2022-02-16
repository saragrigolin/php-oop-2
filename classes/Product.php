<?php

    require_once __DIR__ . "/../traits/Discount.php";

    class Product
    {
        use Discount;
        protected $name;
        protected $brand;
        protected $model;
        protected $price;
        protected $image;
        protected $category;

        public function __construct($name, $brand, $model, $price, $category){
            $this->name = $name;
            $this->brand = $brand;
            $this->model = $model;
            $this->price = $price;
            $this->category = $category;
        }

        

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of brand
         */ 
        public function getBrand()
        {
                return $this->brand;
        }

        /**
         * Set the value of brand
         *
         * @return  self
         */ 
        public function setBrand($brand)
        {
                $this->brand = $brand;

                return $this;
        }

        /**
         * Get the value of model
         */ 
        public function getModel()
        {
                return $this->model;
        }

        /**
         * Set the value of model
         *
         * @return  self
         */ 
        public function setModel($model)
        {
                $this->model = $model;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice($level, $discount)
        {
            if ($level) {
                $this->price = $this->price * ((100 - $discount) / 100);
            } 

            return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice(float $price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }

        /**
         * Get the value of category
         */ 
        public function getCategory()
        {
                return $this->category;
        }

        /**
         * Set the value of category
         *
         * @return  self
         */ 
        public function setCategory($category)
        {
                $this->category = $category;

                return $this;
        }
    }
?>