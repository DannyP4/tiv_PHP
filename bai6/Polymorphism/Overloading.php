<?php
    class A
    {
        public function __call($name, $arguments)
        {
            echo "'$name' method is called with arguments: <br>";

            foreach ($arguments as $index => $arg) {
                echo "Argument $index: $arg <br>";
            }
        }
    }

    $obj = new A();
    
    $obj->doSomething("Hello");
    $obj->doSomething("Hello", "Long");
    $obj->doSomething("One", "Two", "Three");

?>