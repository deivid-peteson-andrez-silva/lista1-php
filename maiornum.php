<?php

$num1=$_POST['txtnumm1'];
$num2=$_POST['txtnumm2'];
$num3=$_POST['txtnumm3'];

if ($num1<$num2){

    if  ($num2<$num3){
        echo("numero 3");
           
    }   else{
            echo("numero 2");
        }
}else if ($num1<$num3){
     echo("numero 3");
    
}   else{
        echo("numero 1");
    }


?>










