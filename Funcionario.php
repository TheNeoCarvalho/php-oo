<?php

abstract class Funcionario extends Usuario{	

	private $cargo;
	private $setor;

	function __construct(){
		echo "Um objeto da classe <b>".__CLASS__."</b> foi Criado<br>";
	}

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }


    function Cadastro($setor, $cargo){
    	$this->setor = $setor;
    	$this->cargo = $cargo;
    }
}