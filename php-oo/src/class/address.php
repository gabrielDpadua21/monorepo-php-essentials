<?php

    class Address {

        private $street;
        private $number;
        private $city;

        public function __construct($street, $number, $city) {
            
            $this->street = $street;
            $this->number = $number;
            $this->city = $city;

        }

        public function __destruct(){
            echo "\n\n";
            var_dump("DESTROY");
        }

        public function __toString() {
            return $this->street.", ".$this->number." - ".$this->city;
        }

    }