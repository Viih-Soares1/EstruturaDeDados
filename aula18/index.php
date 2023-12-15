<?php

// define('DIRETORIO_CADASTRO', './cadastro');

function Gravar_arquivo($conteudo,$codigo){
    $recurso = fopen("./cadastro-$codigo.json" , 'w');

    fwrite($recurso, $conteudo );

    fclose($recurso);    
    
}

function Ler_Arquivo($arquivo){   
    $resource = fopen($arquivo, 'r'); 
    $dados = fread($resource, filesize($arquivo));
    fclose($resource);
    return $dados;
}

$nome_arquivo = './cadastro/cliente-.json';
$arquivo =json_decode(Ler_Arquivo($nome_arquivo));


foreach($arquivo as $value){
    echo $value;
}


// LISTAR ARQUIVOS
$diretorio = './cadastro';

$resource = opendir($diretorio);
while($file = readdir($resource)){
    echo "Filename:  $file <br>";
} 

closedir($resource);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th> Nome </th>
            <th> Idade </th>
        </thead>
        <tbody>
            
            <tr>
                <td> <?= $arquivo->nome ?> </td>
                <td> <?= $arquivo->idade ?> </td>            
            </tr>
        </tbody>
    </table>
</body>
</html>