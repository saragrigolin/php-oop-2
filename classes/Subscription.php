<?php
    class Subscription extends User
    {
        protected $isPremium;

        public function __construct ($name, $lastname, $mail, $card, $isPremium){
            parent::__construct($name, $lastname, $mail, $card);
            $this->isPremium = $isPremium;
            $this->setDiscount($isPremium);
        }

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
        public function setDiscount($isPremium)
        {
            if ($isPremium == false){
                $this->discount = 0;
            } else {
                $this->discount = 10;
            }
        }
    }
?>