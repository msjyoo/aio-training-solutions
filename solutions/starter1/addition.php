<?php

$x = file_get_contents("addin.txt");

$x = explode(" ", $x);

$y = $x[0] + $x[1];

file_put_contents("addout.txt", $y);
