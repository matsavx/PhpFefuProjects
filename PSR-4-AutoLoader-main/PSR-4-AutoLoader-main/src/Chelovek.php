<?php

namespace Bank;

class Chelovek {
    private $name;
    private $money;

    public function __construct($name, $money)
    {
        $this->name = $name;
        $this->money = $money;
    }

    public function add_money($Bankomat, $money_value) {
        $this->money = $this->money-$money_value;
        $Bankomat->get_money($money_value);
    }
}