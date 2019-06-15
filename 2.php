<?php 

echo 'Masukkan alas atau tinggi : ';
$input = trim(fgets(STDIN));

function prima($n = 100)
{
	$result = [];
	for ($i=1; $i <= $n; $i++) { 
		$counter = 0;
		for ($j=1; $j <= $i; $j++) { 
			if ($i % $j == 0) {
				$counter++;
			}
		}
		if ($counter==2) {
			$result[] = $i;
		}
	}
	return $result;
}

$arrayLength = count(prima());
$array = prima();
for ($i=0; $i < $input; $i++) { 
	for ($j=0; $j < $arrayLength; $j++) {
		if ($i==$j) {
			echo ' ' . $array[$j];
		} else {
			if ($i>=$j) {
				echo ' ' . $array[$j];
			}
		}
	}
	echo PHP_EOL;
}

 ?>