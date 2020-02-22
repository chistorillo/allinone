<?php

Trait sampleTrait {
    public function sampleTraitFunction() {
        // echo "Hello trait!";
    }
}

Trait sampleTrait2 {
    public function sampleTraitFunction2() {
        // echo "Hello trait2!";
    }
}

class Sample {
    use sampleTrait, sampleTrait2;
}

class Fruit {
    
    public $name;
    public $color;

    function __construct($name) {
        $this->name = $name;
    }

    // function set_name($name) {
    //     $this->name = $name;
    // }

    function get_name() {
        return $this->name;
    }
}

$sampleTrait = new Sample();
$samples = $sampleTrait->sampleTraitFunction();
$samples2 = $sampleTrait->sampleTraitFunction2();
$apple = new Fruit('Apple');
$banana = new Fruit('Banana');

// // $apple->set_name('Apple');
// echo $apple->get_name();
// echo $banana->get_name();

// //trait sample:
// echo $samples;
// echo $samples2;
?>  