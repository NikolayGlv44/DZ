<?php

function gender($name)
{
    $x = substr($name, - 2);
        if ($x == 'а' || $x == 'я'){
            return 'жен';
        } elseif ($x =='н' || $x =='й' || $x =='р' || $x =='с' || $x =='м' || $x == 'т' ) {
            return 'муж';
        } else {
            return 'null';
        }
}

echo gender('Маргарита');

?>


