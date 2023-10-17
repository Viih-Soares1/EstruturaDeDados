<?php
echo "<h2> AULA 3 -- Operadores Aritméticos ";
echo "<br>";
echo " === Compara se é o mesmo valor e o mesmo tipo de dado <br>";
echo "== Compara se é somente o mesmo valor sem verificar o tipo de variável <br>";
$valor1 = 10;
$valor2 = 20;
$res = 0;
$res = $valor1 + $valor2;
print('Resultado da soma é ---> ' . $res . '<br>');
print('Resultado da subtração é ---> ' . $valor1 - $valor2 . '<br>');
print('Resultado da multiplicação é ---> ' . $valor1 * $valor2 . '<br>');
print('Resultado da divisao é ---> ' . $valor1 / $valor2 . '<br>');
print('Resultado da potencia é ---> ' . $valor2 ** $valor1 . '<br>');
print('Resto da divisao é ---> ' . $valor1 % $valor2 . '<br>');
$dia = 18;
$mes = 11;
$ano = 1997;
echo "<hr>";
echo  'Data de NASCIMENTO: <strong>' . $dia . '/' . $mes . '/' . $ano;
echo "<br>";
$idade = 2023 - $ano;
echo 'Sua idade é ----> ' .  $idade;
echo "<br>";
echo " <h2> Tabuada do Dois </h2> <br>";
// $dois = 2;
// echo '2 x 1 = ' . $dois * 1 .'<br>';
// echo '2 x 2 = ' . $dois * 2 .'<br>';
// echo '2 x 3 = ' . $dois * 3 .'<br>';
// echo '2 x 4 = ' . $dois * 4 .'<br>';
// echo '2 x 5 = ' . $dois * 5 .'<br>';
// echo '2 x 6 = ' . $dois * 6 .'<br>';
// echo '2 x 7 = ' . $dois * 7 .'<br>';
// echo '2 x 8 = ' . $dois *  8 .'<br>';
// echo '2 x 9 = ' . $dois * 9 .'<br>';
// echo '2 x 10 = ' . $dois *  10 .'<br>';

for ($i = 0;; $i++) {
    if ($i > 10) :
        break;
        
    endif;
    echo '2 x ' . $i . '=' . $i * 2 . '<br>';
}
