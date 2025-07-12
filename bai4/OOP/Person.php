<?php
    class Person
    {
        private $name;
        private $age;

        public function __construct() {
        }

        // public function __construct($name, $age) {
        //     $this->name = $name;
        //     $this->age = $age;
        // }

        public function sayHello() {
            return "Hello World";
        }

        public function getAge() {
            return $this->age;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setAge($age) {
            $this->age = $age;
        }
    }

    //$p1 = new Person();
    // $p2 = new Person("Nam", 20);
    // echo $p2->sayHello() . "<br>";
    // echo "Name: " . $p2->getName() . "<br>";
    // echo "Age: " . $p2->getAge() . "<br>";

    $person = new Person();
    $person->setName("Nam");
    $person->setAge(20);
    echo $person->sayHello() . "<br>";
    echo "Name: " . $person->getName() . "<br>";
    echo "Age: " . $person->getAge() . "<br>";
?>