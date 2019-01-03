<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);

$name=array();
$age=array();
$cgpa=array();
for($i =0; $i<$testcase; $i++)
{
    fscanf(STDIN, "%s%d%f", $name[$i],$age[$i],$cgpa[$i] );
 
    
}
 
var_dump($name);
var_dump($age);
var_dump($cgpa);

$cgpa_name=array_combine($cgpa,$name);
var_dump($name_age);
echo "***********************\n";
var_dump(array_combine($name_age,$cgpa));


