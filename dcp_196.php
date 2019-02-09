<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);


for($i =1; $i<=$testcase; $i++)
{
 
    fscanf(STDIN, "%f %f", $u, $t);

    $a=(0-$u)/$t;
    fprintf(STDOUT, "%s\n",number_format($a, 2, '.', ''));
    

}