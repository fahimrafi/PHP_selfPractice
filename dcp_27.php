<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');



fscanf(STDIN, "%d\n", $testcase);


for($i =1; $i<=$testcase; $i++)
{

    fscanf(STDIN, "%d\n", $number);
    
    function IsPrime($n)
        {
            for($x=2; $x<$n; $x++)
            {
                if($n %$x ==0)
	                {
		                return 0;
		            }
            }
            return 1;

        }
$a = IsPrime($number);
if ($a==0)
fprintf(STDOUT, "No\n");
else
fprintf(STDOUT, "Yes\n");

}