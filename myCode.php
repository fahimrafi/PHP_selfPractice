<?php

$num1 = "200";
$num2 = "101";




function string_to_int_array($string)
{
    $array = str_split($string);



    foreach($array as  &$vals)
    {
        $vals=(int)$vals;
    }

    return $array;
};

function swap(&$one,&$two)
{
    $temp= $one;
    $one= $two;
    $two=$one;
}


    



function sub($string_num1,$string_num2)
{   
    if (strlen($string_num1)<strlen($string_num2))
    {
        swap($string_num1,$string_num2);
    }
    //$length_of_result_array = strlen($num1) + 3;


    //reverse string
    $rev_string_num1= strrev($string_num1);
    $rev_string_num2= strrev($string_num2);

    

    

    //string to int array
    $rev_num1_int_array = string_to_int_array($rev_string_num1);
    $rev_num2_int_array = string_to_int_array($rev_string_num2);

    $result_array = array();


    $carry = 0;

    for($i=0; $i<strlen($rev_string_num1);$i++)
    {   

        if ($rev_num1_int_array[$i]<$rev_num2_int_array[$i])

        {
            
            $temp =  (10+$rev_num1_int_array[$i]) - ($rev_num2_int_array[$i] + $carry);
            $carry= $carry + 1;
        }

        else 
        {
            $temp = $rev_num1_int_array[$i] - ($rev_num2_int_array[$i] + $carry); 

            $carry = 0;
        }
        

        

        $result_rev_array[$i] = (int)($temp);       
        
        
        
              
        
        /*if ($temp < 10 )
        (
                $result_array[$i] = $temp+ $carry;
                $carry =0;
        )        
        else
        (
                $carry = ($temp+$carry)/10;
                $temp2= $temp - 10*$carry;
                $result_array[$i] = $temp+ $carry;
        )*/
        

    }

    $result_rev_string= implode("", $result_rev_array);

    $result =strrev($result_rev_string);

    return $result;

}



echo sub($num1,$num2);







