<?php
/*curso PHP-Intermediario
https://www.php.net/
*/

echo "<pre>";
$USUARIOS = [
    3 => "João",
    1 => "Maria",
    7 => "Pedro",
    4 => "Guilherme"
];

//ordena o array em orde crescente
ksort($USUARIOS);

var_dump($USUARIOS);
echo "</pre>";
//função remove item array
function removeIdade(&$array,$item){
	if(isset($array[$item])){
		unset($array[$item]);
		return true;
	}

	return false;
}
//definindo array
$pessoas = [
    "Joãozinho"=>[
        "idade"=>19,
        "anoNac"=>2000
    ],
    "Mariazinha"=>[
        "idade"=>20,
        "anoNac"=>1999
    ],
    "Pedrinho"=>[
        "idade"=>21,
        "anoNac"=>1998
    ]
];
echo "Sem a função.<br><hr>";
var_dump($pessoas);
echo "<hr><br>Com a função.<br><hr>";
if(removeIdade($pessoas,"Joãozinho")){
	var_dump($pessoas);
}else{
	echo "O valor nao existe no Array";
}
echo "<hr></pre>";
