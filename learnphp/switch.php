<!DOCTYPE html>
<html>
<head>
	<title>switch menu</title>
</head>
<body>

	<?php

	echo $t = date("l");
    echo "<br>";

    switch ($t)
    {
    	case "Monday";
    	echo "Tikey";
    	break;

    	case "Tuesday";
    	echo "daal mash";
    	break;

    	case "Wednesday";
    	echo "palak gosht";
    	break;

    	case "Thursday";
    	echo "Biriyani";
    	break;

    	case "Friday";
    	echo "Tindey";
    	break;

    	case "Saturday";
    	echo "Daal Chawal";
    	break;

    	case "Sunday";
    	echo "Aalo gosht";
    	break;

    	default:
    	echo "Love you mom";
    }
 
	?>

</body>
</html>