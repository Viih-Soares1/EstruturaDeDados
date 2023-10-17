<?php 

$arrayvazio =[]; //vazio

$arrayMisto = [11, "joão", false];
echo $arrayMisto[1] . ' '. $arrayMisto[0] . '<br>' ;

$arrayMisto[1] = "MARIA";
echo $arrayMisto[1] . ' '. $arrayMisto[0] . '<br>' ;

$arrayMisto[5]= 666;
echo $arrayMisto[5] . ' '. $arrayMisto[1] . '<br>' ;


$numeros = [12, 55, 1, 234, 356];

$frutas = ["banana", "abacaxi", "laranja"];
$total = 0;
foreach($numeros as $value){
    if($value % 2 == 0){
        echo "Valor Par $value  <br>";
    }
    else{
        echo "Valor Impar $value <br>";
    }
   
}
