<?php 
echo "Olá Mundo!";
echo " <h2> While </h2> <br> ";

$i = 1;
$parcelas = 6;
$parcelas_pagas = 3;

while ($i <= $parcelas) {
    if($i <= $parcelas_pagas){
        echo "Parcela $i:  PAGO <br>";        
    }
    else if($i == 5){
        echo "Parcela $i:  ABONADA <br>";
    }
    else{
        echo "Parcela $i: EM ABERTO <br>";
    }   
   $i++;
}
echo "<br>";

$fim = false;
$comissao = 0;

while($fim == false){
    $comissao +=10;    
    if($comissao == 1000){        
        break; 
        // $fim = true;  // Outra condição para parar o while
    }
    echo "Comissao: $comissao  <br>";
    // $fim = ($comissao == 1000);
}

while($fim == false){
    for ($i=0; $i <=10 ; $i++) { 
        break 2; // Aqui o break acaba com o for e o while
    }
}
echo "<br>";

$i = 0;

while($i <=9){
    $i++;
    if($i >=6 and $i <= 8){
        continue;
    }     
    echo "Contador $i <br>";
}