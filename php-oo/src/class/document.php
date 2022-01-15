<?php

    class Document {

        private $number;

        public function getNumber() {
            return $this->number;
        }

        public function setNumber($number) {

            $result = Document::documentValidate($number);

            if($result === false) {
                throw new Exception("DOCUMENT IS NOT VALID", 1);
            }

            $this->number = $number;
        }

        public static function documentValidate($document):bool {

            if(empty($document)) {
                return false;
            } 

            $document = preg_replace("/[^0-9]/", "", $document);
            $document = str_pad($document, 11, '0', STR_PAD_LEFT);

            if(strlen($document) != 11) {
                return false;
            }

            if($document == "11111111111" || 
               $document == "22222222222" ||
               $document == "33333333333" ||
               $document == "44444444444" ||
               $document == "55555555555" ||
               $document == "66666666666" ||
               $document == "77777777777" ||
               $document == "88888888888" ||
               $document == "99999999999"
            ) {
                return false;
            } else {

                for($t = 9; $t < 11; $t++) {

                    for($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $document{$c} * (($t + 1) - $c);
                    }

                    $d = ((10 * $d) % 11) % 10;

                    if($document{$c} != $d) {
                        return false;
                    }

                }

                return true;

            }

        }

    }