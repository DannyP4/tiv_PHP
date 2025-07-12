<?php
    // arguments
    function familyName($fname, $year) {
        echo "$fname Refsnes. Born in $year<br>";
    }

    familyName("Hege", "1975");
    familyName("Stale", "1978");
    familyName("Kai Jim", "1983");

    // default arguments
    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight(); // sẽ dùng giá trị mặc định là 50
    setHeight(135);
    setHeight(80);

    // return values
    function sum($x, $y) {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);

    
?>