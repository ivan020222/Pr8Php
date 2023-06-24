<?php
  $c = isset($_POST['c']) ? (int)$_POST['c'] : '';
  $d = isset($_POST['d']) ? (int)$_POST['d'] : '';

  if($c!=''&&$d!=''){
    $sum = $c + $d;
    $diff = $c - $d;
    $prod = $c * $d;
    $quot = ($d != 0) ? $c/$d : 'Неможливо обчислити (ділення на 0)';

    echo "c = ".$c;
    echo "<br>d = ".$d;
    echo "<br>Сума: ".$sum;
    echo "<br>Різниця: ".$diff;
    echo "<br>Добуток: ".$prod;
    echo "<br>Частка: ".$quot;
  }
?>