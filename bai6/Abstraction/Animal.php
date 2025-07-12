<?php
    abstract class Animal
    {
        protected $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        abstract protected function run();
        abstract protected function eat();

        public function showInfo()
        {
            echo "Hello, I am " . $this->name;
        }
    }

    class Cat extends Animal
    {   
        public function run()
        {
            echo "Running on 4 legs.";
        }

        public function eat()
        {
            echo "Cats love the fish.";
        }
    }

    class Bird extends Animal
    {
        public function run()
        {
            echo "Flying with wings.";
        }

        public function eat()
        {
            echo "Birds eat seeds.";
        }
    }

    $cat = new Cat("Tom");
    $bird = new Bird("Tweety");

    $cat->showInfo();   
    $cat->run();        
    $cat->eat();      

    echo "<br>";

    $bird->showInfo();  
    $bird->run();   
    $bird->eat(); 
?>