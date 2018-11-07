<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 05/11/18
 * Time: 14:08
 */

class Funcionario{

    public $departamento;
    public $salario;
    public $CPF;

    // $dataEntrada vem da classe Data
    public $dataEntrada;

    public function recebeAumento(){

        $salarioAumento = $this->salario + (0.1 * $this->salario);

        return $salarioAumento;
    }

    public function calculaGanhoAnual(){

        $ganhoAnual = $this->salario * 12;

        return $ganhoAnual;

    }

    public function mostra(){
        return "O funcionário do departamento {$this->departamento}, funcionário desde {$this->dataEntrada->mostra()}, possui salário de R$ {$this->salario}";
    }

    public function __toString() {
        return $this->mostra();

    }

}

