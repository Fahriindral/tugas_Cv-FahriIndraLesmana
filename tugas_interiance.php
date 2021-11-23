<?php

    class installedBatteries {
        public $designCapacity;
        public $fullCharge;

        public function __construct($designCapacity, $fullCharge) {
            $this->designCapacity = $designCapacity;
            $this->fullCharge = $fullCharge;
        }
    }

    class infoBatteries extends installedBatteries {
        public function checkBatteries () {
            $count = round(($this->fullCharge/$this->designCapacity) * 100,2);
            return $count;
        }

        public function __destruct() {
            echo "Keterangan:
                Design Capacity = 26,666 mWh 
                Full Charge Capacity = 19,245 mWh";
        }
    }
    
$battriesLaptop = new infoBatteries(26.666, 19.245);

echo "Battries Laptop is = ".$battriesLaptop->checkBatteries(). "%";

?>