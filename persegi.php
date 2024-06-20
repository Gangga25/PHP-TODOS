<?php
    class Persegi {
        public $sisi;

        function luas() {
            $l = $this->sisi * $this->sisi;
            return $l;
        }
        function keliling() {
            $k = 4 * $this->sisi;
            return $k;
        }
    }
?>