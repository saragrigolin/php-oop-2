<?php

    require_once __DIR__ .'/Card.php';
    // require_once __DIR__ .'/UserType.php';
    class User
    {
        protected $name;
        protected $lastname;
        protected $mail;
        protected $age;
        protected $card;

        public function __construct ($name, $lastname, $mail, $card){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->mail = $mail;
            $this->setCard($card);

        }

                /**
         * Get the value of card
         */ 
        public function getCard()
        {
                return $this->card;
        }

        /**
         * Set the value of card
         *
         * @return  self
         */ 
        public function setCard(Card $card)
        {
                $this->card = $card;

                return $this;
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
         * Get the value of lastname
         */ 
        public function getLastname()
        {
                return $this->lastname;
        }

        /**
         * Set the value of lastname
         *
         * @return  self
         */ 
        public function setLastname($lastname)
        {
                $this->lastname = $lastname;

                return $this;
        }

        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
                return $this->mail;
        }

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mail)
        {
                $this->mail = $mail;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }
    }

?>