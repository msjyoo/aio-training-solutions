<?php

$x = file_get_contents("mixin.txt");

$x = explode(" ", $x);

$nominator = $x[0];
$denominator = $x[1];

$remainder = $nominator % $denominator;

$mixed = ($nominator - $remainder) / $denominator;

if($remainder !== 0)
{
	file_put_contents("mixout.txt", "$mixed $remainder/$denominator");
}
else
{
	file_put_contents("mixout.txt", "$mixed");
}

