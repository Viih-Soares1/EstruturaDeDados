<?php
function DataFormatoBR($value){
    $arrayData = explode('-', $value);
    return $arrayData[2] . '/' . $arrayData[1] . '/' . $arrayData[0];
}
function DataFormatoING($value){
    $arrayData = explode('/', $value);
    return $arrayData[0]. '-' . $arrayData[1] . '-' . $arrayData[2];
}
$msg = '';
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
if ($nome == ''){
   $msg = 'Informe o nome <br>';
} 
if ($email == ''){
    $msg .= 'Informe o Email <br>';
}
if($msg != ''){
    echo $msg;
}
if(!is_numeric($idade)){
    $msg.= 'Informe a idade <br>';
}
