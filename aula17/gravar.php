<?php 
function Ler_Arquivo($arquivo){   
    $resource = fopen($arquivo, 'r'); 
    $dados = fread($resource, filesize($arquivo));
    fclose($resource);
    return $dados;
}
define('DIRETORIO_CADASTRO', './cadastro');
$id = isset($_POST["id"]) ? $_POST["id"] : '';
$nome = $_POST["nome"];
$msg = '';
if(strlen($descricao) < 4){
    $msg = "Descrição menor que quatro caracteres<br>";
}
if ($id == ''){
    $msg .= "Código não digitado<BR>";
}
if (! is_numeric($id)){
   echo " numero não identificado<br>";
}
if ($msg != '' ){
    echo $msg;
}
else{
    $cadastro = [
        'id' => $id,
        'descricao' => $descricao
    ];

    if (! file_exists(DIRETORIO_CADASTRO))
        mkdir(DIRETORIO_CADASTRO);


    $json = json_encode($cadastro, JSON_UNESCAPED_UNICODE);
    
    $recurso = fopen(DIRETORIO_CADASTRO . "/cadastro-$id.json" , 'a');

    fwrite($recurso, $json );


    fclose($recurso);
}




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