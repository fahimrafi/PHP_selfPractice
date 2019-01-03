<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');


fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $testcase);


for($i =0; $i<$testcase; $i++)
{
    $line = trim(fgets(STDIN));

    $inputLine[$i]=$line;
 
    //fprintf(STDOUT, "%s\n", $reverserdLine);
}
 
print_r($inputLine);
//fprintf(STDOUT, "%s\n", $inputLine);


for($i=0; $i<$testcase;$i++)
{
    for($j=0; $j<$testcase;$j++)
    {
        $newArray[$i][$j]=
    }
}



