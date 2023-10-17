<?php 

$arrayvazio =[]; //vazio

$arrayMisto = [11, "joão", false];
echo $arrayMisto[1] . ' '. $arrayMisto[0] . '<br>' ;

$arrayMisto[1] = "MARIA";
echo $arrayMisto[1] . ' '. $arrayMisto[0] . '<br>' ;

$arrayMisto[5]= 666;
echo $arrayMisto[5] . ' '. $arrayMisto[1] . '<br>' ;


$numeros = ['M', 'F', 'N/C', 'F', 'F', 'M', 'A'];

$frutas = ["banana", "abacaxi", "laranja"];
$totalM = 0;
$totalF = 0;
$totalA = 0;
foreach($numeros as $value){
   switch ($value) {
    case 'M':
        $totalM++;
    break;       
    case 'F':
        $totalF++;
    break;
    case 'N/C':
        $totalA++;
    break;
    case 'A':
        $totalA++;
    break;
    default:   
     
   }
   
}
echo "Masculino: $totalM <br>";
echo "Feminino: $totalF <br>";
echo "Outros: $totalA ";
