<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d", $testcase);


for($i =0; $i<$testcase; $i++)
{
    
    

    $match1 = trim(fgets(STDIN));
    $match2 = trim(fgets(STDIN));

    $match1 = explode(" ",$match1);
    $match2 = explode(" ",$match2);

    $match1 = array_map('intval', $match1);
    $match2 = array_map('intval', $match2);

    $bangla_match_won = 0;

    if(    ($match1[0]+$match1[1]) > ($match1[2]+$match1[3])   )
    {
        $bangla_match_won = $bangla_match_won + 1;
        
        if(    ($match2[0]+$match2[1]) > ($match2[2]+$match2[3])   )
        {
            $bangla_match_won = $bangla_match_won + 1;
        }

    }

    if($bangla_match_won==2)
    {
        $output="Banglawash";
        fprintf(STDOUT, "%s\n", $output);
    }
    else
    {
        $output="Miss";
        fprintf(STDOUT, "%s\n", $output);
    }
    
    
    
}