<?php 

echo "Tinggi awal (meter) : ";
$inTinggi = trim(fgets(STDIN));

echo "Berapa tahun ? ";
$inTahun = trim(fgets(STDIN));

function musimSemi($inTinggi, $inTahun)
{
	for ($i=1; $i <= $inTahun; $i++) { 
		if ($i == 1) {
			$tinggiSemi = $inTinggi * 2;
		} else if ($i > 1) {
			$tinggiSemi = $inTinggi * (2*$inTahun);
		}
	}
	return $tinggiSemi;
}

function musimGugur($tinggiSemi, $inTahun)
{
	for ($i=1; $i <= $inTahun; $i++) { 
		if ($i == 1) {
			$tinggiGugur = $tinggiSemi + 1;
		} else if ($i > 1) {
			$tinggiGugur = $tinggiSemi + (1+$inTahun);
		}
	}
	echo $tinggiGugur;	
}

musimGugur(musimSemi($inTinggi, $inTahun), $inTahun);

 ?>