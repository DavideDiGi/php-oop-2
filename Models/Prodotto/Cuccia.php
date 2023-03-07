<?php

require_once __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto
{
    public $taglia;

    function __construct(Categoria $categoria, string $nome, string $descrizione, int $codice, string $immagine, float $prezzo, int $n_scorte, string $taglia)
    {
        parent::__construct($categoria, $nome, $descrizione, $codice, $immagine, $prezzo, $n_scorte);
        $this->taglia = $taglia;
    }
}
