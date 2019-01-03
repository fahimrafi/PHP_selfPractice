<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);


for($i =0; $i<$testcase; $i++)
{
    $line = trim(fgets(STDIN));

    $medals= explode(" ",$line);

    foreach($medals as  &$vals)
    {
        $vals=(int)$vals;
    }

    $result= 10*$medals[0] + 50* $medals[1] + 100*$medals[2];
 
    fprintf(STDOUT, "%s\n", $result);
}
 