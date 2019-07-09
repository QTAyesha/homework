<!DOCTYPE html>
<html>
<head>
	<title>menu array</title>
</head>
<body>

	<?php
	
$menus = array("Mon","Tue","Wed","Thr","Fri","Sat","Sun");



 $t = date("D");
	echo $t,"<br>";
echo "<p>Today is ".$t; 
echo ", and we will cook the following dish:</p>";

if ($t == $menus[0]) {
    echo "Achar Gosht!";
} 
elseif ($t == $menus[1]) {
    echo "Todays menu is Daal mash, raita, salad and chapati!";
}
elseif ($t == $menus[2]) {
    echo "Todays menu is thr Briyani!";
}
elseif ($t == $menus[3]) {
    echo "Todays menu is kadu gosht!";

}
elseif ($t ==$menus [4]) {
    echo "Aalu matar!";
}
else {
    echo "We have koftey gravy today";
}


?>

</body>
</html>