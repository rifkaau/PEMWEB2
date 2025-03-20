<?php
    /**
     * Kelas Lingkaran
     * Kelas untuk menghitung luas dan keliling lingkaran
     */

    class Lingkaran {
        public $jari;
        public const PHI = 3.14;

        public function ___construct($r) {
            $this->jari = $r;
        }

        public function getluas() {
            $luas = self::PHI * $this->jari * $this->jari;
            return $luas;
        }

        public function getKeliling(){
            $keliling = 2.0 * self::PHI * $this->jari;
            return $keliling;
        }

        public function cetak(){
            echo "Jari-jari lingkaran adalah".$this->jari;
            echo "<br>Luas lingkaran adalah".$this->getluas();
            echo "<br>Keliling lingkaran adalah".$this->getKeliling();
        }
    }
?>