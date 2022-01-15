<?php


    abstract class Animal {

        public function speak() {
            return "Sound";
        }

        public function walk() {
            return "Keep Walking";
        }

    }


    class Cat extends Animal {

        public function speak(){
            return "Miau";
        }

    }

    class Bird extends Animal{

        public function speak(){
            return "Sing";
        }

        public function walk(){
            return "Fly and ". parent::walk();
        }

    }

    $c1 = new Cat();
    echo $c1->speak();
    echo "\n";
    echo $c1->walk();

    echo "\n\n";

    $p1 = new Bird();
    echo $p1->speak();
    echo "\n";
    echo $p1->walk();
