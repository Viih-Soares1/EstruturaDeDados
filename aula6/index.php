<?php 

echo "<h2>  Tabuadas </h2> ";
echo "<br>";
echo "<h3>Exercício 2</h3>";
$tabuada = 0;
for($i = 0; $i <= 100 ;){
    echo "$i x $tabuada = ". $i * $tabuada;
    echo "<br>";
    $tabuada++;
    if($tabuada==11):
        $tabuada = 0;
        $i++;
    endif;    
}
echo "<h3> Exercício 3 </h3>";
for($i = 0; $i <= 100; $i++){
    if($i % 2 != 0):
         for ($x=0; $x <= 10 ; $x++) { 
            echo "$i X $x = ". $i * $x;
            echo "<br>";
         }
    endif;         
    
}   
 
    

    


