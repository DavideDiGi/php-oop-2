<?php

require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto
{
    public $materiale;

    function __construct(Categoria $categoria, string $nome, string $descrizione, int $codice, string $immagine, float $prezzo, int $n_scorte, string $materiale)
    {
        parent::__construct($categoria, $nome, $descrizione, $codice, $immagine, $prezzo, $n_scorte);
        $this->materiale = $materiale;
    }
}
