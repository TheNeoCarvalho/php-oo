<?php

spl_autoload_register(function($className){
	include ($className . ".php");
});

$funcionario = new Gerente(); 

echo "<pre>";
var_dump($funcionario);
echo "</pre>";

$funcionario->Cadastro("ADM", "ADM");
