<?php

    class Car {
        
        private $model;
        private $motor;
        private $year;

        public function getModelo() {
            return $this->model;
        }

        public function setModelo($model) {
            $this->model = $model;
        }

        public function getMotor() {
            return $this->motor;
        }

        public function setMotor($motor) {
            $this->motor = $motor;
        }
        
        public function getYear():int {
            return $this->year;
        }

        public function setYear($year) {
            $this->year = $year;
        }

        public function show() {
            return array(
                "model"=>$this->getModelo(),
                "motor"=>$this->getMotor(),
                "year"=>$this->getYear()
            );
        }

    }