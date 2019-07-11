<!DOCTYPE html>
<html>
<head>
	<title>foor-loop</title>
</head>
<body>
	<?php

     $colors = [ "red" , "blue" , "green" , "orange" , "purple" , "black" , "violet" , "white" ];

     for ($x = 0; $x < count ($colors); $x++ )
     	{
     		echo $colors[$x];
     		echo "<br>";
     	}


	?>

</body>
</html>