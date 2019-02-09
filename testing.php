
<?php

/*$input_line="ABCd";


$arr = str_split($input_line);

foreach($arr as $p)
    {
        if(ctype_lower($p))
        {
            $p= strtoupper($p);
        }
        else
        {
            $p= strtolower($p);
        }
    }

var_dump($arr);
*/
$p='a';

if(ctype_lower($p))
    {
        $p= strtoupper($p);
    }
else
    {
        $p= strtolower($p);
    }


echo $p;