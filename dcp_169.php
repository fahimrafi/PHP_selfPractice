<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');


$goldSign="$";


fscanf(STDIN, "%d", $testcase);


for($t =0; $t<$testcase; $t++)
{//testcase starts

//$line = trim(fgets(STDIN));

    
fscanf(STDIN, "%d%d", $r,$c);

//for input
for($i=0;$i<$r;$i++)
    {
        $graph[$i]= array(); 
    }

for($i=0;$i<$r;$i++)
{   
    $line = trim(fgets(STDIN));
    for($j=0;$j<$c;$j++)
    {            
        $graph[$i][$j]=$line[$j];
    }
}

///m++++++++++++++++++++

//out starts

$caseNo=$t+1;
$out12= "Case $caseNo:";
fprintf(STDOUT, "%s\n", $out12);
$countFound=0;

for($i=0;$i<$r;$i++)
{   
    for($j=0;$j<$c;$j++)
    {   

        if ($graph[$i][$j]==$goldSign)
        {   
            $countFound =$countFound+1;
            $I=$i+1;
            $J=$j+1;
            $caseNo=$t+1;
           // $out1= "Case $caseNo:";
            $out2 = "$I,$J";
           // fprintf(STDOUT, "%s\n", $out1);
            fprintf(STDOUT, "%s\n", $out2);
                        
        }
       
    }
    

   
}
if($countFound==0)
{
    
    $out13= "No Gold Found";
    
    fprintf(STDOUT, "%s\n", $out13);

}//out ends



}//testcase ends




