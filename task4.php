<?php
  $e = isset($_POST['e']) ? $_POST['e'] : '';
  $f = isset($_POST['f']) ? $_POST['f'] : '';

  if($c!=''&&$d!=''){
    echo $e.$f;
    echo "<br>".$f.$e;
  }
?>