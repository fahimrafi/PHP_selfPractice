<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



while(fscanf(STDIN, "%d %d\n", $hrs, $n)!=null)

{


    for($i =0; $i<$n; $i++)
    {    
        fscanf(STDIN, "%d\n", $arr[$i]);
    }
    $oneday_work=array_sum($arr);
    $days=ceil($hrs/$oneday_work);



    if($hrs<=$oneday_work)
    {
        fprintf(STDOUT, "Project will finish within 1 day.\n");
    }
    else
    {
        fprintf(STDOUT, "Project will finish within $days days.\n");
    }

}