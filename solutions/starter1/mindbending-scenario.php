<?php

$input = array_map(function ($array) {return explode(" ", $array);}, explode("\n", file_get_contents("bendin.txt")));

$axl = $input[0][0];
$ayb = $input[0][1];
$axr = $input[0][2];
$ayt = $input[0][3];

$bxl= $input[1][0];
$byb = $input[1][1];
$bxr = $input[1][2];
$byt = $input[1][3];

$areaA = ($axr - $axl) * ($ayt - $ayb);
$areaB = ($bxr - $bxl) * ($byt - $byb);

if((($axr - $bxl) > 0) and (($bxr - $axl) > 0))
{
	// X coordinate intersection detected
	if((($byt - $ayb) > 0) and (($ayt - $byb) > 0))
	{
		$intX = max($axl, $bxl) - min($axr, $bxr);
		$intY = max($ayb, $byb) - min($ayt, $byt);

		$intersectionArea = $intX * $intY;
	}
	else
	{
		$intersectionArea = 0;
	}
}
else
{
	$intersectionArea = 0;
}

$area = ($areaA + $areaB - $intersectionArea);

file_put_contents("bendout.txt", $area);

