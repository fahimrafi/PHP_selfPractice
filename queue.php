<?php

$circle1centre="(5,4)";    //(centre position co-ordinates, radius)
$circle2centre="(100,500)";  // //(centre position co-ordinates, radius)

$r1=2;
$r2=6;


// removes brackets
$circle1centre=trim($circle1centre, "()");
$circle1centre=trim($circle1centre, "()");




$cir1 = (int)explode(",", $circle1centre);
$cir2 = (int)explode(",", $circle2centre);

$x1= $cir1[0];
$x2= $cir2[0];
$y1= $cir1[1];
$y2= $cir2[1];

$distance =sqrt(   ($x2-$x1)**2+($y2-$y1)**2   );

$R=$r1+$r2;


var_dump($cir1);
var_dump($cir1);


echo "d= ". "$distance"."\n";
echo 'r1+r2=  ' ."$R". "\n";



if( $distance <= ($r1+$r2) )
{
    echo "YES";
}
else
    echo "NO";




