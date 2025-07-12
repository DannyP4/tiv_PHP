<?php
    class A
    {
        public $publicVar = "Accessible everywhere";

        protected $protectedVar = "Accessible in A and subclasses";

        private $privateVar = "Encapsulated";

        public function getPrivateVar()
        {
            return $this->privateVar;
        }

        public function setPrivateVar($value)
        {
            $this->privateVar = $value;
        }
    }

    $object = new A();

    echo $object->publicVar . "<br>"; // OK

    echo $object->getPrivateVar() . "<br>"; // OK

    $object->setPrivateVar("Updated value");
    echo $object->getPrivateVar(); // OK

    // echo $object->privateVar; Error