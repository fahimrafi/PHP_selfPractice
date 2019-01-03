<?php


// 1.example of new operator

class Math{
    //$num1;
    //$num2;
    function addition($num1,$num2){        
        $sum= $num1 + $num2;
        return $sum;       
    }
}
$math_1= new Math();

echo $math_1->addition(2,5) ."</br>";












// 2.example of [

$myArray = array(6);

$myArray[0]= 10;

echo $myArray[0]."</br>";

// 3. example of **

$x=3;

$y= $x**3; //** */

echo $y."</br>";












// 4. example of ++ -- ~ (int) (float) (string) (array) (object) (bool) @

$x =3;
$x++; //++
echo $x ."</br>";

$x =3;
$x--; //--
echo $x ."</br>";

$x =3;
$y = ~$x; //~
echo $y ."</br>";

$x=16.89;
$x= (int) $x; //(int)
var_dump ($x);
echo "</br>";


$x="1000";
$x= (float) $x; //(float)
var_dump ($x);
echo "</br>";

$x=16.89;
$x= (string) $x; //(string)
var_dump ($x);
echo "</br>";

$x=16.89;
$x= (array) $x; //(array)
var_dump ($x);
echo "</br>";

$x=16.89;
$x= (bool) $x; //(bool)
var_dump ($x);
echo "</br>";

$x=16.89;
$x= (object) $x; //(object)
var_dump ($x);
echo "</br>";









// 5. example of instanceof

if ($math_1 instanceof math)
echo "Yes" ."</br>";
else
echo "No"."</br>";













// 6. example of !


$x=true;
$y= !$x;
var_dump  ($y);
echo "</br>";











// 7. use of * / %

$x=10;
$y=4;
echo $x*$y/5%2 ."</br>";
//    10*4/5%2 = 40/5%2 = 8%2 = 0












// 8. use of + - .

$x=10;
$y=4;
echo $x+$y . " is summation of 10 and 4" ."</br>";
echo $x-$y . " is summation of 10 and 4" ."</br>";
echo "My name is". " Fahim" ."</br>";












// 9. use of << >>

$x=10;
$y=4;

echo $x>>2;
echo "</br>";

echo $y<<3;
echo "</br>";








// 10. use of < > <= >=

$x=10;
$y=4;

if($x>$y) // >
echo "x is greater than y" ."</br>";
else
echo "y is greater than x" ."</br>";

if($x>=$y) // >=
echo "x is greater than or equal to y" ."</br>";
else
echo "y is greater than x" ."</br>";

$x=4;
$y=10;


if($x<$y) // <
echo " y is greater than x" ."</br>";
else
echo " x is greater than y" ."</br>";


if($x<=$y) // <=
echo "x is less than or equal to y" ."</br>";
else
echo "y is less than x" ."</br>";








// 11. use of == != === !== <> <=>

$x=10;
$y="10";

if ($x==$y) // ==
echo "the value of x is equal to  value of y though their data type is different" . "</br>";

$x=10;
$y=34;

if ($x!=$y) // !=
echo "x is not equal to y" . "</br>";


$x=10;
$y=10;
if ( $x===$y ) // ===
echo "data types of x and y are same as well as their values" . "</br>";

$x=10;
$y="10";
if ( $x!==$y ) // !==
echo "data types of x and y are not same unlike their values" . "</br>";

$x=10;
$y=5;
if ($x<>$y) // <>
echo "x is not equal to y" . "</br>";

$x=10;
$y=5;
if ($x<=>$y) // <=>
echo "x is not equal to y" . "</br>";
else
echo "x is equal to y" . "</br>";

if (($x<=>$y)==($x<>$y)) // <> and <=> are same
echo "true" ."</br>";







// 12. use of  &
$x=10;
$y=5;
$result = $x & $y;  // &
echo $result;
echo "</br>";







// 13. use of ^
$x=10;
$y=5;
$result = $x ^ $y;  // ^
echo $result;
echo "</br>";







// 14. use of |
$x=10;
$y=5;
$result = $x | $y;  // |
echo $result;
echo "</br>";





//15. use of &&
$x=10;
$y=5;
if ($x==10 && $y==5)
echo "both of (\$x==10) and (\$y==5) are true". "</br>";




// 16. use of ||



$x=10;
$y=5;
if ($x==10 || $y!=5)
echo "either (\$x==10) or (\$y==5) are true". "</br>";

// 17. use of ??

$newVariable=10;

$newVariable ?? 7;

echo $newVariable;
echo "</br>";

// 17. use of ternary



$x=10;
$y=5;

$x==10?$y=5:$y=6;













