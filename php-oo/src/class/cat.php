<?php

    include "./animal.php";

    class Cat extends Animal {

        public function showData() {

            echo get_class($this);

            echo "\n\n";

            echo $this->name;
            echo "\n";
            echo $this->type;

        }

    }