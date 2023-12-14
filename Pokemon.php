<?php
    class Pokemon {
        public string $name;
        public int $hp;
        public int $level;
        public int $attackPoints;

        public function __construct($name, $attackPoints, $hp=20, $level=1) {
            $this->name = $name;
            $this->attackPoints = $attackPoints;
            $this->hp = $hp;
            $this->level = $level;
        }

        public function printInfo(){
            echo "<h2>$this->name</h2>";
            echo "<b>HP: </b>$this->hp<br/>";
            echo "<b>Lv: </b>$this->level<br/>";
        }
        

        public function attack($pokemon){
            $pokemon->hp-= $this->attackPoints;
        }
    }

    ?>
