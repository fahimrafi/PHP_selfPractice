<?php



$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');


fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d", $E);

$graph = array();

for($i=0;$i<$N;$i++)
{
    $graph[$i] = array();
}

for($i=0;$i<$E;$i++)
{
    fscanf(STDIN, "%s%s", $x, $y);


    
}

