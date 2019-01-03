<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);


for($i =0; $i<$testcase; $i++)
{
    $line = trim(fgets(STDIN));

    $reverserdLine = strrev($line);
 
    fprintf(STDOUT, "%s\n", $reverserdLine);
}
 


