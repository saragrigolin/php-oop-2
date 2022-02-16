<?php
    trait Discount
    {
        protected $isPremium;
        protected $discount;

        

        /**
         * Get the value of isPremium
         */ 
        public function getIsPremium()
        {
                return $this->isPremium;
        }

        /**
         * Set the value of isPremium
         *
         * @return  self
         */ 
        public function setIsPremium($isPremium)
        {
                $this->isPremium = $isPremium;

                return $this;
        }

        /**
         * Get the value of discount
         */ 
        public function getDiscount()
        {
                return $this->discount;
        }

        /**
         * Set the value of discount
         *
         * @return  self
         */ 
        public function setDiscount($discount)
        {
                $this->discount = $discount;

                return $this;
        }
    }
?>