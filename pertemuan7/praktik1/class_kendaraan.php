<?php

    class Kendaraan {
        protected $tipe;
        protected $fuel;
        
        protected function __construct($type, $fuel)
        {
            $this->tipe = $type;
            $this->fuel = $fuel;
        }
        protected function getInfo()
        {
            echo "Jenis Kendaraan: " . $this->tipe . "<br>";
            echo "Bahan Bakar: " . $this->fuel . "<br>";
        }
            
    }

    class Motor extends Kendaraan {
        public $roda;

        public function __construct($type, $fuel, $roda)
        {
            parent ::__construct($type, $fuel);
            $this->roda = $roda;
        }

        public function getInfo()
        {
            parent::getInfo();
            echo "Jumlah Roda: " . $this->roda . "<br>";
        }

    }
    class Submarine extends Kendaraan {
        public $max_depth;

        public function __construct($type, $fuel, $max_depth)
        {
            parent ::__construct($type, $fuel);
            $this->max_depth = $max_depth;
        }

        public function getInfo()
        {
            parent::getInfo();
            echo "Maksimal Kedalaman: " . $this->max_depth . "<br>";
        }

    }