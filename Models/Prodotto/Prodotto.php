<?php

require_once __DIR__ . '/../Categoria.php';

class Prodotto
{
    public $categoria;
    public $nome;
    public $descrizione;
    public $codice;
    public $immagine;
    public $prezzo;
    public $n_scorte;

    function __construct(Categoria $categoria, string $nome, string $descrizione, int $codice, string $immagine, float $prezzo, int $n_scorte)
    {
        $this->categoria = $categoria;
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->codice = $codice;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->n_scorte = $n_scorte;
    }
}
