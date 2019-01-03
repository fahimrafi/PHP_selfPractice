<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);

$array = array(1,3,4);

for($i=3; $i<44;$i++)
{
    $array[$i]=$array[$i-1]+$array[$i-2];
} 

for($i =0; $i<$testcase; $i++)
{
    fscanf(STDIN, "%d", $n);

    fprintf(STDOUT, "%s\n", $array[$n-1]);

    
}
 