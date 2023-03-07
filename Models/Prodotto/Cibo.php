<?php

require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto
{
    public $scadenza;

    function __construct(Categoria $categoria, string $nome, string $descrizione, int $codice, string $immagine, float $prezzo, int $n_scorte, string $scadenza)
    {
        parent::__construct($categoria, $nome, $descrizione, $codice, $immagine, $prezzo, $n_scorte);
        $this->scadenza = $scadenza;
    }
}
