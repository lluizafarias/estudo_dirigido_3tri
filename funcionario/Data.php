<?php
/**
 * Created by PhpStorm.
 * User: Luiza Farias
 * Date: 07/11/2018
 * Time: 10:45
 */

class Data{

    public $dia;
    public $mes;
    public $ano;

    public function mostra(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}