<?php
    // 4.4. Определить, в какую из областей — I или II — попадает точка с заданными координатами
    $x = rand(-20,20);
    $y = rand(-20,20);
    if($y>3):
        $o = "I";
    else:
        $o = "II";
        endif;
    echo "Точка с координатами ($x,$y) находится в $o области";
?>