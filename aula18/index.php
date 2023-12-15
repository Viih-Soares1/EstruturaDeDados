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

// LISTAR ARQUIVOS
$diretorio = './cadastro';

$recurso = opendir($diretorio);
while($file = readdir($recurso)){  
    echo $file{id};
//    if(! file_exists($file)){
//       $dados = json_decode(Ler_Arquivo($file));
//       echo $dados;
//     }
}

closedir($recurso);

?>
<!-- <!DOCTYPE html>
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
                <td> </td>
                <td> </td>            
            </tr>
        </tbody>
    </table>
</body>
</html> -->