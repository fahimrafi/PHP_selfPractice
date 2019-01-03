<?php
$array_a = ['test','test2']; // assume this is your first array
$array_b = ['test']; // assume this is the array you wan to compare against
$found = false;

foreach ($array_a as $key_a => $val_a) {
    $found = false;
    foreach ($array_b as $key_b => $val_b) {
       if ($val_a == $val_b) {
            echo '<br>'. $val_b .': check ';     
            $found = true;
        }     
    }
    if (!$found)
        echo '<br>'. $val_a .': chok ';
}
?>