<?php

    interface vehicle {
        public function upSpeed($speed);
        public function stop($speed);
        public function changeGear($gear);
    }

    class Car implements vehicle {

        public function upSpeed($speed){
            echo "Speed: ".$speed;
        }

        public function stop($speed){
            echo "Speed: ".$speed;
        }

        public function changeGear($gear){
            echo "Gear ".$gear;
        }

    }

    $c1 = new Car();

    $c1->changeGear("Second");

    echo "\n";

    $c1->upSpeed("1000");