<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);



for($i =0; $i<$testcase; $i++)
{
    fscanf(STDIN, "%d", $n);

    if($n<120)
    {
        fprintf(STDOUT, "Naughty Boy Sifat\n");
    }
    else
    {
        fprintf(STDOUT, "Good Boy Sifat\n");
    }

    
}