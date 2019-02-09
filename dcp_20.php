<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d\n", $testcase);


for($i =1; $i<=$testcase; $i++)
{
    
    fscanf(STDIN, "%f %f %f %f %f", $Cx, $Cy, $R, $Px, $Py);

    $distance = sqrt( pow(($Px-$Cx),2) + pow(($Py-$Cy),2) );

    if($distance<$R)
    $result="Inside";
    elseif($distance==$R)
    $result="OnCircle";
    else
    $result="Outside";
     
     
    fprintf(STDOUT, "Case %d: %s\n", $i,$result);
}