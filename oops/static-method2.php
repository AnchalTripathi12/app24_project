<?php
     class Atm{
        static $amount=1000;
        public static function checkbalance(){
            echo self::$amount;
        }
    }
    class Customer extends Atm{
        public function balance(){
            echo self::$amount;
        }
    }
    $c=new Customer;
    echo Customer::$amount;
    $c->balance();
?>