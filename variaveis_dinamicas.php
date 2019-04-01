<?php

$var = "teste";
$$var = "Curso PHP intermediario";

echo $teste."<br><hr>";
echo "Dados array extraido por variavel<br>";

//Array dos dados

$dados = [
    'nome'=>'nome',
    'email'=>'email@email.com',
    'telefone'=>'11-2233445566',
    'site'=>'www.google.com'
];

foreach ($dados as $chave => $valor){
	//Cria variavel dinamica com o nome da chave do array
	$$chave = $valor;
}
//acessa a variavel criada dinamicamente
echo $nome."<br>";
echo $email."<br>";
echo $telefone."<br>";
echo $site."<hr>";

$pessoa=[
    'nome'=>'Tico',
    'idade'=>'40',
    'naturalidade'=>'Brasil',
    'dataNac'=>'1990',
    'enderesso'=>'rua 11 771',
    'cidade'=>'Sao Paulo',
    'profisao'=>'Pedreiro',
    'estadoCivil'=>'casado'
];
foreach ($pessoa as $chave => $valor){
	$$chave=$valor;
}
echo $nome."<br>";
echo $idade."<br>";
echo $naturalidade."<br>";
echo "prequiça de colocar o restante do nome das chave pessoa onde e retornado o valor com var dinamica.<hr>";

echo "<pre>";
var_dump($pessoa);
echo "</pre>";
