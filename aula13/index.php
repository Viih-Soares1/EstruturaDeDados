<?php 

// $cidade = 'São Roque';

// $novo_valor = str_replace('o', 'E', $cidade);

// echo $novo_valor;

// $nome = 'Vinícius';
// echo '<br>';

// echo ltrim($nome, 'V');
// echo '<br>';

// echo rtrim($nome, 's');



// if(strpos($nome, 'V')=== true):
//     echo 'Encontrou <br>';
//     echo strpos($nome, 'V');
// else:
//     echo 'Não Encontrou';
//      echo strpos($nome, 'V');
// endif;

$nome = "Vinicius";
$numero = 300.787;

echo number_format($numero, 2,'.');
echo '<br>';

$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 25, "<br />\n");
echo $newtext;
echo "<br>";

echo str_shuffle($nome);

echo "<br>";
$string = 'Uma raposa preguiçosa pulou a cerca';

if (str_starts_with($string, 'Uma')) {
    echo "A string começa com 'Uma'\n";
}

elseif(str_starts_with($string, 'uma')) {
    echo 'A string começa com "uma"';
} 
else {
    echo '"uma" não foi encontrado porque o case não corresponde';
}




