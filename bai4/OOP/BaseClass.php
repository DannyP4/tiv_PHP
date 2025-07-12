<?php
    class BaseClass
    {
        private $propertyName;

        public function __construct($variableValue)
        {
            $this->propertyName = $variableValue;
        }

        public function getPropertyName()
        {
            return $this->propertyName;
        }
    }

    $object = new BaseClass("Hello");
    echo $object->getPropertyName();

?>