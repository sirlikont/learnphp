<?php

class Cat {
    use HasWeight;
}

class Gun {
    use HasWeight, HasAmmo;
}

class CrossBow {
    use HasAmmo;
}

trait HasAmmo{
    public $ammo;
}

trait HasWeight {
    private $weight;

    public function getWeight(){
        return $this->weight;
    }
    public function setWeight($weight){
        $this->weight = $weight;
        if($weight < 0){
            $this->weight = 0;
        };
    }
}

$cat = new Cat();
$gun = new Gun();
$crossbow = new CrossBow;
var_dump($cat, $gun, $crossbow);
?>
