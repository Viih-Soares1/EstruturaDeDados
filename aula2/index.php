<?php   
echo "<h2> <i>";
echo "Olá Mundo!";
print "<p> Olá Mundo!";
echo "<br>";
$num = 11111;
var_dump($num);
$num = 111111;
echo 'Tipo da variável: '. gettype($num) ."   Valor da variável: $num";
echo '<br>';
$num = 1.1;
var_dump($num);
echo'<br>';
echo gettype($num);
echo '<br>';
$tex = 'oi';
var_dump($tex);
echo '<br>';
echo gettype($tex);
echo '<br>';
$num = new StdClass;
echo gettype($num);
echo "<br>";
$list = ["oi", 'tudo bem', 22, 33, true];
echo gettype($list);
echo "<br>";
var_dump($list); 
echo '<br>';
define('SERVIDOR', 'localhost');
echo SERVIDOR;
$pessoas =[  'Nome' => 'Vinícius',
            'Sala' => 10, 
            'Matéria' => 'Estrutura de Dados'];

$valor = 10;

           