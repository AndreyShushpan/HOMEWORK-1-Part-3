<?php
    // 4.1. Рассчитать значение y при заданном значении x
    $x = rand(-20,20); echo "Переменная x имеет значение: $x\n<br/>";
    if($x>0):
        $y = sin($x)**2;
        echo "Переменная x имеет положительное значение, поэтому расчитываем значение y по формуле y=sin<sup>2</sup> x<br/>y=$y";
    else:
        $y = 1-2*sin($x**2);
        echo "Переменная x имеет отрицательное значение или равна нулю, поэтому расчитываем значение y по формуле y=1-2sin x<sup>2</sup><br/>y=$y";
    endif;
?>