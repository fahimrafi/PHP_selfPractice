<?php

$num1 = "500";
$num2 = "9";

//adding zeros before num1 and equalizing num2 with num1
$num1 = "00000".$num1;
$add_to_num2= str_repeat("0", strlen($num1)-strlen($num2));
$num2 = $add_to_num2 . $num2;


function string_to_int_array($string)
{
    $array = str_split($string);
    foreach($array as  &$vals)
    {
        $vals=(int)$vals;
    }
    return $array;
}

function swap(&$one,&$two)
{
    $temp= $one;
    $one= $two;
    $two=$temp;
}   


function sum($string_num1,$string_num2)
{   
    if (strlen($string_num1)<strlen($string_num2))
    {
        swap($string_num1,$string_num2);
    }


    //reverse string
    $rev_string_num1= strrev($string_num1);
    $rev_string_num2= strrev($string_num2);    

    //string to int array
    $rev_num1_int_array = string_to_int_array($rev_string_num1);
    $rev_num2_int_array = string_to_int_array($rev_string_num2);

    
    $result_array = array();
    $result_rev_array = array();
    $carry = 0;
    $temp1 = 0;
    for($i=0; $i<strlen($rev_string_num1);$i++)
    {
        $temp1 =  $rev_num1_int_array[$i] + $rev_num2_int_array[$i] + $carry; 
        $carry= (int)($temp1/10);
        $result_rev_array[$i] = (int)($temp1%10); 
    }

    $result_rev_string= implode("", $result_rev_array);
    $result =strrev($result_rev_string);
    $final_result = ltrim($result, '0');

    if ($final_result =="" )
    {
        return "0";
     }

    else
    {
        return $final_result;
    }
}





function multiply($s1,$s2)
{
    
    $store="0";

    $s2=(int)$s2;
    
    for($TR=0;$TR<$s2;$TR++)
    {
        $store= sum($store,$s1);
    }

    return $store;

}



$product = multiply ($num1,$num2);

echo $product;