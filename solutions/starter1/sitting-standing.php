<?php

$lines = explode("\n", str_replace("\r\n", "\n", file_get_contents("sitin.txt")));

$x = explode(" ", $lines[0]);
$numberOfRows = $x[0];
$seatsPerRow = $x[1];

$totalTickets = $lines[1];

if($totalTickets <= ($numberOfRows * $seatsPerRow))
{
	$output = "$totalTickets 0";
}
else
{
	$numberOfPeopleStanding = ($totalTickets - ($numberOfRows * $seatsPerRow));
	$numberOfPeopleSitting = ($numberOfRows * $seatsPerRow);
	$output = "$numberOfPeopleSitting $numberOfPeopleStanding";
}

file_put_contents("sitout.txt", $output);

