<?php

    class Vehicle {

        private $type;

        public function getType() {
            return $this->type;
        }

        public function setType($type) {
            $this->type = $type;
        }

    }

    class Boat extends Vehicle {

        public function navegate() {
            $this->setType("boat");
            
            echo $this->getType()." is navegate...";
        }

    }