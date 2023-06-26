<?php
  $e = isset($_POST['e']) ? $_POST['e'] : '';
  $f = isset($_POST['f']) ? $_POST['f'] : '';

  if($e!=''&&$f!=''){
    echo $e.$f;
    echo "<br>".$f.$e;
  }
?>