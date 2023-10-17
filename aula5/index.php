<?php 
echo 'OlÁ Vinicera, Boa Noite!'; 
echo '<h1> For Sequencia de Fibonnaci</h1>';

$acumulador = 0;
for ($i=0; $i < 10 ; $i++) { 
    if($i>5):           
        echo "Contador: $i <br>";
        $acumulador = $acumulador+ $i;
        echo "Acumulador: $acumulador <br>";    
        echo "---------------------<br>";
    elseif($i < 5):
        echo "Contador: $i <br>";
        $acumulador--;
        echo "Acumulador: $acumulador <br>";
        echo "---------------------<br>";
    else:
        $acumulador += 10;
        echo "<strong> IGUAL A 5:   $acumulador <br> </strong>";
    endif;
}

