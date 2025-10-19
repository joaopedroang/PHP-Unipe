<?php
function maior($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    }
    elseif ($num2 > $num1) {
        return $num2;
    }
    else {
        return "Os números são iguais";
    }
}
?>