<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 05/11/18
 * Time: 14:30
 */
require __DIR__."/Funcionario.php";
require __DIR__."/Data.php";



//      --- USUARIO 1 ---

$usuario1 = new Funcionario();
$usuario1->departamento = "contabilidade";
$usuario1->salario = 1000;
$usuario1->CPF = "100.654.852-56";

$dataEntrada = new Data();
$dataEntrada->dia = 12;
$dataEntrada->mes = 11;
$dataEntrada->ano = 2015;

$usuario1->dataEntrada = $dataEntrada;

$salarioAumento = $usuario1->recebeAumento();
$salarioAnual = $usuario1->calculaGanhoAnual();
print_r($usuario1);
echo $usuario1;


echo "\n \n";

//      --- USUARIO 2 ---

$usuario2 = new Funcionario();
$usuario2->departamento = "RH";
$usuario2->salario = 2500;
$usuario2->CPF = "457.654.962-75";

$dataEntrada = new Data();
$dataEntrada->dia = 01;
$dataEntrada->mes = 12;
$dataEntrada->ano = 2009;

$usuario2->dataEntrada = $dataEntrada;

$salarioAumento = $usuario2->recebeAumento();
$salarioAnual = $usuario2->calculaGanhoAnual();
print_r($usuario2);
echo $usuario2;


