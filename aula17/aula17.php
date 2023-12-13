<?php 
define('DIRETORIO_CADASTRO', './cadastro');

$codigo = rand(1,6);

$cliente = [
    'id' => $codigo,
    'hash' => md5($codigo),
    'nome' => 'Vinícius',
    'endereco' => 'Araci Gomide',
    'numero' => 76,
    'LINGUAGENS' => ['PHP' , 'C#', 'JAVA']
];



$cliente_json = json_encode($cliente, JSON_UNESCAPED_UNICODE);
if (! file_exists(DIRETORIO_CADASTRO))
    mkdir(DIRETORIO_CADASTRO);
// 1- abre o arquivo
$recurso = fopen(DIRETORIO_CADASTRO ."/cliente-".$cliente['hash'].".json", 'w');

// 2 - escreve no arquivo
fwrite($recurso, $cliente_json);

// 3- fecha o arquivo

fclose($recurso);