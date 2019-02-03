<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);


for($i =0; $i<$testcase; $i++)
{
    fscanf(STDIN, "%s", $input);

    $revInput = strrev($input);

    if (strtolower($revInput)==strtolower($input))
    {
        fprintf(STDOUT, "Yes\n");
    }
    else
    {
        fprintf(STDOUT, "No\n");

    }
} 