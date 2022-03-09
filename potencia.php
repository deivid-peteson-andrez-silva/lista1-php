<?php

$expoente= $_POST['expo'];
$base= $_POST['base'];

$r = $base;
for($i=2; $i<=$expoente; $i++){
    
    $b = $r *   $base;

$r=$b;
}

echo($r);


?>