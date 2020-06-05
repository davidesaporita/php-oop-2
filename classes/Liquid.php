<?php 

include_once __DIR__ . '/Product.php';

class Liquid extends Product {
    
    // Properties -------------------------------
    public $litres;
    public $acid;
    public $flammable;
    public $alert_text;

    // Constructor -------------------------------
    public function __construct($_name, $_description, $_litres, $_alert_text) {
        parent::__construct($_name, $_description);
        $this -> litres = $_litres;
        $this -> acid = $this -> trueFalse();
        $this -> flammable = $this -> trueFalse();
        $this -> alert_text = $_alert_text;
    }

    public function printDetails() { 
        parent::printDetails();
        echo "<br>Litres:       $this->litres
              <br>Alert Text:   $this->alert_text";
    }

}