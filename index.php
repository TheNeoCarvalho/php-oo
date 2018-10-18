<?php

spl_autoload_register(function($className){
	include ($className . ".php");
});

$gerente = new Gerente(); 

echo "<pre>";
var_dump($gerente);
echo "</pre>";