<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);


for($i =0; $i<$testcase; $i++)
{
    
    fscanf(STDIN, "%d", $basketNo);

    $line = trim(fgets(STDIN));

    $actual_total_marbels = explode(" ",$line);

    $actual_total_marbels = array_map('intval', explode(' ', $line));
    
    
    $catsCount=array();
    $temp=array();
 
    for($j=0; $j<$basketNo;$j++)
    {
        $temp[$j] = $actual_total_marbels[$j]-$j;

        if($temp[$j]<0)
        {
            $catsCount[$j]=0; 
        }
        else
        $catsCount[$j] = $temp[$j];
    }

    $output = array_sum($actual_total_marbels)-array_sum($catsCount);
 
    fprintf(STDOUT, "%d\n", $output);
}