<?php

$sal = $_POST['num'];
$rad = $_POST['rad'];

switch($rad){
    case 1:
        
            $r = ($sal * 15)/100;
            $cal = $r+$sal;
             
            echo("o aumento e de 15% o salário e ".$cal);
        break;
    
   
    case 2:

        if ($sal<=1500.00){
            $r = (12*$sal)/100;
            $cal = $r+$sal;
            echo("o aumento e de 12% o salário e ".$cal);
            
        }   else if($sal<=1750.00){
                $r = ($sal * 10)/100;
            $cal = $r+$sal;
                
                echo("o aumento e de 10% o salário e ".$cal);

           }    else if($sal<=2000.00){
                    $r = ($sal * 7)/100;
            $cal = $r+$sal;
                   
                    echo("o aumento e de 7% o salário e ".$cal);

                }   else if($sal>=3000.00){
                    $r = ($sal * 5)/100;
            $cal = $r+$sal;
                   
                    echo("o aumento e de 5% o salário e ".$cal);
            }break;
            
    }



?>