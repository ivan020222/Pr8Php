<?php
  $a = isset($_GET['a']) ? (int)$_GET['a'] : '';
  $b = isset($_GET['b']) ? (int)$_GET['b'] : '';
  
  if($a!=''&&$b!=''){
    $sum = $a + $b;
    $diff = $a - $b;
    $prod = $a * $b;
    $quot = ($b != 0) ? $a/$b : 'Неможливо обчислити (ділення на 0)';

    echo "a = ".$a;
    echo "<br>b = ".$b;
    echo "<br>Сума: ".$sum;
    echo "<br>Різниця: ".$diff;
    echo "<br>Добуток: ".$prod;
    echo "<br>Частка: ".$quot;
  }
?>