<?php

    class Animal {

        # ALL CAN ACESS - LEVEL 2
        public $name = "Frajola";
        # JUST THE CLASS AND THIS CHILDREN - LEVEL 1
        protected $type = "cat";
        # JUST THE CLASS - LEVEL 0
        private $age = 10;

        public function showData() {

            echo get_class($this);

            echo "\n\n";

            echo $this->name;
            echo "\n";
            echo $this->type;
            echo "\n";
            echo $this->age;
        }
    }