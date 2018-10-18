<?php


class Gerente extends Funcionario{

	private $salario;

	public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
} 