<?php
/******escalares*****/
//string
$nome = "camila";
var_dump($nome);
if(is_string($nome)):
    echo "é uma string";
else:
    echo "nao é string";
endif;
echo "<hr>";

// int
$idade = 20;
var_dump($idade);
if(is_int($idade)):
    echo "é um int";
else:
    echo "nao é inteiro";
endif;
echo "<hr>";

//float
$altura = 1.59;
var_dump($altura);
if(is_float($altura)):
    echo "é um float";
else:
    echo "nao é float";
endif;
echo "<hr>";
//boolean

$admin = True;
var_dump($admin);
if(is_bool($admin)):
    echo "é um booleano";
else:
    echo "nao é boleano";
endif;
echo "<hr>";
/******compostos*****/
$carros = array("gol", "uno", "camaro", 12, 20.6, true);
var_dump($carros);
if(is_array($carros)):
    echo "é um array";
else:
    echo "nao é array";
endif;
echo "<hr>";
//object

class Cliente{
    public $nome;
    public function AtribuirNome($nome){
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente->AtribuirNome("camila");
var_dump($cliente);
if(is_object($cliente)):
    echo "é um objeto";
else:
    echo "nao é objeto";
endif;
/********especiais***** */
//null
$cidade = NULL;
var_dump($cidade);


