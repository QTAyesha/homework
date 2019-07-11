<!DOCTYPE html>
<html>
<head>
	<title>php var</title>
</head>
<body>

	<?php

	//simple var example//

	$txt = "Dont mess with me";

	echo "$txt";
    echo "<br>";

	//substraction of var//

    $x = 1991;

    $y = 2019;

    echo $x - $y;
    echo "<br>";

    $txt = "www.google.com";

    echo "All the information, you will find at $txt";
    echo "<br>";

    //or//

    echo "all the info,you need is at" .$txt. "!";
    echo "<br>";

    //global scope//

    $x = 10;

    function myTest()
    {
    	echo "<p>var x inside function is: $x</p>";
    }

    myTest();

    echo "<p>var x outside function is: $x</p>";

    //another example of global scope//

    $a = 10;
    $b = 20;

    function mineTest() { 

    	global $a , $b;
    	$b = $a + $b;
    }

    mineTest();
    echo $b;
    echo "<br>";
    echo "<br>";

    //globals (array)//

    $l = 2;
    $m = 4;

    function myetest(){
    	$GLOBALS ['m'] = $GLOBALS ['l'] + $GLOBALS ['m'];
    }

    myetest();
    echo $m;
    echo "<br>";
    echo "<br>";


    //static scope//

   function Mitest(){
   static $x = 1;
   echo $x;
   $x++;
   }

    Mitest();
    echo "<br>";

    Mitest();
    echo "<br>";

    Mitest();
    echo "<br>";

    ?>

</body>
</html>