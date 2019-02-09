<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);


for($i =1; $i<=$testcase; $i++)
{
    
    

    $numbers = trim(fgets(STDIN));    

    $numbers = explode(" ",$numbers);

    sort($numbers);
    $count= count($numbers);
    $last_index= $count-1;

    $result = "Case $i: Among $count numbers $numbers[$last_index] is maximum and $numbers[0] is minimum";   
     
    fprintf(STDOUT, "%s\n", $result);
}