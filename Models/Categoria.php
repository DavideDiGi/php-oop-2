<?php

require_once __DIR__ . '/Prodotto/Prodotto.php';

class Categoria
{
    public $nome;
    public $icona;

    function __construct($nome, $icona)
    {
        $this->nome = $nome;
        $this->icona = $icona;
    }
}
