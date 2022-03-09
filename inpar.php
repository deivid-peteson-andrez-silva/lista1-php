<?php

$num = $_POST['num'];
$n=1;
$cal =1;
$cal1 = 0;
echo("os numeros inpares são <br><br><hr>");

while ( $n<=$num ){

    $r = $n % 2;     
    if ($r==1){
       
        $cal1 = $cal1 + $n;
        $n++;
    }else if ($r==0){
       
           $cal = $cal * $n;
           
            $n++;
        
    
    }
}
echo("soma de todos os números ímpare ".$cal1);
echo("<br> multiplicação de todos os números pares é ".$cal);

    


?>