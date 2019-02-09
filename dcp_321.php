<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);


for($i =1; $i<=$testcase; $i++)
{
 
    fscanf(STDIN, "%s", $input_line);
    $arr = str_split($input_line);
    
    foreach($arr as &$p)
    {
        if(ctype_lower($p))
        {
            $p= strtoupper($p);
        }
        else
        {
            $p= strtolower($p);
        }
    }

    $output_line= implode("",$arr);

    fprintf(STDOUT, "%s\n", $output_line);

}