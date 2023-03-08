<?php

require_once __DIR__ . '/../Categoria.php';
require_once __DIR__ . '../../../traits/Recensione.php';

class Prodotto
{
    use Recensione;

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
    public function acquista($quantita): void
    {
        if ($quantita > $this->n_scorte) {
            throw new Exception("Errore: $this->nome non disponibile in quantità richiesta.");
        }

        if ($this->n_scorte === 0) {
            throw new Exception("Errore: $this->nome esaurito.");
        }

        $this->n_scorte -= $quantita;
    }
}
