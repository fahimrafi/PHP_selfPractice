<?php

$num1="10";
$num2="5";

$tempNumb1 = $num1;
$tempNumb2  =$num2;

if($num1[0] == '-' && $num2[0]!='-')
{
    $num1 = substr($num1,1);
}
else if($num1[0] != '-' && $num2[0] == '-')
{
    $num2 = substr($num2,1);
}

else if( $num1[0] == '-' && $num2[0] == '-' )
{
    $num1 = substr($num1,1);
    $num2 = substr($num2,1);
}


$s1 = strrev($num1);
$s2 = strrev($num2);

$m = array_fill(0,strlen($s1)+strlen($s2),null);

for($i = 0; $i <strlen($s1); $i++ )
{
    for( $j=0; $j <strlen($s2);$j++)
    {
        $m[$i+$j] = $m[$i+$j] + ((int)ord(s1[$i])-(int)ord('0') * (int)ord(s2[$i])-(int)ord('0'));
    }
}


$product;


for ($i = 0; $i< sizeof($m); $i++)
{
    $digit = $m[$i]%10;
    $carry = $m[$i]/10;

    if($i+1<sizeof($m))
    {
        $m[$i+1] = $m[$i+1] + $carry;
    }

    $product = (string)$digit . (string)$product;

}

while(strlen($product)>1 && $product[0] == '0')
{
    $product = substr($product,1);
}


if($tempNumb1[0] == '-' && $tempNumb2[0]!='-')
{
    $product= '-'.$product;
}
else if($tempNumb1[0] != '-' && $tempNumb2[0] == '-')
{
    $product= '-'.$product;
}

else if( $tempNumb1[0] == '-' && $tempNumb2[0] == '-' )
{
    $product= $product;
} 


echo $product;