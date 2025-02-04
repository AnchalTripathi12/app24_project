<?php
    class test{
        var $name;
        var $age;
        var $salary;
        public function setName($name){
            $this->name=$name;
            return $this;
        }
        public function setAge($age){
            $this->age=$age;
            return $this;
        }
        public function setSalary($salary){
            $this->salary=$salary;
            return $this;
        }
        public function get(){
            return "My name is $this->name,age $this->age and salary $this->salary";  
        }
    }
    $obj= new Test;
    echo $obj->setName('Anchal')
             ->setAge('21')
             ->setSalary('1M$')
             ->get();
?>