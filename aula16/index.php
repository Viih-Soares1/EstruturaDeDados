 <?php

 $nomes = ['Vinícius', 'Maria'];

 echo json_encode($nomes, JSON_UNESCAPED_UNICODE);

 $json = '{
    "cep": "18133-080",
    "logradouro": "Rua Aracy Gomide",
    "complemento": "",
    "bairro": "Jardim Flórida",
    "localidade": "São Roque",
    "uf": "SP",
    "ibge": "3550605",
    "gia": "6531",
    "ddd": "11",
    "siafi": "7113"
  }';

  $decode = json_decode($json, true);
echo "<pre>";
var_dump($decode);