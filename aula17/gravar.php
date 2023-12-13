<?php 
define('DIRETORIO_CADASTRO', './cadastro');
$id = isset($_POST["id"]) ? $_POST["id"] : '';
$descricao = $_POST["descricao"];
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