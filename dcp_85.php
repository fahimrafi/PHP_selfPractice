<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $date);

if($date==29||$date==30)
fprintf(STDOUT, "YES\n");

else
fprintf(STDOUT, "NO\n");