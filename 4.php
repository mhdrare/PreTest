<?php

$data = [6,22,34,15,2,13,26,57,42,32];

function minim($data)
{
	$arrayLength = count($data);
	sort($data);
	return min($data);
}

function maxim($data)
{
	$arrayLength = count($data);
	sort($data);
	return max($data);
}

function ascSort($data)
{
	$arrayLength = count($data);
	sort($data);
	return $data;
}

function descSort($data)
{
	$arrayLength = count($data);
	rsort($data);
	return $data;
}


echo 'Data Terkecil : ' . json_encode(minim($data)) . PHP_EOL;
echo 'Data Terbesar : ' . json_encode(maxim($data)) . PHP_EOL;
echo 'Ascending Sort : ' . json_encode(ascSort($data)) . PHP_EOL;
echo 'Descending Sort : ' . json_encode(descSort($data));

?>