<?php

    namespace Client;

    class Register extends \Register {

        public function sell() {
            echo "sell to ".$this->getName();
        }

    }