<?php
$input = "I love Bangladesh, I Love tiger";
$parts = explode(" " , $input);
//var_dump($parts);
for($i=0;$i<sizeof($parts); $i++)
{
    $parts[$i] = rtrim($parts[$i],",");
    $parts[$i] = rtrim($parts[$i],"!");
    $parts[$i] = rtrim($parts[$i],"?");
    $parts[$i] = rtrim($parts[$i],".");
    //$parts[$i] = lcfirst($parts[$i]);
}

//var_dump($parts);

//$uniqueParts = array_unique($parts);

//var_dump($uniqueParts);
print_r(array_count_values($parts));
/*for($i=0;$i<sizeof($uniqueParts); $i++)
{

}*/



