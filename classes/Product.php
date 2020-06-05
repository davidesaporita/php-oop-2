<?php

class Product {
    
    // Properties ----------------------------------------------------------------
    public $id;
    public $name;
    public $description;
    public $unit_price;
    public $position;
    public $stock_number;
    public $quantity;
    public $value;
    public $in_order;
    public $on_sale;
    public $out_of_production;
    public $max_discount;
    public $operator_add; 
    public $added_date;
    public $operator_last_update;
    public $last_updated_date;

    // Constructor ----------------------------------------------------------------
    public function __construct($_name, $_description) {
        $this -> id = rand(4000,9000);
        $this -> name = $_name;
        $this -> description = $_description;
        $this -> unit_price = rand(1,80);
        $this -> position = 'G20';
        $this -> stock_number = 'H725';
        $this -> quantity = rand(5,150);
        $this -> value = $this -> unit_price * $this -> quantity;
        $this -> in_order = $this -> trueFalse();
        $this -> on_sale = $this -> trueFalse();
        $this -> out_of_production = $this -> trueFalse();
        $this -> max_discount = 20;
        $this -> operator_add = 'Yourself';
        $this -> added_date = $this -> now();
        $this -> operator_last_update = 'Yourself';
        $this -> last_updated_date = $this -> now();
    }   

    // Methods ----------------------------------------------------------------
    public function printDetails() {
        echo "<br>
              <br>Name:<strong> $this->name </strong>
              <br>Description:  $this->description
              <br>Quantity:     $this->quantity
              <br>Unit Price:   $this->unit_price
              <br>Position:     $this->position
              <br>Stock Number: $this->stock_number
              <br>Value:        $this->value
              <br>On sale:      $this->on_sale
              <br>In order:     $this->in_order";
    }

    protected function trueFalse() {
        return rand(0,1) === 0 ? true : false;
    }

    protected function now() {
        return date("Y-m-d h:i:s");
    }

}