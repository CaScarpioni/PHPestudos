<?php
//escopo global
$nome = "camila scarpioni";
$a= 1;
$b= 3;
$c= 7;
function exibeNome(){
    global $nome;
    echo $nome;

}
exibeNome();

echo"<hr>";

function exibeCidade(){
    //escopo local
    global $cidade;
    $cidade = "rio de janeiro";
}

exibeCidade();
echo $cidade;
echo"<hr>";


function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];

}

soma();