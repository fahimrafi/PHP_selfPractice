<?php
$input_array = array('a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5,'f'=>6,'g'=>7,'h'=>8,'i'=>9,'j'=>10);

var_dump($input_array);

var_dump(array_chunk($input_array, 3)); // reindex numerically if false/ left blank 
var_dump(array_chunk($input_array, 3, true));// preserve keys

//var_dump(array_chunk($input_array, 2, true));
?>
                                                                         