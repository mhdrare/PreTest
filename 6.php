<?php 

function convertDecToBin($decimal)
{
	$binary = '';
	while ($decimal > 0) {
		if ($decimal % 2 == 0) {
			$decimal /= 2;
			$binary .= 0;
		} else {
			$decimal = ($decimal / 2) - 0.5;
			$binary .= 1;
		}
	}
	return strrev($binary);
}

echo "Decimal : ";
$decimal = trim(fgets(STDIN));

echo 'Binary  : ' . convertDecToBin($decimal);

 ?>
