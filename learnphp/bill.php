<!DOCTYPE html>
<html>
<head>
	<title>LESCO bill calculator</title>
</head>
<body>

	

	<div>
		<h1>LESCO bill calculator(Php)</h1>
		<form action=""method="post" id="quiz-form">
			<input type="number" name="units" id="units" placeholder="enter no. of units"/>
			<input type="submit" name="unit-submit" id="unit-submit" value="submit"/>
		</form>
	</div>

     <?php

        $z = $y = '';
        if (isset($_POST['unit-submit'])) {
        $units = $_POST['units'];
        if (!empty($units)) {
        $y = calculate_bill($units);
        $z = 'Total amount of ' . $units . ' - ' . $y;
    }
}

function calculate_bill($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_above = 6.50;
 
    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_above);
    }
    return number_format((float)$bill, 2, '.', '');
}
 
?>

     <div>
		    <?php echo '<br />' . $z; ?>
     </div>	

</body>
</html>