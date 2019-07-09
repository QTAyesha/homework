<!DOCTYPE html>
<html>
<body>

<?php
$t = date("D");
//$t = '';

  echo $t,"<br>";
echo "<p>Today is " . $t; 
echo ", and we will cook the following dish:</p>";

if ($t == "Tue") {
    echo "Achar Gosht!";
} 
elseif ($t == "Wed") {
    echo "Todays menu is Daal mash, raita, salad and chapati!";
}
elseif ($t == "Thr") {
    echo "Todays menu is thr Briyani!";
}
elseif ($t == "Fri") {
    echo "Todays menu is kadu gosht!";

}
elseif ($t == "Sat") {
    echo "Aalu matar!";
}
else {
    echo "We have koftey gravy today";
}



?>
 
</body>
</html>