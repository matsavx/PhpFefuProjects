<?php

namespace Bank;

 class Bankomat {
     private $money_value;
     public function __construct($money_value) {
         $this->money_value = $money_value;
     }
     public function get_money($money_value){
         $this->money_value += $money_value;
     }
     public function get_fucking_money() {
         return $this->money_value;
     }
 }