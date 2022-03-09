<?php

$placa= $_POST['txtNum'];

$r = $placa % 10;

    if($r==0){
        echo("<center> segumda </center>");
    }
        else if($r<=2){
            echo("o dia de rodízio é segunda");
        }
            else if($r<=4){
                echo("o dia de rodízio é terça");
            }
                else if($r<=6){
                    echo(" o dia de rodízio é quarta");
                }
                    else if($r<=8){
                        echo(" o dia de rodízio é quinta");
                    }
                        else if($r<=9){
                            echo("o dia de rodízio é sexta");
                        }

?>
