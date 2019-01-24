<?php

function DrawCircle($count)
{
    echo " executing level $count <br/>";

    if($count<5)
        DrawCircle($count+1);

    echo " Ending level $count <br/>";    
}

DrawCircle(1);