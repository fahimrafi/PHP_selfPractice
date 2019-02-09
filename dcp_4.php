<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



while(fscanf(STDIN, "%d %d\n", $hrs, $n)!=null)

{


for($i =0; $i<$n; $i++)
{
    $arr;
    fscanf(STDIN, "%d\n", $arr[$i]);   

}

$oneday_work=array_sum($arr);

$days=round($hrs/$oneday_work);

$days=$days+1;

if($hrs<=$oneday_work)
fprintf(STDOUT, "Project will finish within 1 day.\n");
else
fprintf(STDOUT, "Project will finish within $days days.\n");
}