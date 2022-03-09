    <?php 
    $primo = $_POST['num1'];
    $div=0;
        for($i =1; $i<=$primo; $i++){     
            if($primo % $i == 0){
                $div++; 
            }
        }
            if($div==2 || $primo==1){
                echo($primo."  e um numero primo");
            }
                else {
                    echo($primo." nao e um numero primo");          
            }
?>