<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$City_name = array(
		'New York, NY' => '8,175,133',
		'Los Angeles, CA' => '3,792,621',
		'Chicago, II' => '2,695,598',
		'Houston, TX' => '2,100,263',
		'Philadelphia, PA' => '1,526,006',
		'Phoenix, AZ' => '1,445,632',
		'San Antoni, TX '=> '1,327,407',
		'San Diego, CA'=> '1,307,402',
		'Dallas,TX' => '1,197,816',
		'San Jose, CA' => '945,942'
	);
	
	echo "<table border=1 >";
	foreach ($City_name as $key => $value) {
		echo "<tr><td>";
		echo "$key";
		echo "</td><td>";
		echo "$value";
		echo "</td></tr>";
	}
	echo "</table>";
	echo "<br>";
	

	echo "Ascending order By CityName";
	echo "<br>";
	echo "<table border=1 >";
	asort($City_name);
	foreach ($City_name as $key => $value) {
		echo "<tr><td>";
		echo "$key";
		echo "</td><td>";
		echo "$value";
		echo "</td></tr>";
	}
	echo "</table>";
	echo "<br>";

	echo "Descending order By CityName";
	echo "<br>";
	echo "<table border=1 >";
	arsort($City_name);
	foreach ($City_name as $key => $value) {
		echo "<tr><td>";
		echo "$key";
		echo "</td><td>";
		echo "$value";
		echo "</td></tr>";
	}
	echo "</table>";
	echo "<br>";


	echo "Ascending order By Population";
	echo "<br>";
	echo "<table border=1 >";
	ksort($City_name);
	foreach ($City_name as $key => $value) {
		echo "<tr><td>";
		echo "$key";
		echo "</td><td>";
		echo "$value";
		echo "</td></tr>";
	}
	echo "</table>";
	echo "<br>";



	echo "Descending order By Population";
	echo "<br>";
	echo "<table border=1 >";
	krsort($City_name);
	foreach ($City_name as $key => $value) {
		echo "<tr><td>";
		echo "$key";
		echo "</td><td>";
		echo "$value";
		echo "</td></tr>";
	}
	echo "</table>";
	echo "<br>";
	?>
</body>
</html>
